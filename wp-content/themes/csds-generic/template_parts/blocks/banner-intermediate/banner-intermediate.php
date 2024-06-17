<?php
/**
 * Intermediate Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('banner_heading');
$content = get_field('banner_content');
$color_settings = get_field('background_colour_settings');
$breadcrumbs = get_field('banner_breadcrumbs');
$image = get_field('banner_image');
$button = get_field('add_button');


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' ' . $block['align'];
}
if (!empty($image)) {
    $className .= ' qld__banner--has-hero';
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $className .= ' qld__banner--dark';
} else if ($color_settings == 'alternate') {
    $className .= ' qld__banner--alt';
} else if ($color_settings == 'altdark') {
    $className .= ' qld__banner--dark-alt';
} else {
    $className .= '';
}

// add breadcrumbs 
if (!empty($breadcrumbs && $breadcrumbs == 'yes')) {
    $className .= ' qld__banner--breadcrumbs';
}
?>

<!--@@ Banner @@-->
<section <?php echo esc_attr($anchor); ?> class="qld__banner qld__banner__basic <?php echo esc_attr($className); ?>">
    <div class="container-fluid">
        <div class="qld__banner__wrapper">
            <div class="qld__banner__main row">

                <!--@@ Hero image @@-->
                <?php if (!empty($image)) { ?>
                    <div class="qld__banner__hero col-xs-12 qld__banner__hero--scale col-md-6 col-lg-5 col-xl-4">
                        <div class="qld__banner__image " style="background-image: url('<?php echo $image; ?>');">
                        </div>
                    </div>
                <?php } ?>
                <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                    <!--@@ Breadcrumbs - Desktop @@-->
                    <?php if (!empty($breadcrumbs && $breadcrumbs == 'yes')) { ?>
                        <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop"
                            aria-label="breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                        </nav>
                    <?php } ?>

                    <!--@@ Heading(s) @@-->
                    <?php if (!empty($heading)) { ?>
                        <h1 class="qld__banner__content--title">
                            <?php echo $heading; ?>
                        </h1>
                    <?php } ?>

                    <!--@@ Abstract @@-->
                    <?php if (!empty($content)) { ?>
                        <div class="qld__banner__content--body qld__abstract">
                            <?php echo $content; ?>
                        </div>
                    <?php } ?>

                    <ul class="qld__banner__content--cta qld__link-list">
                        <?php // Check rows exists.
                        if (have_rows('add_button')):

                            // Loop through rows.
                            while (have_rows('add_button')):
                                the_row();
                                // build style attributes for button using QH theme design
                        
                                $text = get_sub_field('button_text');
                                $url = get_sub_field('button_url');
                                $color = get_sub_field('button_colour_settings');
                                if ($color == 'secondary') {
                                    $colorClassName = ' qld__btn--secondary';
                                } else {
                                    $colorClassName = ' qld__btn--primary';
                                }
                                $link_url = $url['url'];
                                $link_title = $url['title'];
                                $link_target = $url['target'] ? $url['target'] : '_self'; ?>

                                <li class="qld__banner__buttons">
                                    <a href="<?php echo esc_url($link_url) ?>" target="<?php echo esc_attr($link_target) ?>"
                                        class=" qld__btn <?php echo esc_attr($colorClassName); ?>">
                                        <?php if ($text) {
                                            echo esc_attr($text);
                                        } else {
                                            echo esc_attr($link_title);
                                        } ?>
                                    </a>
                                </li>
                            <?php endwhile ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>