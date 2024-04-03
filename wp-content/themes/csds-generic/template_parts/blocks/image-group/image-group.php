<?php
/**
 * Image Group Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('heading');
$sub = get_field('subheading');
$images = get_field('images');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__icon-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

?>
<section class="qld__body qld__body--full-width <?php echo esc_attr($className) ?>" <?php echo esc_attr($anchor); ?>>

    <div class="container-fluid">
        <div class="col icon-group-title-col">
            <h3 class=" qld_callout_heading">
                <?php echo $heading ?>
            </h3>
            <p>
                <?php echo $sub ?>
            </p>
        </div>

        <div class="row icon-group-row">
            <?php
            if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        class="col-xs-6 col-s-4 col-lg-3 col-xl-2" />
                <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</section>