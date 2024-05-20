<?php 
/*
Template name: Podcast Collection
*/

get_header(); ?>
<main class="main" role="main">

<!-- Banner Basic  -->
  <section id="banner-123" class="qld__banner qld__banner__basic qld__banner--has-hero qld__banner--dark-alt qld__banner--breadcrumbs">
      <style>
          @media (min-width:699px) {
              #banner-123 {
                  background-image: url();
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position-x: ;
              }
          }
      </style>
      <!--@@ Breadcrumbs - Mobile @@-->
      <nav class="qld__breadcrumbs qld__breadcrumbs--dark-alt qld__banner__breadcrumbs qld__banner__breadcrumbs--mobile" aria-label="breadcrumb">
          <ul class="qld__link-list qld__link-list--inline">
                  <li>
                      <a href="/">
                              Design
                      </a>
                  </li>
          </ul>
      </nav>
      <div class="container-fluid">
          <div class="qld__banner__wrapper">

              <div class="qld__banner__main row">

                  <!--@@ Hero image @@-->
                  <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5">
                      <!-- <div class="qld__banner__image " style="background-image: url('https://via.placeholder.com/782x520');">
                    </div> -->
                    <?php if(!empty(get_field('page_banner_image'))) : ?>

                    <div class="qld__banner__image ">
                        <?php 
                        $pgBannerImg = get_field('page_banner_image');  
                        $displayPgBannerImg = $pgBannerImg['sizes']['pgBannerImgSize'];
                        $img_alt = $pgBannerImg['alt'];
                        $img_title = $pgBannerImg['title'];
                        ?>
                        <div class="bannerImgWrapper">
                            <img style="height:100%"; src="<?php echo $displayPgBannerImg ?>" alt="<?php echo esc_attr(get_the_title());?>" title="<?echo $img_title ?>">
                        </div>
                    </div>
                    <?php endif ?>
                  </div>

                  <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                      <!--@@ Breadcrumbs - Desktop @@-->
                          <nav class="qld__breadcrumbs qld__breadcrumbs--dark qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop" aria-label="breadcrumb">

                          <?php custom_breadcrumbs(); ?>

                          </nav>

                      <!--@@ Heading(s) @@-->
                      <h1><?php the_title(); ?></h1>
                      
                      <!--@@ Abstract @@-->
                          
                          <div class="qld__banner__content--body qld__abstract">
                            <?php the_field('page_banner_subtitle'); ?>
                        </div>

                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Banner Basic End -->

<section class="qld__body ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
            <!-- side navigation -->
            <div class="qld__side-nav qld__accordion">
    <button class="qld__side-nav__toggle qld__accordion__title qld__accordion--closed" aria-controls="nav-default" aria-expanded="false" aria-selected="false" >
    <?php 
        $post = get_queried_object();
        $postType = get_post_type_object(get_post_type($post));
        if ($postType) {
            echo esc_html($postType->labels->menu_name);
        } else {
            echo get_the_title();
        }
        ?>
    </button>
    <nav aria-label="side navigation" id="nav-default" class="qld__side-nav__content qld__accordion--closed qld__accordion__body">
        <h2 class="qld__sidenav__title">
            <a class="qld__sidenav__link" href="/"><?php echo get_the_title( $post->post_parent); ?></a>
        </h2>

        <?php 
            if(has_nav_menu('side_menu')) : 
            wp_nav_menu(array(
                    'theme_location' => 'side_menu',
                    'container' => 'false',
                    'menu_class' => 'qld__link-list',
                    'walker' => new Walker_Sidebar_Menu()
                    
                ));?>   
                <?php
                endif; ?>           
 
    </nav>
</div>

            <!-- end side navigation -->
            </div>

            <div class="col-xs-12 col-lg-9"><!-- right pane content section -->
              <div class="container-fluid">
               
              <!-- Podcast content start --> 

        <article class="qld__podcast-series" id="podcast-series-">
        <section class="qld__body qld__body--alt-dark">
            <div class="container-fluid">
                <div class="qld__video qld__video--no-padding qld__video--video-layout-one_col">
                    <div class="qld__video__vid-wrapper no-margin">
                            <div class="qld__video__thumbnail"
                                style="background-image:url(https://img.youtube.com/vi/AKSRUFEMRt8/0.jpg);">
                                <a href="#" class="qld__video__thumbnail-playbtn">
                                    <div class="qld__video__thumbnail-playbtn-tag">
                                        <i class="fal fa-play-circle "></i> <span>Watch</span> 
                                        <i class="fal fa-clock"></i> 02:41
                                    </div>
                                </a>
                            </div>
                        <div class="qld__video_vid hidden"
                        data-source="https://www.youtube.com/embed/AKSRUFEMRt8" data-video-id="AKSRUFEMRt8" data-type="youtube">
                            <div id="video-" class="qld__video_player"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="qld__body">
            <div class="container-fluid">
                <div class="qld__abstract">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <div class="qld__news_article__footer__tags">
                        <h2 class="qld__display-sm">This page is tagged in the following topics</h2>
                        <ul class="qld__tag-list">
                            <li>
                                <a class="qld__tag qld__tag--link qld__tag--large" href="?tag=Content"></a>
                            </li>
                        </ul> 
                    </div>
            </div>
        </section>
        <section class="qld__body">
            <div class="container-fluid">
                    <div class="row">
                        <div class="qld__card-intro col-xs-12 qld__card-intro--sm">
                            <h2>Episodes</h2>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="qld__card-list qld__card-list--matchheight" data-type="four">
                                <li class="col-xs-12 col-md-3">
                                    <div class="qld__card qld__card__multi-action qld__card--image">
                                        <a href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/depression" class="qld__card__image-link">
                                            <div class="qld__responsive-media-img--bg" style="background-image: url('https://picsum.photos/380/240')" alt="Image for Depression"></div>
                                            <div class="qld__card__image-tag">
                                                <div class="qld__card__image-tag--title">
                                                    <i class="qld__card__image-tag--icon fa-light fa-podcast"></i>
                                                    <span class="qld__card__image-tag__text--bold">Listen</span>
                                                </div>
                                                <div class="qld__card__image-tag--length">
                                                    <i class="qld__card__image-tag--icon far fa-clock"></i>
                                                    <span class="qld__card__image-tag__text--small">40:01</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <div class="qld__card__content-inner">
                                                    <p class="qld__card__date">29.04.2022</p>
                                                    <h3 class="qld__card__title"><a class="qld__card--clickable__link" href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/depression">Depression</a></h3>
                                                </div>
                                            </div>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <ul class="qld__card__tags qld__tag-list">
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=mental_health">Mental health</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-md-3">
                                    <div class="qld__card qld__card__multi-action qld__card--image">
                                        <a href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/anxiety" class="qld__card__image-link">
                                            <div class="qld__responsive-media-img--bg" style="background-image: url('https://picsum.photos/380/240')" alt="Image for Anxiety"></div>
                                            <div class="qld__card__image-tag">
                                                <div class="qld__card__image-tag--title">
                                                    <i class="qld__card__image-tag--icon fa-light fa-podcast"></i>
                                                    <span class="qld__card__image-tag__text--bold">Listen</span>
                                                </div>
                                                <div class="qld__card__image-tag--length">
                                                    <i class="qld__card__image-tag--icon far fa-clock"></i>
                                                    <span class="qld__card__image-tag__text--small">38:08</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <div class="qld__card__content-inner">
                                                    <p class="qld__card__date">29.04.2022</p>
                                                    <h3 class="qld__card__title"><a class="qld__card--clickable__link" href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/anxiety">Anxiety</a></h3>
                                                </div>
                                            </div>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <ul class="qld__card__tags qld__tag-list">
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=mental_health">Mental health</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-md-3">
                                    <div class="qld__card qld__card__multi-action qld__card--image">
                                        <a href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/mental-health-and-wellbeing" class="qld__card__image-link">
                                            <div class="qld__responsive-media-img--bg" style="background-image: url('https://picsum.photos/380/240')" alt="Image for Mental Health and Wellbeing"></div>
                                            <div class="qld__card__image-tag">
                                                <div class="qld__card__image-tag--title">
                                                    <i class="qld__card__image-tag--icon fa-light fa-podcast"></i>
                                                    <span class="qld__card__image-tag__text--bold">Listen</span>
                                                </div>
                                                <div class="qld__card__image-tag--length">
                                                    <i class="qld__card__image-tag--icon far fa-clock"></i>
                                                    <span class="qld__card__image-tag__text--small">28:34</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <div class="qld__card__content-inner">
                                                    <p class="qld__card__date">29.04.2022</p>
                                                    <h3 class="qld__card__title"><a class="qld__card--clickable__link" href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/mental-health-and-wellbeing">Mental Health and Wellbeing</a></h3>
                                                </div>
                                            </div>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <ul class="qld__card__tags qld__tag-list">
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=mental_health">Mental health</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-md-3">
                                    <div class="qld__card qld__card__multi-action qld__card--image">
                                        <a href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/perinatal-depression-and-anxiety" class="qld__card__image-link">
                                            <div class="qld__responsive-media-img--bg" style="background-image: url('https://picsum.photos/380/240')" alt="Image for Perinatal Depression and Anxiety"></div>
                                            <div class="qld__card__image-tag">
                                                <div class="qld__card__image-tag--title">
                                                    <i class="qld__card__image-tag--icon fa-light fa-podcast"></i>
                                                    <span class="qld__card__image-tag__text--bold">Listen</span>
                                                </div>
                                                <div class="qld__card__image-tag--length">
                                                    <i class="qld__card__image-tag--icon far fa-clock"></i>
                                                    <span class="qld__card__image-tag__text--small">41:22</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <div class="qld__card__content-inner">
                                                    <p class="qld__card__date">29.04.2022</p>
                                                    <h3 class="qld__card__title"><a class="qld__card--clickable__link" href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/perinatal-depression-and-anxiety">Perinatal Depression and Anxiety</a></h3>
                                                </div>
                                            </div>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <ul class="qld__card__tags qld__tag-list">
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=mental_health">Mental health</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-md-3">
                                    <div class="qld__card qld__card__multi-action qld__card--image">
                                        <a href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/post-traumatic-stress-disorder" class="qld__card__image-link">
                                            <div class="qld__responsive-media-img--bg" style="background-image: url('https://picsum.photos/380/240')" alt="Image for Post-traumatic Stress Disorder"></div>
                                            <div class="qld__card__image-tag">
                                                <div class="qld__card__image-tag--title">
                                                    <i class="qld__card__image-tag--icon fa-light fa-podcast"></i>
                                                    <span class="qld__card__image-tag__text--bold">Listen</span>
                                                </div>
                                                <div class="qld__card__image-tag--length">
                                                    <i class="qld__card__image-tag--icon far fa-clock"></i>
                                                    <span class="qld__card__image-tag__text--small">41:25</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <div class="qld__card__content-inner">
                                                    <p class="qld__card__date">29.04.2022</p>
                                                    <h3 class="qld__card__title"><a class="qld__card--clickable__link" href="https://qhscb.squiz.cloud/core/examples/podcast-index-page/podcast-series-test/post-traumatic-stress-disorder">Post-traumatic Stress Disorder</a></h3>
                                                </div>
                                            </div>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <ul class="qld__card__tags qld__tag-list">
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=women&#x27;s_health">Women&#x27;s Health</a>
                                                        </li>
                                                        <li>
                                                            <a class="qld__tag qld__tag--link" href="000?tag=nutrition">Nutrition</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                    </div>
            </div>
        </section>
    </article>



              <!-- /Podcast content end -->
              </div>
            </div> <!-- end right pane content section -->
          </div>
        </div>
    </div>
</section>


</main>
<?php
get_footer();

?>
