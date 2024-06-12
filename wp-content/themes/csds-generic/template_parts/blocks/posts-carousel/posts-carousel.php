<?php
/**
 * Posts Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('posts_carousel_heading');
$subheading = get_field('posts_carousel_subheading');
$color_settings = get_field('colour_settings');
$number_posts = get_field('number_of_posts');
$post_type = get_field('post_type_for_posts_carousel');
$order = get_field('posts_order');
$cat = get_field('posts_category');


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'news-slider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($color_settings)) {
    $color = 'qld__body--' . $color_settings;
}

// get posts //
$news_slider = new wp_query(
    array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $number_posts,
        'orderby' => 'date',
        'order' => 'ASC'
    )
);
if (!$news_slider->have_posts()) {
    return false;
}


?>
<div class="<?php echo esc_attr($className) ?>" <?php echo esc_attr($anchor) ?>>
    <div class="container-fluid">

        <!-- heading and subheading -->
        <div class="row">
            <div class="col-xs-12">

                <h2>
                    <?php if (!empty($heading)) {
                        echo esc_attr($heading);
                    } ?>
                </h2>

                <?php if (!empty($subheading)) {
                    echo esc_attr($subheading);
                } ?>
            </div>
        </div>
        <div class="posts-slick px-5">

            <!-- News/Posts Slider   -->
            <?php
            while ($news_slider->have_posts()) {
                $news_slider->the_post();
                $post_ID = get_the_ID();
                $post_title = get_the_title();
                $post_exerpt = get_the_excerpt();
                $post_featured_image = wp_get_attachment_image(get_post_thumbnail_id($post_ID), 'single-post-thumbnail');
                $alt_text_image = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                $post_link = get_post_permalink();
                ?>

                <div>
                <?php if (!empty($post_featured_image)) { 
                    $feature_img = get_the_post_thumbnail_url();
                    } 
                    elseif (!empty(z_taxonomy_image_url())){
                    $feature_img = z_taxonomy_image_url();
                    }
                    else {
                        $feature_img = '/wp-content/themes/csds-generic/dist/assets/images/img/header-logo-qgov--dark.svg';
                    } ?>
                    <div class="qld__card qld__card--image qld__card--multi-click <?php echo esc_attr($color) ?>">
                        <a href="<?php echo $post_link ?>" class="qld__card__image-link">
                            <div class="qld__responsive-media-img--bg slider-card-bg-img"
                                style="background-image: url('<?php echo $feature_img; ?>')"
                                >
                            </div>
                        </a>
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                                <div class="qld__card__content-inner">
                                    <h3 class="qld__card__title"><a href=" <?php echo $post_link; ?> "
                                            class="news-slider-link-title qld__card--clickable__link">
                                            <?php echo $post_title ?>
                                        </a></h3>
                                </div>
                            </div>
                            <div class="qld__card__footer">
                                <hr class="qld__horizontal-rule">
                                <div class="qld__card__footer-inner">
                                    <ul class="qld__card__tags qld__tag-list">
                                        <?php
                                        $id = get_the_ID();
                                        $postCategory = get_the_category($id);
                                        foreach ($postCategory as $postCat):
                                            ?>
                                            <li>
                                                <a class="qld__tag qld__tag--link" tabindex="0"
                                                    href="<?php echo get_category_link($postCat->cat_ID); ?>">
                                                    <?php echo $postCat->name; ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            <?php } ?>
            <!-- End slider -->
        </div>
        <div class="qld__slick-controls">
            <button class="qld__slick-prev slick-arrow" aria-disabled="true" style=""><span class="fa fa-angle-left"
                    aria-hidden="true"></span><span class="sr-only">Prev</span></button>
            <button class="qld__slick-next slick-arrow" aria-disabled="false" style=""><span class="fa fa-angle-right"
                    aria-hidden="true"></span><span class="sr-only">Next</span></button>
        </div>

    </div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>(function ($) {
        class SlickCarousel {

            constructor() {
                this.initiateCarousel();
            }

            initiateCarousel() {
                $('.posts-slick').slick({
                    autoplay: false,
                    autoplaySpeed: 7000,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    appendArrows: '.qld__slick-controls',
                    appendDots: '.qld__slick-controls',
                    dotsClass: 'slider-dots-custom',
                    nextArrow: '.qld__slick-next',
                    prevArrow: '.qld__slick-prev',
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]

                });
            }
        }

        new SlickCarousel();

    })(jQuery);
</script>