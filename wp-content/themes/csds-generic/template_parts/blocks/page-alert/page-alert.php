<?php
/**
 * Global Alert Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('alert_heading');
$content = get_field('alert_content');
$color_settings = get_field('colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__page_alerts--wrapper';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// colour settings for block
if ($color_settings) {
    $className .= ' qld__page-alerts--' . $color_settings;
}


?>

<section class="qld__body" <?php echo esc_attr($anchor) ?>>
    <div class="container-fluid">
        <div class="qld__page-alerts <?php echo esc_attr($className) ?>">
            <div class="qld__page-alerts--heading qld__display-lg">
                <?php echo $heading ?>
            </div>
            <div>
                <?php echo $content ?>
            </div>
        </div>
    </div>
</section>