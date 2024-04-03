<?php
/**
 * Video Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('video_heading');
$body = get_field('video_body_text');
$url = get_field('video_url');
$thumb = get_field('thumbnail');
$layout = get_field('layout');
$caption = get_field('video_caption');
$video_type = get_field('video_type');
if ($video_type == 'self') {
    $video_url = get_field('video_url');
} else {
    $video_id = get_field('video_id');
}

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

?>

<section class="qld__body">
    <div class="container-fluid">
        <div class="qld__video qld__video--video-layout-one_col qld__video--column-layout-left" <?php echo esc_attr($anchor) ?>>


            <h2 class="qld__video__header">
                <?php echo $heading ?>
            </h2>
            <div class="qld__video__body">
                <?php echo $body ?>
            </div>

            <div class="qld__video__vid-wrapper">


                <!-- youtube or vimeo -->
                <div class="qld__video_vid" data-source="https://www.youtube.com/embed/<?php echo $video_id ?>"
                    data-video-id="<?php echo $video_id ?>" data-type="youtube">
                    <div class="qld__video_player">

                    </div>
                </div>


                <div class="qld__video__caption">
                    <?php echo $caption ?>
                </div>
            </div>

        </div>
    </div>
</section>