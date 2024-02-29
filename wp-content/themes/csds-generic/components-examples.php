<?php 
/* Template Name: Components Examples */
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
                        $displayPgBannerImg = $pgBannerImg['sizes']['large'];
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
            <div class="col-xs-12 col-lg-12">
              <div class="container-fluid">
                <?php
                while(have_posts()){
                    the_post(); ?>
                <p><?php the_content();?>
                <h2>Core Components</h2>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="/wp-content/qh-design-system/_core_component-accordion.html">Accordion</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-banner_advanced.html">Banner Advanced</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-banner_basic.html">Banner Basic</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-banner_intermediate.html">Banner Intermediate</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-banner.html">Banner</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-body.html">Body</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-breadcrumbs.html">Breadcrumbs</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-btn.html">Button</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-callout.html">Callout</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-card_multi_action.html">Card Multi Action</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-card_no_action.html">Card No Action</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-card_single_action.html">Card Single Action</a></li>
                        </ul>
                    </div>
                
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="/wp-content/qh-design-system/_core_component-footer.html">Footer</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-global_alert.html">Global Alert</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-header.html">Header</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-internal_navigation.html">Internal Navigation</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-main_navigation.html">Main Navigation</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-mega_main_navigation.html">Mega Main Navigation</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-multi_column.html">Multi Column</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-page_alert.html">Page Alert</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-pagination.html">Pagination</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-updated_date.html">Updated Date</a></li>
                            <li><a href="/wp-content/qh-design-system/_core_component-Widgets.html">Widgets</a></li>
                        </ul>
                    </div>
                </div>
                </p>
                <?php } ?>

              </div>
            </div> 
          </div>
        </div>
    </div>
</section>


</main>
<?php
get_footer();

?>
