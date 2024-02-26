<?php 

/*
Template name: Homepage
*/

get_header(); ?>

<main class="main" role="main">


<?php get_template_part( 'template_parts/hero_banner' ); ?>



<section class="qld__body qld__body--alt qld__service_facility_cards qld__card--wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="qld__card-intro col-xs-12">
                <h2 class="qld__service_facility_cards__heading">Featured topics</h2>
            </div>
        </div>

        <div class="row">
            <ul class="qld__card-list qld__card-list--matchheight" data-type="three">
                <?php 
                    $topics = new WP_Query(array(
                        'posts_per_page' => 6, /* -1 returns all of the queries */
                        'post_type' => 'topics'
                        // 'orderby' => 'title', /* default is 'post_date' | 'rand' for random */
                        // 'order' => 'ASC'
                    ));

                    while($topics->have_posts()){
                        $topics->the_post(); ?>

                <li class="col-xs-12 col-md-4">
                    <div class="qld__card qld__card__multi-action qld__card--image">
                            <a aria-label="Brand" aria-describedby="card-22724" class="qld__card__image-link" href="<?php the_permalink(); ?>">
                                <?php
                                // Get the post ID
                                $post_id = get_the_ID();
                                ?>

                                <div class="qld__responsive-media-img--bg" style="background-image: url('<?php 
                                    echo the_post_thumbnail_url();
                                ?>');" >
                                </div>
                            </a>
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                                <div class="qld__card__content-inner">
                                    
                                    <h3 class="qld__card__title">
                                    <a aria-label="Brand" aria-describedby="card-22724" class="qld__card--clickable__link" href="<?php the_permalink();?>"><?php the_title();?></a>   
                                    </h3>
                                    <p class="qld__card__description"><?php echo the_excerpt();?></p>
                                </div>
                            </div>
                            <div class="qld__card__footer">
                                <hr class="qld__horizontal-rule">
                                <div class="qld__card__footer-inner">
                                    <ul class="qld__card__tags qld__tag-list">
                                        <li>
                                            <a class="qld__tag qld__tag--link" href="<?php the_permalink(); ?>">View topic</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                 <?php }
                ?>
              
            </ul>
        </div>

    </div>
</section>

<!-- End Card Section -->

<!-- News Slider -->

<?php get_template_part( 'template_parts/news_slider' ); ?>

<!-- End News Slider -->
</main>

<?php
get_footer();

?>
