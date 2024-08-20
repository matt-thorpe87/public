<?php
/*
Template Name:QH Custom Post Type Template
Template Post Type: post, resources, topics, podcast, courses, podcasts, topic, resource, course
*/
?>

<?php get_header(); ?>
<main class="main" role="main">
<?php 
  include 'inc/posts-banner.php';
?>

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
                <div>
                <?php
                while(have_posts()){
                    the_post(); ?>
                <?php if($display == 'no') { ?>
                <h1><?php the_title(); ?></h1> 
                <?php } ?>
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
