<?php 
$banner_colour = get_field('banner_background_colour');
$className = ' qld__banner--' . $banner_colour;
$bread = ' qld__breadcrumbs--' . $banner_colour;
$sub = get_field('page_banner_subtitle');
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
        <div class="container-fluid">
            <div class="qld__banner__wrapper">
                <div class="qld__banner__main row">
                    <?php 
                    $pgBannerImg = get_field('page_banner_image');  
                    if(!empty($pgBannerImg)) { ?>
                    <!--@@ Hero image @@-->
                        <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5">
                            <div class="qld__banner__image ">
                                <?php 
                                $pgBannerImg = get_field('page_banner_image');  
                                if(!empty($pgBannerImg)) {
                                $displayPgBannerImg = $pgBannerImg['url'];
                                $img_alt = $pgBannerImg['alt'];
                                $img_title = $pgBannerImg['title'];
                                ?>
                                <div class="bannerImgWrapper">
                                    <img src="<?php echo $displayPgBannerImg ?>" alt="<?php echo esc_attr($img_alt);?>" title="<?php echo $img_title ?>">
                                </div> <?php } ?>                                
                                
                            </div>
                        </div>
                        <?php } ?>
                    <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">
                        <?php if (!is_front_page()) { ?>
                      <!--@@ Breadcrumbs - Desktop @@-->
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
