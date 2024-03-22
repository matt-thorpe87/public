<?php get_header(); ?>
<?php
$search_term = $_GET["s"];
$s = get_search_query();
$args = array(
    's' => $s,
    'post_type' => 'any'
); ?>
<!-- // The Query -->

<div class="container-fluid" style="padding-top:2rem;padding-bottom:2rem;">

    <?php
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $blogs = get_last_updated();
        echo "<h2 class='qld__card__title'>Search Results for: " . get_query_var('s') . "</h2>";
        foreach ($blogs as $blog) {
            switch_to_blog($blog['blog_id']);
            $lastposts = get_posts($args);
            foreach ($lastposts as $post):
                setup_postdata($post);
                ?>
                <div class="qld__card qld__card--clickable" style="margin:1rem;padding:1rem;">
                    <div class="qld__card__inner">
                        <div class="qld__card__content">
                            <div class="qld__service_search__result__header">
                                <h3 class="qld__card__title">
                                    <a href="<?php the_permalink(); ?>" class="qld__card--clickable__link">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <h4 class="qld__card__title">
                                    <?php echo get_bloginfo('name') ?>
                                </h4>
                            </div>
                            <?php the_excerpt() ?>
                        </div>
                        <div class="qld__card__footer">
                            <div class="qld__card__footer-inner">
                                <ul class="qld__tag-list qld__card__tags">
                                    <?php
                                    $id = get_the_id();
                                    $postCategory = get_the_category($id);
                                    foreach ($postCategory as $postCat): ?>
                                        <li>
                                            <a class="qld__tag qld__card__tag qld__tag--link" tabindex="0"
                                                href="<?php echo get_category_link($postCat->cat_ID) ?>">
                                                <?php echo $postCat->name; ?>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            restore_current_blog();
        }
    } else {
        ?>
        <section class="qld__body qld__page-alerts--wrapper" id="page-alert-123"
            style="padding-top:2rem;padding-bottom:2rem;">
            <div class="container-fluid">
                <div class="qld__page-alerts qld__page-alerts--info">
                    <div class="qld__page-alerts--heading qld__display-lg">Nothing Found</div>
                    <div>Sorry, but nothing matched your search criteria. Please try again with some different keywords.
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>
</div>



<?php get_footer(); ?>