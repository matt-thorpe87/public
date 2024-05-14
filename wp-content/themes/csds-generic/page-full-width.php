<?php 
/* Template Name: Full Width */

get_header(); ?>
<main class="main" role="main">


<!-- Banner Basic  -->
  <section id="banner-123" class="qld__banner qld__banner__basic qld__banner--has-hero qld__banner--dark-alt qld__banner--breadcrumbs">

      <!--@@ Breadcrumbs - Mobile @@-->
      <nav class="qld__breadcrumbs qld__breadcrumbs--dark-alt qld__banner__breadcrumbs qld__banner__breadcrumbs--mobile" aria-label="breadcrumb">
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

            <?php
            while(have_posts()){
                the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content();?></p>
            <?php } ?>


          </div>
        </div>
    </div>
</section>


</main>
<?php
get_footer();

?>
