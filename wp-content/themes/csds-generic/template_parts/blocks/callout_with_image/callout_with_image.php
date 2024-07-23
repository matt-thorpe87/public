<?php
/**
 * Callout with Image Block template.
 *
 * @param array $block The block settings and attributes.
 */


//  Load values and assign defaults
$heading = get_field('callout_with_image_heading');
$content = get_field('callout_with_image_content');
$image = get_field('callout_with_image_image');
$color_settings = get_field('callout_with_image_colour_settings');


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'callout_with_image';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $style = ' qld__callout--dark';
} else {
    $style = ' qld__callout--light';
}

?>

<section <?php echo esc_attr($anchor); ?> class="qld__callout--wrapper <?php echo esc_attr($className); ?>"
    id="callout-123">
    <div class="container-fluid">
        <div class="qld__callout qld__callout__image row <?php echo esc_attr($style); ?>">
            <div class="col-xs-6 col-md-3 col-lg-3">
                <img class="callout-image" src="<?php echo $image; ?>">
            </div>
            <div class="col-xs-12 col-md-9 col-lg-9 qld__callout__content">
                <?php 
                if( !empty($heading)){ ?>
                    <h3 class="qld__callout__heading "><?php echo $heading; ?> </h3>
                <?php } ?>
                <?php if( !empty($content) ){ ?>
                    <p><?php echo $content; ?></p> <?php } ?>
            </div>
        </div>
    </div>
</section>