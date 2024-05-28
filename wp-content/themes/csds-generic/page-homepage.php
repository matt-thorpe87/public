<?php 

/*
Template name: Homepage
*/

get_header(); ?>

<main class="main" role="main">
<?php 
$display = get_field('display_page_banner');
$banner_colour = get_field('banner_background_colour');
$className = ' qld__banner--' . $banner_colour;
$bread = ' qld__breadcrumbs--' . $banner_colour;

if($display == 'yes') :

?>

<!-- Banner Basic  -->
<section id="banner-123"
    class="qld__banner qld__banner__basic qld__banner--has-hero qld__banner--breadcrumbs<?php echo esc_attr($className); ?>">

    <!--@@ Breadcrumbs - Mobile @@-->
    <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--mobile<?php echo esc_attr($bread); ?>"
        aria-label="breadcrumb">
        <ul class="qld__link-list qld__link-list--inline">
            <li>
                <a href="/">
                    Home
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="qld__banner__wrapper">

            <div class="qld__banner__main row">

                <!--@@ Hero image @@-->
                <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5">

                    <?php if (!empty(get_field('page_banner_image'))): ?>
                        <div class="qld__banner__image ">

                            <?php
                            $pgBannerImg = get_field('page_banner_image');
                            $displayPgBannerImg = $pgBannerImg['sizes']['large'];
                            $img_alt = $pgBannerImg['alt'];
                            $img_title = $pgBannerImg['title'];
                            ?>
                            <div class="bannerImgWrapper">
                                <img style="height:100%" ; src="<?php echo $displayPgBannerImg ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>" title="<? echo $img_title ?>">
                            </div>
                        </div>
                    <?php endif ?>
                </div>

                <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                    <!--@@ Breadcrumbs - Desktop @@-->
                    <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop<?php echo esc_attr($bread); ?>"
                        aria-label="breadcrumb">

                        <?php custom_breadcrumbs(); ?>

                    </nav>

                    <!--@@ Heading(s) @@-->
                    <h1>
                        <?php the_title(); ?>
                    </h1>

                    <!--@@ Abstract @@-->

                    <div class="qld__banner__content--body qld__abstract">
                        <?php the_field('page_banner_subtitle'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
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
