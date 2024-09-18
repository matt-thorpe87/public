<?php 


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
        <article class="qld__news-article">
    <div class="row">
        <div class="qld__news-article__main col-md-8 col-xs-12">
            <div class="qld__news-article__header">
                <h1>Queensland Design System</h1>
                <p class="qld__news-article__published-by">by Content</p>
                <p class="qld__news-article__published-date"><strong>Published:</strong> Never</p>

                <div class="qld__news-article__utility">
                    <button class="qld__btn qld__btn--icon-trail qld__news-article__share-btn qld__open-modal" data-modaltarget="qld__share-model">Share<i class="far fa-share-alt" aria-hidden="true"></i></button>
                    <div id="qld__share-model" class="qld__modal qld__news-article__share-modal" tabindex="-1">
                        <div class="qld__modal__underlay"></div>
                        <div class="qld__modal__body">
                            <div class="qld__modal__body__header">
                                <h2 class="qld__modal__body__heading qld__display-md">Share this article</h2>
                            </div>
                            <div class="qld__modal__body__content">
                                <p>Share this article on your networks</p>
                                <ul class="qld__news-article__share-list">
                                            <li><a href="https://www.facebook.com/sharer.php?u=https://qhscb.squiz.cloud/design/components" target="_blank" data-action="close"><span class="sr-only">Share via Facebook</span><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com/share?url=https://qhscb.squiz.cloud/design/components&amp;text=Components" target="_blank" data-action="close"><span class="sr-only">Share via Twitter</span><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?url=https://qhscb.squiz.cloud/design/components&amp;title=Components" target="_blank" data-action="close"><span class="sr-only">Share via Linkedin</span><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                            <li><a href="mailto:?subject=Queensland Health News Article - Components&amp;body=View this page https://qhscb.squiz.cloud/design/components" target="_blank" data-action="close"><span class="sr-only">Share via email</span><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                                <p>Or copy link</p>
                                <p class="qld__news-article__copy-link"><i class="far fa-link" aria-hidden="true"></i><span tabindex="0" aria-label="Press enter or space to copy link" role="button" aria-pressed="false">https://qhscb.squiz.cloud/design/components</span><span class="qld__copied-to-clipboard"></span></p>
                            </div>
                            <button class="qld__modal__close qld__btn" data-action="close">
                                <span class="sr-only">
                                    Close modal
                                </span>
                                <i class="fal fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="qld__tag qld__tag--large">Read time: 2 minutes</div>
                </div>
            </div>
            <hr class="qld__horizontal-rule">
            <div class="qld__news-article__body">
                <div class="qld__news-article__hero">
                    <img class="qld__news-article__hero__image" src="https://qhscb.squiz.cloud/?a=23791" alt="Content">
                        <p class="qld__news-article__hero__caption">Content</p>
                </div>
                <div class="whooshkaa-widget-player" data-episode-id="845751" data-play-video-if-available="true" data-theme="dark" data-share-parent-page="true" data-enable-volume="true" data-height="200" data-title="Queensland Design System" style="transition: all 0.2s ease-out 0s; height: 200px;"><iframe src="https://webplayer.whooshkaa.com/episode/845751?theme=dark&amp;share-parent-page=true&amp;enable-volume=true&amp;play-video-if-available=true&amp;iframe-height=200" scrolling="no" frameborder="0" width="100%" height="180" allowfullscreen="true" allow="autoplay" style="height: 100%;" title="Queensland Design System"></iframe></div>
                <div class="qld__news-article__summary">
                    <h2 class="qld__display-md">Summary</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="qld__news-article__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><img src="https://picsum.photos/id/11/800/420" class="qld__imgcap"><p class="qld__imgcap-text">Caption here</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h3>Transcript</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <hr class="qld__horizontal-rule">
            <div class="qld__news-article__footer">
                <div class="qld__news-article__footer__tags">
                    <h2 class="qld__display-sm">This page is tagged in the following topics</h2>
                    <ul class="qld__tag-list">
                        <li>
                            <a class="qld__tag qld__tag--link qld__tag--large" href="?tag=Content"></a>
                        </li>
                    </ul> 
                </div>
                    <p class="qld__news-article__updated-date"><strong>Last updated:</strong> 01 January 2021</p>
                <div class="qld__news-article__footer__share">
                    <h2 class="qld__display-md">Share</h2>
                    <ul class="qld__news-article__share-list">
                                    <li><a href="https://www.facebook.com/sharer.php?u=https://qhscb.squiz.cloud/design/components" target="_blank"><span class="sr-only">Share via Facebook</span><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/share?url=https://qhscb.squiz.cloud/design/components&amp;text=Components" target="_blank"><span class="sr-only">Share via Twitter</span><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?url=https://qhscb.squiz.cloud/design/components&amp;title=Components" target="_blank"><span class="sr-only">Share via Linkedin</span><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:?subject=Queensland Health News Article - Components&amp;body=View this page https://qhscb.squiz.cloud/design/components" target="_blank"><span class="sr-only">Share via email</span><i class="far fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <aside class="qld__news-article__aside col-md-3 col-md-offset-1 col-xs-12">
                <h3>Related content</h3>
                <h4 class="qld__news-article__aside__sub-heading qld__display-sm"><i class="far fa-newspaper" aria-hidden="true"></i>News</h4>
                <ul class="qld__card-list">
                    <li class="col-xs-12">   
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/world-hepatitis-day-cairns-film-released">World Hepatitis Day – Cairns film released</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12">   
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/10-year-milestone-for-cancer-care-centre">10-year milestone for cancer care centre</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12">   
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/second-covid-detection-in-cairns-wastewater">Second COVID detection in Cairns wastewater</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="qld__news-article__aside__sub-heading qld__display-sm"><i class="far fa-newspaper" aria-hidden="true"></i>Feature</h4>
                <ul class="qld__card-list">
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/mareeba-stroke-first-aid">Mareeba stroke averted</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>  
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/lessons-learned-from-cyclone-yasi-10-years-on">Lessons learned from Cyclone Yasi, 10 years on</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>  
                </ul>
                <h4 class="qld__news-article__aside__sub-heading qld__display-sm"><i class="far fa-microphone" aria-hidden="true"></i>Podcasts</h4>
                <ul class="qld__card-list">
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/mareeba-stroke-first-aid">Mareeba stroke averted</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>  
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h4 class="qld__card__title"><a class="qld__card--clickable__link" href="https://cairns-hinterland.health.qld.gov.au/about-us/news/lessons-learned-from-cyclone-yasi-10-years-on">Lessons learned from Cyclone Yasi, 10 years on</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>  
                </ul>
            </aside>
    </div>
</article>
        </div>
    </div>
</section>


</main>
<?php
get_footer();

?>
