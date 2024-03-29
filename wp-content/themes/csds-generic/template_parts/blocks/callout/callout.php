<?php
/**
 * Callout Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('callout_heading');
$content = get_field('callout_content');
$color_settings = get_field('callout_colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'callout';
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

<section <?php echo esc_attr($anchor); ?> class="qld__callout--wrapper qld__body <?php echo esc_attr($className) ?>"
    id="callout-123">
    <div class="container-fluid">
        <div class="qld__callout row <?php echo esc_attr($style); ?>">
            <div class="col-xs-12">
                <h3 class="qld__callout__heading ">
                    <?php echo $heading; ?>
                </h3>
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>