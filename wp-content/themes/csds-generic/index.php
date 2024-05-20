<?php 

get_header(); ?>

<main class="main" role="main">

    <section class="qld__body ">
        <div class="container-fluid">
            <div class="row">
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                            <?php the_content(); ?>
                    <?php } ?>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();

?>
