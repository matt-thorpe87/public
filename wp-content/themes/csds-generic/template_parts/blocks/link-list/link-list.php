<?php
/**
 * Link List Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('link_list_heading');
$content = get_field('link_list_content');
$color_settings = get_field('colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld-link-list qld__accordion-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $className .= ' qld__accordion-group--dark';
} else if ($color_settings == 'alternate') {
    $className .= ' qld__accordion-group--alt';
} else if ($color_settings == 'altdark') {
    $className .= ' qld__accordion-group--dark-alt';
} else {
    $className .= ' qld__accordion-group--light';
}

?>

<section class="qld__link-list__section">
    <div class="container-fluid">

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
                if (have_rows('add_link_row')):

                    // Loop through rows.
                    while (have_rows('add_link_row')):
                        the_row();

                        // Load sub field value.
                        $url = get_sub_field('url');
                        $title = get_sub_field('title');
                        ?>
                        <li>
                            <div class="qld__list__body-wrapper">
                                <a href="<?php echo esc_attr($url); ?>">
                                    <span class="qld__link__list__title">
                                        <?php echo esc_attr($title); ?>
                                    </span>
                                    <span class="material-icons qld-material-icons md-dark md-24">east</span>
                                </a>
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