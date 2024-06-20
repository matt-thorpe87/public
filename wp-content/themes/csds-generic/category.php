<?php get_header(); ?>
<main class="main" role="main">
    <section class="qld__body qld__body--breadcrumb">
        <div class="container-fluid">
            <nav class="qld__breadcrumbs row" aria-label="breadcrumb">
            <?php custom_breadcrumbs(); ?>
            </nav>
        </div>
    </section>
    <section class="qld__card--wrapper qld__body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 qld__card-intro qld__card-intro--sm">
                    <h1><?php single_cat_title(); ?></h1>
                    <?php
                    $cat_desc = category_description();
                    if(!empty($cat_desc)){ ?>
                        <div class="qld__abstract"><?php
                        echo $cat_desc; ?></div>
                        <?php } ?>
                </div>
            </div>
            
            <?php 
            $category = get_queried_object();

            $postscat = new wp_query(
                array(
                    'post_type' => 'any',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'category_name' => $category->slug,
                )
                );           
            if ($postscat->have_posts()) : ?>
            <div class="row">
                <ul class="qld__card-list qld__card-list--matchheight">
                    <?php while ($postscat->have_posts()): $postscat->the_post(); 
                        $image_id_latest = get_post_thumbnail_id();
                        $image_alt_latest = get_post_meta($image_id_latest, '_wp_attachment_image_alt', TRUE); 
                        if ( !empty(get_the_post_thumbnail_url())) {
                            $feature_img = get_the_post_thumbnail_url();
                        } 
                        elseif (function_exists('z_taxonomy_image_url') && !empty(z_taxonomy_image_url())){
                            $feature_img = z_taxonomy_image_url();
                        }
                        else {
                            $feature_img = '/wp-content/themes/csds-generic/dist/assets/images/img/header-logo-qgov--dark.svg';
                        }
                        ?>
                        <li class="col-xs-12 col-md-6 col-lg-4">
                            <div class="qld__card qld__card__multi-action qld__card--image">
                                <a class="qld__card__image-link" href="<?php echo the_permalink(); ?>">
                                    <div class="qld__responsive-media-img--bg" style="background-image: url('<?php echo $feature_img; ?>')" alt="<?php echo $image_alt_latest ?>"></div>
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
                    <?php endwhile;
                else: ?>    
                <p>Sorry, no posts matched your criteria.</p>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();

?>
