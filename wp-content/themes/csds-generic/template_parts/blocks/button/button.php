<?php
/**
 * Button Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$text = get_field('button_text');
$link = get_field('button_url');
$color = get_field('button_colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__btn';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $containerClassName = ' qld__btn--' . $block['align'];
}

// build style attributes for button using QH theme design
if ($color == 'secondary') {
    $className .= ' qld__btn--secondary';
} else {
    $className .= ' qld__btn--primary';
}
?>
<div class="qld__button__container">
    <div class="container-fluid button__container <?php if (!empty($containerClassName)) {
        echo $containerClassName;
    }
    ; ?>">
        <?php if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
            <a href="<?php echo esc_attr($link_url) ?>" target="<?php echo esc_attr($link_target) ?>"
                class="qld__btn <?php echo esc_attr($className) ?>">
                <?php if ($text) {
                    echo esc_attr($text);
                } else {
                    echo esc_attr($link_title);
                } ?>
            </a>
        <?php endif ?>
    </div>
</div>