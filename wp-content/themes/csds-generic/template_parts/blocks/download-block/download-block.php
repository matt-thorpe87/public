<?php
/**
 * Download Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('download_heading');
$content = get_field('download_content');
$color_settings = get_field('download_colour_settings');
$download = get_field('downloadable_file');
$btn_colour = get_field('button_type');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'callout';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' qld__align--' . $block['align'];
}

// build style attributes for background and text colours using QH theme design
if ($color_settings == 'dark') {
    $style = ' qld__callout--dark';
} else {
    $style = ' qld__callout--light';
}

// button style
if( !empty($btn_colour )){
    $btn_style = ' qld__btn__' . $btn_colour;
}

?>


<section <?php echo esc_attr($anchor); ?> class="qld__callout--wrapper <?php echo esc_attr($className) ?>"
    id="callout-123">
    <div class="container-fluid">
        <div class="qld__callout row <?php echo esc_attr($style); ?>">
            <div class="col-xs-12">
                <h3 class="qld__callout__heading">
                    <?php echo $heading; ?>
                </h3>
                <?php echo $content; ?>
                <?php if( $download ): 
                    $link_url = $download['url'];
                    $link_title = $download['title'];
                    $link_target = $download['target'] ? $download['target'] : '_blank';
                    ?>
                <div class="qld__download__btn">
                    <a class="qld__btn <?php echo esc_attr($btn_style);  ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php if( $link_title ) { 
                        echo esc_html( $link_title ); 
                    } else { 
                        echo 'Download';
                    } endif;?>
                    </a>   
                </div>
            </div>
            
        </div>
    </div>
</section>