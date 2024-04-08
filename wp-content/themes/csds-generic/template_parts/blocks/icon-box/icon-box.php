<?php
/**
 * Icon Box Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('heading');
$content = get_field('content');
$icon = get_field('icon');
$position = get_field('icon_position');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__global_alert';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// icon position
if (!empty($position)) {
    $className .= ' qld__icon-' . $position;
}


?>
<section <?php echo esc_attr($anchor); ?> class="qld__icon__box__section">

    <div class="container-fluid">

        <div class="row icon-box-row <?php echo esc_attr($className) ?>">

            <div class=" col-xs-6 col-lg-3">
                <img src="<?php echo esc_attr($icon) ?>">
            </div>

            <div class=" col-xs-6 col-lg-3">
                <h3 class="qld_callout_heading">
                    <?php echo $heading ?>
                </h3>
                <p>
                    <?php echo $content ?>
                </p>
            </div>

        </div>

    </div>

</section>