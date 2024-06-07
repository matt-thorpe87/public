<?php get_header(); 

// $topics = New wp_query([
//     'post_type' => 'topics'
// ]);

?>
<main class="main" role="main">
<?php 
$display = get_field('display_page_banner');
$banner_colour = get_field('banner_background_colour');
$className = ' qld__banner--' . $banner_colour;
$bread = ' qld__breadcrumbs--' . $banner_colour;

if($display == 'yes') :

    ?>
<!-- Banner Basic  -->
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

                  <!--@@ Hero image @@-->
                  <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5">
                    <!-- <div class="qld__banner__image " style="background-image: url('https://via.placeholder.com/782x520');">
                    </div> -->

                    <div class="qld__banner__image ">
                        <?php 
                        $pgBannerImg = get_field('page_banner_image');  
                        if($pgBannerImg) {
                        $displayPgBannerImg = $pgBannerImg['sizes']['pgBannerImgSize'];
                        $img_alt = $pgBannerImg['alt'];
                        $img_title = $pgBannerImg['title'];
                        ?>
                        <div class="bannerImgWrapper">
                            <img src="<?php echo $displayPgBannerImg ?>" alt="<?php echo esc_attr(get_the_title());?>" title="<?php echo $img_title ?>">
                        </div> <?php } elseif (function_exists('z_taxonomy_image_url')){ 
                            foreach (get_the_category() as $cat) :?>
                            <div class="bannerImgWrapper">
                                <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /> </div> <?php endforeach?>
                        <?php 
                        }  ?>
                    </div>
                  </div>

                  <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                      <!--@@ Breadcrumbs - Desktop @@-->
                          <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop <?php echo esc_attr($bread); ?>" aria-label="breadcrumb">
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
  <?php endif ?>
<!-- Banner Basic End -->

<section class="qld__body ">
    <div class="container-fluid">
        <div class="row">
            <!-- start side navigation -->
            <div class="col-xs-12 col-lg-3">
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
                        <a class="qld__sidenav__link" href="/"><?php echo get_bloginfo(); ?></a>
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
            </div>
                <!-- end side navigation -->

            <div class="col-xs-12 col-lg-9" id="body-123">
                <div class="container-fluid">
                <?php
                while(have_posts()){
                    the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content();?></p>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>

</section>



</main>
<?php
get_footer();

?>
