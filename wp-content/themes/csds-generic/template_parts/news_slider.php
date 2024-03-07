<?php 
/*
Template name: news_slider
*/
?>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet"/> -->

<?php

$news_slider = new wp_query( array(
    'post_type' => 'post', 
    'post_status' => 'publish',  
    'posts_per_page' => '6',
    'orderby' => 'date', 
    'order' => 'ASC'
    ) );

    if(! $news_slider->have_posts()){
        return false;
    }
?>
<div class="news-slider">


<div class="container-fluid">
    <div class="posts-slick px-5">
        
        <!-- News Slider   -->
  
        <?php 
            while($news_slider->have_posts()) {
                $news_slider->the_post(); 
                $post_ID = get_the_ID();
                $post_title = get_the_title();
                $post_exerpt = get_the_excerpt();
                $post_featured_image = wp_get_attachment_image( get_post_thumbnail_id( $post_ID ), 'single-post-thumbnail' );
                $alt_text_image = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
                $post_link = get_post_permalink();
            ?>

        <div>

            <div class="qld__card qld__card--image qld__card--multi-click">
                <a href="<?php echo $post_link ?>" class="qld__card__image-link">
                    <div class="qld__responsive-media-img--bg slider-card-bg-img" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')" alt="<?php echo $alt_text_image; ?>">
                    </div>
                </a>
                <div class="qld__card__inner">
                    <span><p class="temp-test">Hey Hey</p></span>
                    <div class="qld__card__content">
                        <div class="qld__card__content-inner">
                            <h3 class="qld__card__title"><a href=" <?php  echo $post_link;  ?> " class="news-slider-link-title qld__card--clickable__link"><?php echo $post_title  ?></a></h3>
                        </div>
                    </div>
                    <div class="qld__card__footer">
                        <hr class="qld__horizontal-rule">
                        <div class="qld__card__footer-inner">
                            <ul class="qld__card__tags qld__tag-list">
                                <?php
                                $id = get_the_ID();
                                $postCategory = get_the_category($id);
                                foreach( $postCategory as $postCat ) :
                                ?>
                                <li>
                                    <a class="qld__tag qld__tag--link" tabindex="0" href="<?php echo get_category_link($postCat->cat_ID); ?>"><?php echo $postCat->name; ?></a>
                                </li>
                                <?php endforeach  ?>
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
        <button class="qld__slick-prev slick-arrow" aria-disabled="true" style=""><span class="fa fa-angle-left" aria-hidden="true"></span><span class="sr-only">Prev</span></button>
        <button class="qld__slick-next slick-arrow" aria-disabled="false" style=""><span class="fa fa-angle-right" aria-hidden="true"></span><span class="sr-only">Next</span></button>
    </div>

</div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>( function( $ ) {
    class SlickCarousel {
        
      constructor() {
        this.initiateCarousel();
      }
  
      initiateCarousel() {
        $( '.posts-slick' ).slick( {
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
  
  } )( jQuery );
</script>