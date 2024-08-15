<?php
/**
 * Icon List Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('icon_list_heading');
$content = get_field('icon_list_sub');
$color_settings = get_field('colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id='. esc_attr($block['anchor']);
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld-icon-list qld__accordion-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if (!empty($color_settings)) {
    $className .=  ' qld__accordion-group--' . $color_settings;
} 

?>

<section class="qld__link-list__section">
    <div>

        <?php if ( !empty($heading) ){
            ?> <h2> <?php  echo $heading;  ?> </h2>
            <?php       
        }?>

        <?php if (!empty($content)){
            ?> <p> <?php echo $content; ?> </p> <?php
         } ?>
        <div class="<?php echo esc_attr($className); ?>">
            <ul class=" qld__accordion-list">
                <?php // Check rows exists.
                if (have_rows('add_icon_list_row')):

                    // Loop through rows.
                    while (have_rows('add_icon_list_row')):
                        the_row();

                        // Load sub field value.
                        $icon = get_sub_field('icon');
                        $list_content = get_sub_field('content');
                        ?>
                        <li>
                            <div class="qld___icon-list__body-wrapper">
                                <?php
                                    if ( $icon ) { ?>
                                <span class="material-icons qld-material-icons md-dark md-24">
                                    <?php echo $icon;
                                    } ?>
                                </span>
                                <span class="qld__icon__list__content">
                                    <?php echo $list_content; ?>
                                </span>
                            </div>
                        </li>
                        <?php
                        // End loop.
                    endwhile;

                    // No value.
                else:
                    // Do something...
                endif;
                ?>
            </ul>
        </div>
    </div>
</section>