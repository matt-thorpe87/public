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
$colour = get_field('background_colour');

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
if(!empty($colour)) {
    $className .= ' qld__body--' . $colour;
}
if (!empty($block['align'])) {
    $align = ' qld__align--' . $block['align'];
}

?>
<section class="qld__image__group__section <?php echo esc_attr($className); ?>" <?php echo esc_attr($anchor); ?> >

    <div class="container-fluid">
        <div class="col icon-group-title-col <?php if(!empty($align)) : echo esc_attr($align); endif; ?>">
            <?php if ($heading){ ?>
            <h3 class="qld_callout_heading">
                <?php echo $heading ?>
            </h3>
            <?php } ?>
            <?php if ($sub) { ?>
            <p>
                <?php echo $sub ?>
            </p>
            <?php } ?>
        </div>

        <div class="row icon-group-row <?php if(!empty($align)) : echo esc_attr($align); endif; ?>">
            <?php
            if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <?php 
                    $url = $image['url'];
                    $alt = $image['alt'];
                    ?>
                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>"
                        class="col-xs-6 col-s-4 col-lg-3 col-xl-2" />
                <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</section>