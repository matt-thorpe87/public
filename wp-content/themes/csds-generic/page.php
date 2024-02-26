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
                      <!-- <div class="qld__banner__image " style="background-image: url('https://via.placeholder.com/782x520');">
                    </div> -->

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

        <!-- <ul class="qld__link-list">
            <li>
                <a class="qld__sidenav__link" href="/qh-extended_components.html">QH-Extended Components</a>
                    <ul class="qld__link-list">
                        <li>
                            <a class="qld__sidenav__link" href="/component-article.html">Article</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/component-article_home.html">Article Home</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/component-sf_admin_form.html">SF Admin Form</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="#">SF Admin Header</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="#">SF Admin HHS Content List</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/component-sf_admin_importer.html">SF Admin Importer</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/component-video.html">Video</a>
                        </li>
                    </ul>
             </li>
            <li>
                <a class="qld__sidenav__link" href="/components.html">Components</a>
                    <ul class="qld__link-list">
                        <li>
                            <a class="qld__sidenav__link" href="/_core_component-abstract.html">Abstract</a>
                        </li>

                        <li>
                            <a class="qld__sidenav__link" href="/_core_component-btn.html">Buttons</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/_core_component-callout.html">Callout</a>
                        </li>
                        <li>
                            <a class="qld__sidenav__link" href="/_core_component-card_no_action.html">Card_no_action</a>
                        </li>

                    </ul>
             </li>
            
            <li>
                <a class="qld__sidenav__link" href="/inner.html">Inner</a>
             </li>
        </ul> -->
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
