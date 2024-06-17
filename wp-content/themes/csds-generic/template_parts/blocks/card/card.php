<?php
/**
 * Card Multi Action Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$card = get_field('card');
$color_settings = get_field('card_colour');

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
if (!empty($image)) {
    $className .= ' qld__card--image';
}
if (!empty($color_settings)) {
    $className .= ' qld__body--' . $color_settings;
}
if (!empty($block['align'])) {
    $containerClassName = ' qld__card--' . $block['align'];
}

?>

<section class="qld__card--wrapper qld__card--wrapper-bg-colour" <?php echo esc_attr($anchor); ?>>

    <div class="container-fluid">
        <div class="row">
            <ul class="qld__card-list qld__card-list--matchheight <?php if(!empty($containerClassName)) : echo esc_attr($containerClassName); endif ?>">
                <?php if (have_rows('card')):
                    while (have_rows('card')):
                        the_row();
                        $heading = get_sub_field('card_heading');
                        $content = get_sub_field('card_content');
                        $footer = get_sub_field('card_footer');
                        $image = get_sub_field('card_image');
                        $link = get_sub_field('card_link');
                        if ($link) {
                            $className .= ' qld__card__action';
                        } else {
                            $className .= '';
                        }


                        ?>
                        <li class="col-sm-12 col-md-6 col-lg-4">
                            <div class="<?php echo esc_attr($className); ?>">

                                <?php if (!empty($image)) { 
                                    if($link){
                                    $link_url = $link['url']; ?>
                                    <a href="<?php echo esc_url($link_url); ?> "><?php } ?>
                                    <div class="qld__responsive-media-img--bg"
                                        style="background-image: url('<?php echo $image ?>');"></div></a>
                                <?php } ?>

                                <div class="qld__card__inner">
                                    <div class="qld__card__content">
                                        <div class="qld__card__content-inner">
                                            <h3 class="qld__card__title">
                                                <?php if (!empty($link)) {
                                                    $link_url = $link['url'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self'; 
                                                    $link_title = $link['title']; ?>
                                                    <a href="<?php echo esc_url($link_url) ?>"
                                                        target="<?php echo esc_attr($link_target); ?>" >
                                                        <?php if($heading) {
                                                            echo $heading;
                                                        } else {
                                                            echo $link_title;
                                                        } ?>
                                                    </a>
                                                <?php } else {
                                                    echo $heading;
                                                }
                                                ?>
                                            </h3>
                                            <?php if (!empty($content)){ ?>
                                                <p class="qld__card__description">
                                                    <?php echo $content; ?>
                                                </p>
                                            <?php } ?>
                                            
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