<?php get_header(); ?>
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
                            <img src="<?php echo $displayPgBannerImg ?>" alt="<?php echo $img_alt;?>" title="<?echo $img_title ?>">
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
    In Design
    </button>
    <nav aria-label="side navigation" id="nav-default" class="qld__side-nav__content qld__accordion--closed qld__accordion__body">
        <h2 class="qld__sidenav__title">
            <a class="qld__sidenav__link" href="/">Design</a>
        </h2>

        <?php wp_nav_menu(array(
                'theme_location' => 'side_menu',
                'container' => 'false',
                'menu_class' => 'qld__link-list',
                'walker' => new Walker_Sidebar_Menu()
                
             ));?>           

    </nav>
</div>

            <!-- end side navigation -->
            </div>

            <div class="col-xs-12 col-lg-9"><!-- right pane content section -->
              <div class="container-fluid">
                <?php
                while(have_posts()){
                    the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content();?></p>
                <?php } ?>

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
