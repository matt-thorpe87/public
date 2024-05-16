<?php 

/*
Template name: Homepage
*/

get_header(); ?>

<main class="main" role="main">


<?php get_template_part( 'template_parts/hero_banner' ); ?>

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
        </div>
    </section>>

</main>

<?php
get_footer();

?>
