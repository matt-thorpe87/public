<?php 
/*
Template name: Search
*/
get_header(); 

$search_term = $_GET["s"];
$s = get_search_query();
$blog_id = get_current_blog_id();
$args = array(
    's' => $s,
    'post_type' => 'any',
    'orderby' => 'desc',
    'paged' => $paged,
    'posts_per_page' => 10,
    'cat' => '',
    
    
    ); ?>

<!-- // The Query -->
<div class="qld__body">
    <div class="container-fluid qld__search__page">
        <!-- sidebar -->
        <div class="col-xs-12 col-lg-3">
            <div class="qld__side-nav qld__accordion">
                <h3 class="page-title">
                    Filter Results
                </h3>

                <nav class="qld__side-nav__content qld__accordion--closed qld__accordion__body">
                    <ul class="qld__link-list">
                        <li class="menu-item">
                            <a class="<?php echo (!isset($_GET['cat']) ? 'current' : false); ?>" href="<?php echo home_url(); ?>?s=<?php echo $s; ?>">
                                All
                            </a>
                        </li>
                        <?php $categories = get_categories();
                            foreach ($categories as $category) {
                                ?>
                                <li class="menu-item"> 
                                    <a class="<?php ip_search_filter_item_class($category->term_id); ?> qld__sidenav__link qld__main-nav__item-home qld__main-nav__item-link"  href="<?php echo home_url(); ?>?s=<?php echo $s; ?>&cat=<?php echo $category->term_id; ?>"><?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                            <?php }
                        ?>
                    </ul>
                </nav>
            </div>  
        </div>
        <!-- end sidebar -->
        <div class="col-xs-12 col-lg-9 qld__search-results__container">
            <?php include 'searchform.php'; ?>

            <?php
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
            echo "<div class='qld__search__info'><h4 class='qld__search__info-query'>Results in " .  get_bloginfo('name') ." for: <span class='qld__search__info-query-term'>" . get_query_var('s') . "</span></h4></div>";
            ?>
            <div class="qld__search__results">
                <ol class="qld__link-list qld__search__results-list">
                    <?php
                    $lastposts = get_posts($args);
                    foreach ($lastposts as $post):
                        setup_postdata($post);
                        ?>
                            <li class="qld__search__result">  
                                <div class="qld__search__result-inner">
                                    <div class="qld__search__result-header">
                                        <a href="<?php the_permalink(); ?>" class="qld__search__result-title">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="qld__search__result-summary">
                                    <?php echo the_excerpt(); ?>
                                </div>                                      
                                
                                    
                                <?php 
                                $id = get_the_id();
                                $postCategory = get_the_category($id);
                                if (!empty($postCategory)) { ?>
                                    <div class="qld__search__result-tags">
                                        <ul class="qld__tag-list">
                                            <?php
                                            foreach ($postCategory as $postCat): ?>
                                                <li>
                                                    <a class="qld__tag qld__tag--link" tabindex="0"
                                                        href="<?php echo get_category_link($postCat->cat_ID) ?>">
                                                        <?php echo $postCat->name; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </li>
                        
                        <?php
                    endforeach;
                        // restore_current_blog();
                    // } ?>
                </ol>
            </div>
        <?php
        } else {
            ?>
                
            <div class="qld__search__results qld__search__results--no-results">
                <div class="qld__display-lg">Your search for <span class="qld__search__info-query-term"><?php echo $s; ?></span> in <?php echo get_bloginfo( 'name' ); ?> didn't return any results.</div>
                <p class="qld__abstract">You could try: </p>
                <ul>
                    <li>Check the spelling of your keywords.</li>
                    <li>Searching again using other words.</li>
                    <li>Using fewer keywords.</li>
            </div>
                
        <?php } 
        $search = get_field('multi_search', 'option'); 
        if($search == 'no') :
        ?>
            <div class="row">
                <div class="qld__pagination__row">
                    <nav class="pagination qld__all_posts__link">
                        <?php   
                        global $paged;
                        $big = 999999999; // need an unlikely integer
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'paged' => $paged,
                            'format' => '?paged=%#%',
                            'current' => max( 1, $paged ),
                            'total' => $the_query->max_num_pages
                        ) ); 
                        wp_reset_query();
                        ?>
                    </nav>
                </div>
            </div>
            <?php
        endif ;
        if ($search != 'no') : 
        ?>
        
            <?php
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
            $blogs = get_last_updated();
            echo "<div class='qld__search__info'><h4 class='qld__search__info-query'>Search results across network for: <span class='qld__search__info-query-term'>" . get_query_var('s') . "</span></h4></div>"; ?>
            <div class="qld__search__results">
                <ol class="qld__link-list qld__search__results-list">
                    <?php
                    foreach ($blogs as $blog) {
                        switch_to_blog($blog['blog_id']);
                        $lastposts = get_posts($args);
                        foreach ($lastposts as $post):
                            setup_postdata($post);
                            ?>
                            <li class="qld__search__result">
                                
                                <div class="qld__search__result-inner">
                                    <div class="qld__search__result-header">
                                        <a href="<?php the_permalink(); ?>" class="qld__search__result-title">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <div class="qld__search__result-header">
                                        <p class="qld__search__result-title">
                                            <?php echo get_bloginfo('name') ?>
                                        </p>
                                    </div>
                                </div>  
                                        
                                <?php 
                                if( !empty(the_excerpt())) { ?>
                                    <p class="qld__search__result-summary"><?php echo the_excerpt(); ?> </p>
                                <?php }
                            
                                $id = get_the_id();
                                $postCategory = get_the_category($id);
                                if(!empty($postCategory)){ ?>
                                    <div class="qld__search__result-tags">
                                        <ul class="qld__tag-list">
                                            <?php
                                            
                                            foreach ($postCategory as $postCat): ?>
                                                <li>
                                                    <a class="qld__tag qld__tag--link" tabindex="0"
                                                        href="<?php echo get_category_link($postCat->cat_ID) ?>">
                                                        <?php echo $postCat->name; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </li>
                            <?php
                        endforeach;
                        restore_current_blog();
                    } ?>
                </ol>
            </div>
            <?php
        } else {
            ?>
            <div class="qld__search__results qld__search__results--no-results">
                <div class="qld__display-lg">Your search for <span class="qld__search__info-query-term"><?php echo $s; ?></span> across the network didn't return any results.</div>
                <p class="qld__abstract">You could try: </p>
                <ul>
                    <li>Check the spelling of your keywords.</li>
                    <li>Searching again using other words.</li>
                    <li>Using fewer keywords.</li>
            </div>

        <?php } ?>
            <div class="row">
                <div class="qld__pagination__row">
                    <nav class="pagination qld__all_posts__link">
                        <?php   
                        global $paged;
                        $big = 999999999; // need an unlikely integer
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'paged' => $paged,
                            'format' => '?paged=%#%',
                            'current' => max( 1, $paged ),
                            'total' => $the_query->max_num_pages
                        ) ); 
                        wp_reset_query();
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    
    <?php endif ?>

            </div>
        </div> 
    </div>
    
    
    
</div>


<?php get_footer(); ?>