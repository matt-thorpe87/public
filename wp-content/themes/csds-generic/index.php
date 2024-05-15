<?php 

/*
Template name: Homepage
*/

get_header(); ?>

<main class="main" role="main">


<?php get_template_part( '<template_parts/hero_banner' ); ?>

<?php 
        while (have_posts()) {
            the_post(); ?>
    <?php } endwhile; ?>

</main>

<?php
get_footer();

?>
