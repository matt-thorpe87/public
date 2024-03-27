<?php
/*
Template name: hero_banner
*/
?>

<?php

$hero_banner = new wp_query([
    'posts_per_page' => '3',
    'post_type' => 'hero_banner',
]);
?>

<div class="posts-carousel px-5">

    <?php
    if ($hero_banner->have_posts()):
        while ($hero_banner->have_posts()):
            $hero_banner->the_post(); ?>


            <!-- Intermediate Banner -->

            <section id="banner-intermediate-123"
                class="qld__banner qld__banner__intermediate qld__banner--dark qld__banner--breadcrumbs qld__banner--has-hero card">


                <div class="container-fluid">
                    <div class="qld__banner__wrapper">
                        <div class="qld__banner__main row">
                            <!--@@ Hero image @@-->

                            <div class="qld__banner__hero col-xs-12 col-md-7 col-lg-5 col-xl-9">

                                <?php
                                $pgBannerImg = get_field('hero_background_image');
                                $displayPgBannerImg = $pgBannerImg['sizes']['large'];
                                $img_alt = $pgBannerImg['alt'];
                                $img_title = $pgBannerImg['title'];
                                ?>
                                <div class="qld__banner__image qld__banner__image--mobile-hide"
                                    style="background-image: url('<?php echo $displayPgBannerImg ?>');"></div>
                                <div class="qld__banner__image qld__banner__image--background qld__banner__image--desktop-hide"
                                    style="background-image: url('<?php echo $displayPgBannerImg ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>" title="<? echo $img_title ?>');"></div>

                            </div>

                            <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">


                                <!--@@ Heading(s) @@ -->
                                <h1>
                                    <?php the_field('main_tagline'); ?>
                                </h1>
                                <!--@@ Abstract @@-->
                                <div class="qld__banner__content--body qld__abstract">
                                    <p>
                                        <?php the_field('sub-tagline'); ?>
                                    </p>
                                    <!-- <span><p class="temp-text-matt">hey hey hey</p></span> -->
                                </div>

                                <!--@@ CTA Buttons @@-->
                                <ul class="qld__banner__content--cta qld__link-list">
                                    <li>
                                        <a class="qld__btn qld__btn--primary" data-type="class"
                                            href="<?php the_field('add_url_to_primary_button'); ?>" target="_blank">
                                            <?php the_field('primary_button_label'); ?>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="qld__btn qld__btn--secondary" data-type="class"
                                            href="<?php the_field('add_url_to_secondary_button'); ?>" target="_blank">
                                            <?php the_field('secondary_button_label'); ?>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </section>


        <?php endwhile; endif; ?>


</div>
<div class="qld__slick-slide-controls">
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>(function ($) {
        class SlickCarousel {
            constructor() {
                this.initiateCarousel();
            }

            initiateCarousel() {
                $('.posts-carousel').slick({
                    autoplay: true,
                    autoplaySpeed: 7000,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    fade: true,
                    fadeSpeed: 1000,
                    dotsClass: 'slider-dots-custom',
                    appendDots: '.qld__slick-slide-controls',
                    appendArrows: '.qld__slick-slide-controls',


                });
            }
        }

        new SlickCarousel();

    })(jQuery);



</script>


<!-- Intermediate Banner End-->