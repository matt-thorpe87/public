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
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: " . get_query_var('s') . "</h2>");
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>
            <div class="qld-link-list qld__accordion-group">
                <li class="">
                    <a href="<?php the_permalink(); ?>">
                        <span class="qld__link__list__title">
                            <?php the_title(); ?>
                        </span>
                    </a>
                </li>
            </div>
            <?php
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
<div class="container-fluid" style="padding-top:2rem;padding-bottom:2rem;">
    <h2 style='font-weight:bold;color:#000'>Search Results from other websites for:
        <?php echo $s; ?>
    </h2>
    <?php
    $table = 'wp_2_posts';
    $sql = "SELECT * FROM " . $table . " WHERE post_type IN ('post', 'page', 'podcast') AND post_status = 'publish' AND post_title like '%" . $s . "%'";
    $other_posts = $wpdb->get_results($sql);
    // echo $sql;
    if (!empty ($other_posts)) {
        foreach ($other_posts as $other_post) {
            ?>
            <div class="qld-link-list qld__accordion-group" style="padding-bottom:1rem">
                <li>
                    <a href="<?php echo $other_post->guid ?>"><span class="qld__link__list__title">
                            <?php echo $other_post->post_title ?>
                        </span><sub class="qld__link__list__title">Website:
                            <!-- <?php
                            if (str_contains($other_post->guid, 'csds')) {
                                echo "Clinical Skills Development Serivce";
                            }
                            ?> -->
                        </sub></a>
                </li>
            </div>
            <?php
        }
    } else {
        echo 'nothing doing here';
    } ?>
</div>
<?php
$blogs = get_last_updated();
echo "<div class='container-fluid'><h1>Last blog posts in all blogs</h1>";
foreach ($blogs as $blog) {
    // echo "<h2><a href='" . $blog['domain'] . $blog['path'] . "'>" . get_blog_option($blog['blog_id'], 'blogname') . "</a></h2>";
    switch_to_blog($blog['blog_id']);
    $lastposts = get_posts($args);
    foreach ($lastposts as $post):
        setup_postdata($post);
        ?>
        <p><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a></p>
        <?php
    endforeach;
    restore_current_blog();
}
?>
</div>
<?php get_footer(); ?>