<?php 
/* Template Name: QH Components Examples */
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
                <p>Components are reusable parts of the design system. Each component has been developed to meet a user interface need. All components work together to create different patterns and templates.</p><br>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <?php 
                            $url = '/wp-content/themes/csds-generic/qh-design-system';
                            ?>
                        <li><a href="<?php echo $url;?>/_core_component-abstract.html">Abstract</a></li>

                        <li><a href="<?php echo $url; ?>/_core_component-accordion.html">Accordion</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-banner_advanced.html">Banner Advanced</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-banner_basic.html">Banner Basic</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-banner_intermediate.html">Banner Intermediate</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-banner.html">Banner</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-body.html">Body</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-breadcrumbs.html">Breadcrumbs</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-btn.html">Button</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-callout.html">Callout</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-callout-with-image.html">Callout with Image</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-card_multi_action.html">Card Multi Action</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-card_no_action.html">Card No Action</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-card_single_action.html">Card Single Action</a></li>
                        </ul>
                    </div>
                
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="<?php echo $url; ?>/_core_component-footer.html">Footer</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-global_alert.html">Global Alert</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-header.html">Header</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-icon-box.html">Icon Box</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-image-icon-group.html">Image/Icon Group</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-internal_navigation.html">Internal Navigation</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-link-list.html">Link List</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-main_navigation.html">Main Navigation</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-mega_main_navigation.html">Mega Main Navigation</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-multi_column.html">Multi Column</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-page_alert.html">Page Alert</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-pagination.html">Pagination</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-updated_date.html">Updated Date</a></li>
                            <li><a href="<?php echo $url; ?>/_core_component-Widgets.html">Widgets</a></li>
                        </ul>
                    </div>
                </div>
                <h2>Extended Components</h2><br>

                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="<?php echo $url; ?>/component-article_home.html">Article Home</a></li>
                            <li><a href="<?php echo $url; ?>/component-article_index.html">Article Index</a></li>
                            <li><a href="<?php echo $url; ?>/component-article.html">Article</a></li>
                            <li><a href="<?php echo $url; ?>/component-contact_details.html">Contact Details</a></li>
                            <li><a href="<?php echo $url; ?>/component-enhanced_search.html">Enhanced Search</a></li>
                            <li><a href="<?php echo $url; ?>/component-facility_map.html">Facility Map</a></li>
                            <li><a href="<?php echo $url; ?>/component-feature-article.html">Feature Article</a></li>
                            <li><a href="<?php echo $url; ?>/component-location_service_details.html">Location Service Details</a></li>
                            <li><a href="<?php echo $url; ?>/component-location_service_search.html">Location Service Search</a></li>
                            <li><a href="<?php echo $url; ?>/component-news_article.html">News Article</a></li>
                            <li><a href="<?php echo $url; ?>/component-news_feed.html">News Feed</a></li>
                            <li><a href="<?php echo $url; ?>/component-news_home.html">News Home </a></li>
                            <li><a href="<?php echo $url; ?>/component-news_index.html">News Index</a></li>
                            <li><a href="<?php echo $url; ?>/component-podcast_episode.html">Podcast Episode</a></li>
                            <li><a href="<?php echo $url; ?>/component-podcast_series.html">Podcast Series</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="<?php echo $url; ?>/component-promo_panel.html">Promo Panel</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_facilities_a-z.html">SF Facilities A-Z</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_localised_facilities.html">SF Localised Facilities</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_localised_promo_panel.html">SF Localised Promo Panel</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_service_location.html">SF Service Location</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_services_search_v2.html">SF Service Search</a></li>
                            <li><a href="<?php echo $url; ?>/component-sf_top_services_widget.html">Top Services Widget</a></li>
                            <li><a href="<?php echo $url; ?>/component-tag_list_linked.html">Tag List Linked</a></li>
                            <li><a href="<?php echo $url; ?>/component-tag_list.html">Tag List</a></li>
                            <li><a href="<?php echo $url; ?>/component-tags_metadata.html">Tags Metadata</a></li>
                            <li><a href="<?php echo $url; ?>/component-tags.html">Tags</a></li>
                            <li><a href="<?php echo $url; ?>/component-video_cards.html">Video Cards</a></li>
                            <li><a href="<?php echo $url; ?>/component-video_player.html">Video Player</a></li>
                            <li><a href="<?php echo $url; ?>/component-video.html">Video</a></li>
                        </ul>
                    </div>
                </div>
                <h2>Service Finder Components</h2><br>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <ul>
                            <li><a href="<?php echo $url; ?>/sf_admin_details.html">SF Admin Details</a></li>
                            <li><a href="<?php echo $url; ?>/sf_admin_form.html">SF Admin Form</a></li>
                            <li><a href="<?php echo $url; ?>/sf_admin_importer.html">SF Admin Importer</a></li>
                            <li><a href="<?php echo $url; ?>/sf_admin_list.html">SF Admin List</a></li>
                            <li><a href="<?php echo $url; ?>/sf_admin_top_services.html">SF Admin Top Services Form</a></li>
                            <li><a href="<?php echo $url; ?>/sf_admin_visiting_service_importer.html">SF Admin Visiting Service Importer</a></li>
                            <li><a href="<?php echo $url; ?>/sf_facilities_a-z.html">SF Facilities A-Z</a></li>
                            <li><a href="<?php echo $url; ?>/sf_facility_page.html">SF Facility Page</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <ul>

                            <li><a href="<?php echo $url; ?>/sf_service_finder.html">SF Service Finder</a></li>
                            <li><a href="<?php echo $url; ?>/sf_service_location_page.html">SF Service Location Page</a></li>
                            <li><a href="<?php echo $url; ?>/sf_service_page.html">SF Service Page</a></li>
                            <li><a href="<?php echo $url; ?>/sf_service_search_form_example.html">SF Service Search Form Example</a></li>
                            <li><a href="<?php echo $url; ?>/sf_service_search.html">SF Service Search</a></li>
                            <li><a href="<?php echo $url; ?>/sf_service_search_v2.html">SF Service Search V2</a></li>
                            <li><a href="<?php echo $url; ?>/sf_services_a-z.html">SF Service A-Z</a></li>
                            <li><a href="<?php echo $url; ?>/sf_top_services_facility.html">SF Top Services Facility</a></li>
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
