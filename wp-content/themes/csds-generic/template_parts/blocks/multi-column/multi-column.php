<?php
/**
 * Multi Column Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('multi_column_heading');
$subheading = get_field('multi_column_subheading');
$color_settings = get_field('colour_settings');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qld__multi-column__section';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


// build style attributes for background and text colours using QH theme design
if ($color_settings == 'altdark') {
    $className .= ' qld__body--dark-alt';
} else if ($color_settings == 'dark') {
    $className .= ' qld__body--dark';
} else if ($color_settings == 'alternate') {
    $className .= ' qld__body--alt';
} else {
    $className .= '';
}



?>

<section class="<?php echo esc_attr($className) ?>" id="<?php echo esc_attr($anchor) ?>">

    <div class="container-fluid">
        <div class="body__text">
            <div class="row">

                <div class="col-xs-12 col-lg-6">

                    <h2>
                        <?php if (!empty($heading)) {
                            echo esc_attr($heading);
                        } ?>
                    </h2>

                    <?php if (!empty($subheading)) {
                        echo esc_attr($subheading);
                    } ?>
                </div>

            </div>
            <?php
            // Check rows exists.
            if (have_rows('columns')): ?>
                <div class="row row--heading-paragraph-columns">

                    <?php
                    // Loop through rows.
                    while (have_rows('columns')):
                        the_row();
                        $columns = 'col-xs-12';
                        $colContent = get_sub_field('column_content');
                        $count = count(get_field('columns'));
                        if ($count == 2) {
                            $columns .= ' col-lg-6 col-md-6';
                        } elseif ($count == 3) {
                            $columns .= ' col-lg-4 col-md-4';
                        } elseif ($count == 4) {
                            $columns .= ' col-lg-3 col-md-4';
                        }
                        ?>

                        <div class="<?php echo esc_attr($columns) ?>">
                            <?php if (!empty($colContent)) : ?>
                            <?php echo $colContent;
                            endif;
                            ?>
                        </div>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
        </div>


    </div>

</section>