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
                  <!-- <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5">
                      <div class="qld__banner__image " style="background-image: url('https://via.placeholder.com/782x520');"></div>
                  </div> -->

                  <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                      <!--@@ Breadcrumbs - Desktop @@-->
                          <nav class="qld__breadcrumbs qld__breadcrumbs--dark qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop" aria-label="breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                          </nav>

                      <!--@@ Heading(s) @@-->
                      <h1>Topics</h1>

                      <!--@@ Abstract @@-->
                          <div class="qld__banner__content--body qld__abstract">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Banner Basic End -->


<section class="qld__body  qld__body--full-width" id="body-123">
    <div class="container-fluid">
      
    <?php
    $args = array(
    'post_type' => array('topics', 'resources'),  // Replace 'your_custom_post_type' with the actual name of your custom post type
    'category_name' => '', // Replace 'your_category_slug' with the slug of your desired category
    'posts_per_page' => -1,  // Number of posts to display (-1 for all posts)
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        <?php
    }
}

wp_reset_postdata();
?>



    </div>
</section>



</main>
<?php
get_footer();

?>
