<?php 
$display = get_field('display_page_banner');
$banner_colour = get_field('banner_background_colour');
$className = ' qld__banner--' . $banner_colour;
$bread = ' qld__breadcrumbs--' . $banner_colour;
$sub = get_field('page_banner_subtitle');

if($display == 'yes') :
    ?>
    <!-- Post Banner  -->
  <section id="banner-123" class="qld__banner qld__banner__basic qld__banner--has-hero qld__banner--breadcrumbs <?php echo esc_attr($className); ?>">

      <!--@@ Breadcrumbs - Mobile @@-->
      <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--mobile <?php echo esc_attr($bread); ?>" aria-label="breadcrumb">
          <ul class="qld__link-list qld__link-list--inline">
                <li>
                    <a href="/">
                            Home
                    </a>
                </li>
          </ul>
      </nav>
      <div>
          <div class="qld__banner__wrapper">
            <div class="qld__banner__main row">
                <!--@@ Hero image @@-->
                <?php 
                    $feature_img = get_the_post_thumbnail_url();
                    $pgBannerImg = get_field('page_banner_image');  
                    if(!empty(!empty($pgBannerImg)) || !empty($feature_img)){
                    if(!empty($pgBannerImg)) { ?>
                    <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5 qld__banner__image--mobile-hide">
                        <div class="qld__banner__image ">
                            <?php

                            $displayPgBannerImg = $pgBannerImg['url'];
                            $img_alt = $pgBannerImg['alt'];
                            $img_title = $pgBannerImg['title'];
                            ?>
                            <div class="bannerImgWrapper">
                                <img src="<?php echo $displayPgBannerImg ?>" alt="<?php echo esc_attr($img_alt);?>" title="<?php echo $img_title ?>">
                            </div>
                        </div>
                    </div>
                    <?php } elseif(!empty($feature_img)){ 
                    $thumbnail_id = get_post_thumbnail_id( $post->ID );
                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
                        ?>
                    <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5 qld__banner__image--mobile-hide">
                        <div class="qld__banner__image qld__banner__image--mobile-hide">
                            
                            <div class="bannerImgWrapper">
                                <img src="<?php echo $feature_img ?>" alt="<?php echo esc_attr($alt);?>" >
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                    elseif (function_exists('z_taxonomy_image_url')){ 
                    $cat = get_the_category();
                    if (!empty($cat)){
                    ?>
                    <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5 qld__banner__image--mobile-hide">
                        <div class="qld__banner__image">
                            <div class="bannerImgWrapper">
                                <img src="<?php echo z_taxonomy_image_url($cat[0]->term_id); ?>" /> 
                            </div> 
                        </div>
                    </div>
                    <?php 
                    }
                    }  ?>
                  <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                      <!--@@ Breadcrumbs - Desktop @@-->
                      <?php if (!is_front_page()) { ?>
                          <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop <?php echo esc_attr($bread); ?>" aria-label="breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                          </nav>
                        <?php } ?>

                      <!--@@ Heading(s) @@-->
                      <h1><?php the_title(); ?></h1>

                      <!--@@ subtitle @@-->
                      <?php if (!empty($sub)) : ?>
                      
                      <div class="qld__banner__content--body qld__abstract">
                          <?php the_field('page_banner_subtitle'); ?>
                      </div>
                      <?php endif; ?>


                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php elseif ($display == 'no') : ?>
    <section class="qld__body qld__body--breadcrumb">
        <div class="container-fluid">
          <nav class="qld__breadcrumbs" aria-label="breadcrumb">
          <?php custom_breadcrumbs(); ?>
          </nav>
        </div>
      </section>
      <?php endif; ?>
