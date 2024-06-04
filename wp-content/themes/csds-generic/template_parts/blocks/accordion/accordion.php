<?php
/**
 * Accordion Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('accordion_title');
$content = get_field('accordion_content');
$item = get_field('accordion_item');
$color_settings = get_field('accordion_colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__accordion-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' ' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $className .= ' qld__accordion-group--dark';
} else if ($color_settings == 'alternate') {
    $className .= ' qld__accordion-group--alt';
} else if ($color_settings == 'alternate-dark') {
    $className .= ' qld__accordion-group--dark-alt';
} else {
    $className .= ' qld__accordion-group--light';
}

?>
<section class="qld__accordion__section">
    <div class="container-fluid">  
        <?php if (!empty($heading)){
            ?> <h2> <?php echo $heading; ?> </h2> <?php
        } ?>
        <?php if ($content) { ?>
            <p> <?php echo $content; ?> </p> <?php
        } ?>
        <div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($className); ?>" id="accordion-123">
            <div class="qld__accordion__toggle">
                <button class="qld__accordion__toggle-btn qld__accordion__toggle-btn--closed">Open all</button>
            </div>
            <ul class="qld__accordion-list">
                <?php if (have_rows('accordion_item')) {
                    while (have_rows('accordion_item')) {
                        the_row();
                        $item_heading = get_sub_field('accordion_item_title');
                        $item_content = get_sub_field('accordion_item_content');
                        ?>
                        <li>
                            <section class="qld__accordion">
                                <button class="qld__accordion__title js-qld__accordion qld__accordion--closed"
                                    aria-controls="accordion-group-123-content_<?php echo get_row_index(); ?>"
                                    aria-expanded="false">
                                    <?php echo $item_heading ?>
                                </button>

                                <div class="qld__accordion__body qld__accordion--closed"
                                    id="accordion-group-123-content_<?php echo get_row_index(); ?>">
                                    <div class="qld__accordion__body-wrapper">
                                        <?php echo $item_content;  ?>
                                    </div>
                                </div>
                            </section>
                        </li>
                    <?php }
                }
                ?>
            </ul>
        </div>
    </div>
</section>