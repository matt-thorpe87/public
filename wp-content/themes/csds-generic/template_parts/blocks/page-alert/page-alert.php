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
if (!empty($color_settings)) {
    $className .= ' qld__page-alerts--' . $color_settings;
}
?>

<section class="qld__page__alert__section" <?php echo esc_attr($anchor) ?>>
    <div class="container-fluid">
        <div class="qld__page-alerts <?php echo esc_attr($className) ?>">
            <?php if (!empty($heading)){?>
                <div class="qld__page-alerts--heading qld__display-lg"> <h2> <?php echo $heading; ?> </h2></div> <?php
                } ?>
            <?php if (!empty($content)){ ?>
                <div><p> <?php echo $content; ?> </p></div> <?php
                } ?>            
        </div>
    </div>
</section>