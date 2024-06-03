<?php
/**
 * Card Single Action Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$card = get_field('card');
$color_settings = get_field('background_colour');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and image and align values.
$className = 'qld__card';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($color_settings)) {
    $className .= ' qld__body--' . $color_settings;
}
if (!empty($block['align'])) {
    $containerClassName = ' qld__card--' . $block['align'];
}
?>

<section class="qld__card--wrapper " <?php echo esc_attr($anchor); ?>>

    <div class="container-fluid">
        <div class="row">
            <ul class="qld__card-list qld__card-list--matchheight <?php if(!empty($containerClassName)) : echo esc_attr($containerClassName); endif ?>">
                <?php if (have_rows('card')):
                    while (have_rows('card')):
                        the_row();
                        $heading = get_sub_field('card_heading');
                        $content = get_sub_field('card_content');
                        $footer = get_sub_field('card_footer');
                        $link = get_sub_field('card_link');
                        if ($link) {
                            $className .= ' qld__card__action';
                        } else {
                            $className .= '';
                        }


                        ?>
                        <li class="col-sm-12 col-md-6 col-lg-4">
                            <div class="<?php echo esc_attr($className); ?>">
                                <div class="qld__card__inner">
                                    <div class="qld__card__content">
                                        <div class="qld__card__content-inner">
                                            <h3 class="qld__card__title">
                                                <?php if (!empty($link)) {
                                                    $link_url = $link['url'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                                    <a href="<?php echo esc_url($link_url) ?>"
                                                        target="<?php echo esc_attr($link_target); ?>" class="qld__card--clickable__link">
                                                        <?php echo $heading ?>
                                                    </a>
                                                <?php } else {
                                                    echo $heading;
                                                }
                                                ?>
                                            </h3>

                                            <p class="qld__card__description">
                                                <?php echo $content; ?>
                                            </p>
                                        </div>
                                        <?php if (!empty($footer)) { ?>
                                            <div class="qld__card__footer">
                                                <hr class="qld__horizontal-rule">
                                                <div class="qld__card__footer-inner">
                                                    <?php echo $footer; ?>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</section>