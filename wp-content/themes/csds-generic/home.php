<?php 
/*
Template name: Blog
*/

get_header(); ?>

<main class="main" role="main">
    <section class="qld__body qld__body--alt qld__body--breadcrumb">
    <div class="container-fluid">
        <nav class="qld__breadcrumbs row" aria-label="breadcrumb">
        <?php custom_breadcrumbs(); ?>
        </nav>
    </div>
    </section>

<!-- Start Our Stories Section -->
    <section class="qld__card--wrapper qld__body qld__body--alt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 qld__card-intro qld__card-intro--sm">
                    <h1 class="capitalised" data-action="tag-paramater">
                        <?php 
                        $posts_id = get_option( 'page_for_posts' );
                        $featured = get_field('featured_title', $posts_id);
                        if(!empty($featured)) {
                            echo esc_html($featured);
                        } else {
                            echo 'Featured Posts';
                        }
                        ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php 
                $posts_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'post_status' => 'publish',
                    'order' => 'desc',
                    'category_name' => 'featured',                  
                );
                $posts = new WP_Query( $posts_args );
                if($posts->have_posts() ) :
                ?>
                <ul class="qld__card-list qld__card-list--matchheight">
                <?php while ($posts->have_posts()): $posts->the_post(); 
                      $image_id = get_post_thumbnail_id();
                      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); 
                      ?>
                    <li class="col-xs-12 col-md-6">
                        <div class="qld__card qld__card--multi-click qld__card--image">
                            <a href="<?php echo the_permalink(); ?>"
                                class="qld__card__image-link"
                                aria-label="Atherton Hospital redevelopment reaches new heights">
                                <div
                                class="qld__responsive-media-img--bg"
                                style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"
                                alt="<?php echo $image_alt; ?>"
                                ></div>
                            </a>
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <p class="qld__card__date"><?php echo get_the_date() ?></p>
                                        <h3 class="qld__card__title">
                                            <a
                                                class="qld__card--clickable__link"
                                                href="<?php echo the_permalink(); ?>"
                                                ><?php echo the_title(); ?></a
                                            >
                                        </h3>
                                        <p class="qld__card__description"><?php echo the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <div class="qld__card__footer">
                                    <hr class="qld__horizontal-rule" />
                                    <div class="qld__card__footer-inner">
                                        <?php 
                                        $post_id = get_the_id();
                                        $post_categories = get_the_category( $post_id, array( 'fields' => 'all' ) );
                                        $cats = array();
                                        
                                        if( $post_categories ){ // Always Check before loop! ?>
                                        <ul class="qld__card__tags qld__tag-list">
                                            <?php
                                            foreach($post_categories as $c){
                                                $cats[] = array( 'name' => $c->name, 'slug' => $c->slug );
                                            ?>
                                            <li>
                                                <a
                                                class="qld__tag qld__tag--link"
                                                href="<?php echo get_category_link($c->term_id); ?>"
                                                ><?php echo $c->name ;?></a
                                                >
                                            </li>
                                            <?php }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                
            </div>
        </div>
    </section>

<!-- Start Latest Articles -->
    <section class="qld__body qld__card--wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="qld__card-intro col-xs-12 qld__card-intro--no-top-p">
                    <?php 
                    $latest_title = get_field('latest_posts_title', $posts_id);
                    ?>
                    <h2>
                    <?php
                    if(!empty($latest_title)){
                        echo $latest_title;
                    } else {
                        echo 'Latest Posts';
                    }
                    ?>
                    </h2>
                </div>
            </div>
            <div class="row">
            <?php 
                $latest_args = array(
                    'post_type' => array(
                        'post',
                        'topics',
                    ),
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'order' => 'DESC',
                );
                $latest = new WP_Query( $latest_args );
                if($latest->have_posts() ) :
                ?>
                <ul class="qld__card-list qld__card-list--matchheight">
                    <?php while ($latest->have_posts()): $latest->the_post(); 
                        $image_id_latest = get_post_thumbnail_id();
                        $image_alt_latest = get_post_meta($image_id_latest, '_wp_attachment_image_alt', TRUE); 
                        ?>
                        <li class="col-xs-12 col-md-6 col-lg-4">
                            <div class="qld__card qld__card__multi-action qld__card--image">
                                <a class="qld__card__image-link" href="<?php echo the_permalink(); ?>">
                                    <div class="qld__responsive-media-img--bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" alt="<?php echo $image_alt_latest ?>"></div>
                                </a>
                                <div class="qld__card__inner">
                                    <div class="qld__card__content">
                                        <div class="qld__card__content-inner">
                                            <p class="qld__card__date"><?php echo get_the_date() ?></p>
                                            <h3 class="qld__card__title">
                                            <a class="qld__card--clickable__link" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>   
                                            </h3>
                                            <p class="qld__card__description"><?php echo the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                    <div class="qld__card__footer">
                                        <hr class="qld__horizontal-rule">
                                        <div class="qld__card__footer-inner">
                                            <?php 
                                                $post_id_latest = get_the_id();
                                                $post_categories_latest = get_the_category( $post_id_latest, array( 'fields' => 'all' ) );
                                                $cat_latest = array();
                                                if( $post_categories_latest ){
                                             ?>
                                            <ul class="qld__card__tags qld__tag-list">
                                                <?php 
                                                foreach ($post_categories_latest as $p) {
                                                    $cat_latest[] = array( 'name' => $p->name, 'slug' => $p->slug );
                                                ?>
                                                <li>
                                                    <a class="qld__tag qld__tag--link" href="<?php echo get_category_link($p->term_id); ?>"><?php echo $p->name; ?></a>
                                                </li>
                                                <?php 
                                                }
                                            }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <div class="qld__search-pagination__list"><?php  the_posts_pagination(); ?></div>

                </ul>

                <?php endif; ?>
            </div>

            <?php
            $link = get_field('all_posts_link', $posts_id);
            if($link){ 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';?>
            <div class="qld__card-intro row">
               <a href="<?php echo esc_url($link_url); ?>" class="all-links" target="<?php echo esc_attr( $link_target ); ?>">
               <h3 class="qld__card__title qld__all_posts__link"><?php if(!empty($link_title)){
                    echo esc_html($link_title);
                } else {
                    echo "View All Posts";
                }  ?></h3></a>
            </div>
                <?php }  ?>
        </div>
    </section>
    <!-- subscription form -->
    <?php 
$index_form = get_field('add_index_form_shortcode', $posts_id);
$index_heading = get_field('blog_index_form_heading', $posts_id);
$index_content = get_field('blog_index_form_content', $posts_id);
$index_colour = get_field('blog_index_form_colour', $posts_id);

// colour selector
if (!empty($index_colour)) {
    $index_classColour = ' qld__body--' . $index_colour;
}

if(!empty($index_form)) :
?>

<section class="qld__body <?php echo esc_attr($index_classColour); ?> qld__subscription">
    <div class="container-fluid">
        <div class="qld__subscription__container">
            <!-- content -->
            <div class="qld__sub__form-content">
                <div class="qld__subscription__form__content">
                    <h2 class="qld__display-xl"><?php echo esc_attr($index_heading); ?></h2>
                    <div class="qld__abstract"><?php echo esc_attr($index_content); ?></div>
                </div>
            </div>
             <!-- form -->
             <div class="qld__blog__form qld__sub__form-content">
                <div class="qld__subscription__form"><?php echo do_shortcode($index_form); ?></div>                
            </div>
        </div>
    </div>
</section>
<?php 
 endif 
?>
</main>

<?php
get_footer();

?>
