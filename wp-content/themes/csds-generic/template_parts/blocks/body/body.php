<?php
/**
 * Body Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$text = get_field('body_text');
$color_settings = get_field('body_colour_settings');
$width = get_field('body_width');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__body__text__section';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $className .= ' qld__body--dark';
} elseif ($color_settings == 'alternate'){
    $className .= ' qld__body--alt';
} elseif ($color_settings == 'darkalt'){
    $className .= ' qld__body--dark-alt';
}
else {
    $className .= ' qld__body--light';
}

// width settings
if ($width == 'half') {
    $containerName = ' qld__body--half-width';
} else {
    $containerName = ' qld__body--full-width';
}

?>
<!-- Body Custom Block -->
<section <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($className) ?>">
    <div class="qld__body__text container-fluid">
        <div class="body__text <?php echo esc_attr($containerName) ?>">
            <?php echo ($text); ?>
        </div>
    </div>
</section>