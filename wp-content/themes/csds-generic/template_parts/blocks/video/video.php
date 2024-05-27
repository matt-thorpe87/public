<?php
/**
 * Video Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('video_heading');
$body = get_field('video_body_text');
$thumb = get_field('thumbnail');
$layout = get_field('layout');
$caption = get_field('video_caption');
$embed = get_field('video_embed');
$position = get_field('video_position');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "layout" values.
$className = "qld__video ";
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if ($layout == 'one') {
    $className .= 'qld__video--video-layout-one_col';
} else {
    $className .= 'qld__video--video-layout-two_col';
}
if ($position == 'right') {
    $className .= ' qld__video--column-layout-right';
} else {
    $className .= ' qld__video--column-layout-left';
}


?>

<section class="qld__video__section">
    <div class="container-fluid">
        <div class="<?php echo esc_attr($className); ?> " <?php echo esc_attr($anchor) ?>>
            <div class="qld__video__vid-wrapper">
                <div class="qld__video_vid">
                    <?php echo $embed; ?>
                </div>
                <div class="qld__video__caption">
                    <?php echo $caption ?>
                </div>
            </div>
            <div class="qld__video__text_wrapper">
                <h2 class="qld__video__header">
                    <?php echo $heading ?>
                </h2>
                <div class="qld__video__body">
                    <?php echo $body ?>
                </div>
            </div>
        </div>
    </div>
</section>