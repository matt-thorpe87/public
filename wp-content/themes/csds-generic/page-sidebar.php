<?php 
/* Template Name: Default With Sidebar */
get_header(); ?>
<main class="main" role="main">
<?php 

$type = get_field('banner_type');

if ($type  == 'none'){
    echo '<div class="error">hey there its a no</div>';
}
elseif( $type == 'basic') {
include 'template_parts/blocks/banner-basic/banner-basic.php';
} 
elseif ( $type == 'int') {
include 'template_parts/blocks/banner-intermediate/banner-intermediate.php';
}
elseif ( $type == 'ad') {
include 'template_parts/blocks/banner-advanced/banner-advanced.php';
} 

?>
<!-- Banner End -->

<section class="qld__body ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                
            <!-- side navigation -->
            <div class="qld__side-nav qld__accordion">
                <button class="qld__side-nav__toggle qld__accordion__title qld__accordion--closed" aria-controls="nav-default" aria-expanded="false" aria-selected="false" >
                Links
                </button>
                <nav aria-label="side navigation" id="nav-default" class="qld__side-nav__content qld__accordion--closed qld__accordion__body">
                    <h2 class="qld__sidenav__title">
                        <a class="qld__sidenav__link" href=""><?php echo get_the_title( $post->post_parent); ?></a>
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
