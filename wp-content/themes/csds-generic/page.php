<?php
/* Template Name: Default Page */
get_header(); ?>
<main class="main" role="main">
<?php 
$type = get_field('banner_type');
$show = get_field('show_page_title');

if( $type == 'basic') {
include 'template_parts/blocks/banner-basic/banner-basic.php';
} 
elseif ( $type == 'int') {
include 'template_parts/blocks/banner-intermediate/banner-intermediate.php';
}
elseif ( $type == 'ad') {
include 'template_parts/blocks/banner-advanced/banner-advanced.php';
}  
elseif ($type == 'default') { 
    include 'inc/page-banner.php';
} 

?>
    <section class="qld__body ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <?php
                    while (have_posts()) {
                        the_post(); 
                        if ($show == 'yes') { ?>
                        <?php if (!empty($type) && $type == 'none') { ?>
                        <h1 class="qld__page__title"><?php the_title(); ?></h1>
                        <?php } elseif ($type == 'basic' || $type == 'int' || $type == 'ad') {
                        ?>
                        <h2 class="qld__page__title"> <?php the_title(); ?> </h2>
                        <?php }  }  
                        ?>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>


</main>
<?php
get_footer();

?>