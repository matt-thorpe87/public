<?php 
/*
Template name: news_slider
*/
?>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet"/> -->
<?php  

$news_slider = New wp_query([
    'posts_per_page'         => '6',
    'post_type'              => 'post',
]);
?>

<div class="posts-slick px-5">




<!-- News Slider   -->

<section class="qld__body qld__card--wrapper qld__card--slider">
    <div class="container-fluid">
        <div class="row">
            <div class="qld__card-intro col-xs-12 qld__card-intro--no-top-p">
                <h2>Latest news</h2>
            </div>
        </div>
        <div class="row">
            <ul class="qld__card-list qld__card-list--matchheight">
                <?php
                    if ($news_slider->have_posts()) : while($news_slider->have_posts()) : $news_slider->the_post(); 
                ?>
                <div class="slick-slide" >
                    <li  style="width: 100%; display: inline-block;">
                        <div class="qld__card qld__card--multi-click qld__card--image">
                            <a href=" <?php the_permalink();  ?>" class="qld__card__image-link" aria-label="Mareeba stroke averted" tabindex="0">
                                <div class="qld__responsive-media-img--bg" >
                                    <img src="<?php the_post_thumbnail_url() ?> " alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
                                </div>
                            </a>
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">

                                        <h3 class="qld__card__title">
                                            <a class="qld__card--clickable__link" href="<?php the_permalink();  ?>" tabindex="0"><?php echo get_the_title()  ?></a>
                                        </h3>
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
                    </li>
                </div>
                <?php endwhile; endif; ?>
            </ul>
            <div class="qld__card-list__footer col-xs-12">

                    <a class="qld__cta-link qld__cta-link--view-all" href="">All news</a>
            </div>
        </div>
    </div>
</section>

<!-- End slider -->



</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>( function( $ ) {
    console.log('hey hey hey');
    class SlickCarousel {
        
      constructor() {
        this.initiateCarousel();
      }
  
      initiateCarousel() {
        console.log('yo yo');
        $( '.posts-slick' ).slick( {
          autoplay: true,
          autoplaySpeed: 7000,
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: true,
          responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
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


<!-- Intermediate Banner End-->