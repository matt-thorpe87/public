<?php
/**
 * Global Alert Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('alert_heading');
$content = get_field('alert_content');
$link = get_field('alert_link');
$color_settings = get_field('colour_settings');
$icon = get_field('material_icon');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id='. esc_attr($block['anchor']);
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__global_alert';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


// build style attributes for background and text colours using QH theme design
if ($color_settings == 'qhdarkalt') {
    $bgColor = ' qld__body--dark-alt';
} else if ($color_settings == 'qhdark') {
    $bgColor = ' qld__body--dark';
} else if ($color_settings == 'qhalt') {
    $bgColor = ' qld__body--alt';
} elseif ($color_settings == 'yellow') {
    $bgColor = ' qld__global_alert--default';
} else {
    $bgColor = ' qld__body--' . $color_settings;
}

?>

<section class="alert qld__global_alert <?php echo esc_attr($className);
echo esc_attr($bgColor) ?>" <?php echo esc_attr($anchor); ?>>
    <div class="container-fluid">
        <div class="qld__global_alert__main">
            <span class="material-icons qld-material-icons md-40 md-dark <?php echo esc_attr($bgColor) ?>">
            <?php if ( $icon ) {
                echo $icon;
            } ?>
            </span>
            <div class="qld__global_alert__content">
                <div class="qld__global_alert__message">
                    <?php if (!empty($heading)) { ?>
                    <strong>
                        <?php echo $heading; ?>&nbsp;
                    </strong>
                    <?php } ?>
                    <?php if (!empty($content)) { ?>
                    <?php echo $content; ?>
                    <?php } ?>
                </div>
                <?php if ($link): ?>
                    <div class="qld__global_alert__action">
                        <?php
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a href="<?php echo esc_url($link_url) ?>"
                            target="<?php echo esc_attr($link_target) ?>"><span><?php echo $link_title; ?>
                            </span>
                        </a>
                    </div>
                <?php endif ?>


            </div>
            <div class="qld__global_alert__close">
                <button aria-label="Close" type="button" class="close" data-dismiss="alert" onclick="closeAlert()">
                    <span aria-hidden="true" focusable="false"
                        class="material-icons qld-material-icons md-24 md-dark">close
                    </span>
                </button>
            </div>
        </div>

    </div>


    <script>function closeAlert() {
            document.querySelector('.alert').classList.add('close-alert');
            setTimeout(function () {
                document.querySelector('.alert').classList.add('close-alert-height');
            }, 500);
        }
    </script>
</section>