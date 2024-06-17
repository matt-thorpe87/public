<?php
/* Template Name: Default Page */
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
    <section class="qld__body ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
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