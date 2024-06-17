<?php

/**
 * Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('carousel_heading');
$subheading = get_field('carousel_subheading');
$color_settings = get_field('colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "color" values.
$className = 'news-slider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($color_settings)) {
    $className .= ' qld__body--' . $color_settings;
}
?>

<div class="<?php echo esc_attr($className) ?>" <?php echo esc_attr($anchor) ?>>
    <div class="container-fluid">

        <!-- heading and subheading -->
        <div class="body__text">
            <div class="row">
                <div class="col-xs-12">
                     <?php if (!empty($heading)) { ?>
                        <h2 class="qld__carousel__heading">
                        <?php echo $heading; ?>
                        </h2>
                    <?php } ?>

                    <?php if (!empty($subheading)) { ?>
                        <p>
                        <?php echo $subheading; ?>
                        </p>
                    <?php } ?>
                </div>

            </div>
        </div>

        <div class="carousel-slick px-5">

            <!-- Carousel  -->
            <?php
            // Check rows exists.
            if (have_rows('carousel_item')):

                // Loop through rows.
                while (have_rows('carousel_item')):
                    the_row();

                    // Load sub field value.
                    $item_heading = get_sub_field('heading');
                    $item_content = get_sub_field('content');
                    $image = get_sub_field('image');
                    ?>
                    <div class="qld__carousel__item">
                        <div class="qld__carousel__inner">
                            <div class="qld__carousel__image">
                                <img src="<?php if (!empty($image))
                                    echo $image ?>">
                                </div>
                                <div class=" qld__carousel__heading">
                                    <h3><?php if (!empty($item_heading))
                                    echo $item_heading ?></h3>
                                </div>
                                <div class="qld__carousel__content">
                                    <p><?php if (!empty($item_content))
                                    echo $item_content ?> </p>
                                </div>
                            </div>
                        </div>
                <?php    // End loop.
                endwhile;

                // Do something...
            endif;
            ?>

            <!-- End slider -->
        </div>
        <div class="qld__slick-controls-carousel">
            <button class="qld__slick-carousel-prev slick-arrow" aria-disabled="true" style=""><span
                    class="fa fa-angle-left" aria-hidden="true"></span><span class="sr-only">Prev</span></button>
            <button class="qld__slick-carousel-next slick-arrow" aria-disabled="false" style=""><span
                    class="fa fa-angle-right" aria-hidden="true"></span><span class="sr-only">Next</span></button>
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
                $('.carousel-slick').slick({
                    autoplay: false,
                    autoplaySpeed: 7000,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    appendArrows: '.qld__slick-controls-carousel',
                    appendDots: '.qld__slick-controls-carousel',
                    dotsClass: 'slider-dots-custom-carousel',
                    nextArrow: '.qld__slick-carousel-next',
                    prevArrow: '.qld__slick-carousel-prev',
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