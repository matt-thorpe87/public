<?php 

/*
Template name: QH Homepage
*/

get_header(); ?>

<main class="main" role="main">
<?php 
// $display = get_field('display_page_banner');
// $banner_colour = get_field('banner_background_colour');
// $className = ' qld__banner--' . $banner_colour;
// $bread = ' qld__breadcrumbs--' . $banner_colour;
// if($display == 'yes') :
$show = get_field('show_page_title');
include 'template_parts/hero_banner.php'; 
?>

<section class="qld__body ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                            <?php the_content(); ?>
                    <?php } ?>

                </div>
            </div>
        </div>
        
    </section>

</main>

<?php
get_footer();

?>
