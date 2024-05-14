<?php get_header(); 

$search_term = $_GET["s"];
$s = get_search_query();
$blog_id = get_current_blog_id();
$args = array(
    's' => $s,
    'post_type' => 'any',
    'orderby' => 'desc',
    'paged' => $paged
); ?>

<!-- // The Query -->
<div class="qld__body">
    <div class="container-fluid">
        <?php
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            echo "<h2 class='qld__card__title qld__search__results__title'>Search Results in " .  get_bloginfo('name') ." for: " . get_query_var('s') . "</h2>";
                $lastposts = get_posts($args);
                foreach ($lastposts as $post):
                    setup_postdata($post);
                    ?>
                    <div class="qld__card qld__card--clickable" style="margin:1rem;padding:1rem;">
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                                <div class="qld__service_search__result__header">
                                    <h3 class="qld__card__title">
                                        <a href="<?php the_permalink(); ?>" class="qld__card--clickable__link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <h4 class="qld__card__title">
                                        <?php echo get_bloginfo('name') ?>
                                    </h4>
                                </div>
                                <?php the_excerpt() ?>
                            </div>
                            <div class="qld__card__footer">
                                <div class="qld__card__footer-inner">
                                    <ul class="qld__tag-list qld__card__tags">
                                        <?php
                                        $id = get_the_id();
                                        $postCategory = get_the_category($id);
                                        foreach ($postCategory as $postCat): ?>
                                            <li>
                                                <a class="qld__tag qld__card__tag qld__tag--link" tabindex="0"
                                                    href="<?php echo get_category_link($postCat->cat_ID) ?>">
                                                    <?php echo $postCat->name; ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                // restore_current_blog();
            // }
        } else {
            ?>
            <section class="qld__body qld__page-alerts--wrapper" id="page-alert-123"
                style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container-fluid">
                    <div class="qld__page-alerts qld__page-alerts--info">
                        <div class="qld__page-alerts--heading qld__display-lg">Nothing Found in <?php echo get_bloginfo( 'name' ); ?></div>
                        <div>Sorry, but nothing matched your search criteria. Please try again with some different keywords.
                        </div>
                    </div>
                </div>
            </section>

        <?php } ?>
        
    </div>
    <?php
    $search = get_field('multi_search', 'option'); 
    if ($search != 'no') : 
    ?>
    <div class="container-fluid">
        <?php
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            $blogs = get_last_updated();
            echo "<h2 class='qld__card__title qld__search__results__title'>Search Results across network for: " . get_query_var('s') . "</h2>";
            foreach ($blogs as $blog) {
                switch_to_blog($blog['blog_id']);
                $lastposts = get_posts($args);
                foreach ($lastposts as $post):
                    setup_postdata($post);
                    ?>
                    <div class="qld__card qld__card--clickable" style="margin:1rem;padding:1rem;">
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                                <div class="qld__service_search__result__header">
                                    <h3 class="qld__card__title">
                                        <a href="<?php the_permalink(); ?>" class="qld__card--clickable__link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <h4 class="qld__card__title">
                                        <?php echo get_bloginfo('name') ?>
                                    </h4>
                                </div>
                                <?php the_excerpt() ?>
                            </div>
                            <div class="qld__card__footer">
                                <div class="qld__card__footer-inner">
                                    <ul class="qld__tag-list qld__card__tags">
                                        <?php
                                        $id = get_the_id();
                                        $postCategory = get_the_category($id);
                                        foreach ($postCategory as $postCat): ?>
                                            <li>
                                                <a class="qld__tag qld__card__tag qld__tag--link" tabindex="0"
                                                    href="<?php echo get_category_link($postCat->cat_ID) ?>">
                                                    <?php echo $postCat->name; ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                restore_current_blog();
            }
        } else {
            ?>
            <section class="qld__body qld__page-alerts--wrapper" id="page-alert-123"
                style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container-fluid">
                    <div class="qld__page-alerts qld__page-alerts--info">
                        <div class="qld__page-alerts--heading qld__display-lg">Nothing Found across the website network</div>
                        <div>Sorry, but nothing matched your search criteria. Please try again with some different keywords.
                        </div>
                    </div>
                </div>
            </section>

        <?php } ?>
        
    </div> 
    <?php endif ?>
    <div class="container-fluid" style="padding:2rem;">
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


<?php get_footer(); ?>