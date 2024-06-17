<?php
/**
 * Advanced Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$primary_heading = get_field('primary_heading');
$secondary_heading = get_field('secondary_heading');
$heading_bg = get_field('display_heading_background');
$content = get_field('content');
$breadcrumbs = get_field('display_breadcrumbs');
$bg_type = get_field('background_type');
$bg_color = get_field('background_colour');
$desktop_img = get_field('background_image_desktop');
$mobile_img = get_field('background_image_mobile');
$hero_image = get_field('hero_image');
$hero_image_display = get_field('hero_image_display');
$cta = get_field('cta_type');
$pbutton_text = get_field('primary_button_text');
$pbutton_link = get_field('primary_button_link');
$sbutton_text = get_field('secondary_button_text');
$sbutton_link = get_field('secondary_button_link');


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
// if (!empty($block['align'])) {
//     $align = ' ' . $block['align'];
// }
if (!empty($hero_image)) {
    $className .= ' qld__banner--has-hero';
}
if (!empty($bg_color)) {
    $className .= ' qld__banner--' . $bg_color;
}
if( !empty($breadcrumbs) && $breadcrumbs == 'yes'){
    $className .= ' qld__banner--breadcrumbs';
} 

// Background image //
if (!empty($bg_type) && $bg_type == 'image'){
    $img_url = $desktop_img['url'];
    $bg = 'background-image: url(' . $img_url . ')';
}
?>

<!--@@ Banner @@-->
<section <?php echo esc_attr($anchor); ?> class="qld__banner qld__banner__advanced qld__banner--nav <?php echo esc_attr($className); ?>"
    style="<?php echo esc_attr($bg); ?>">

    <?php if (!empty($breadcrumbs && $breadcrumbs == 'yes')) { ?>
    <!--@@ Breadcrumbs - Mobile @@-->
    <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--mobile" aria-label="breadcrumb">
        <ul class="qld__link-list qld__link-list--inline">
            <li>
                <a href="/">Home</a>
            </li>
        </ul>
    </nav>
    <?php } ?>
    
    <div class="container-fluid">
        <div class="qld__banner__wrapper">
            <div class="qld__banner__main row">
                <!--@@ Hero image @@-->
                
                    <div class="qld__banner__hero col-xs-12 qld__banner__hero--scale col-md-6 col-lg-5 col-xl-4">
                        <?php if (!empty($hero_image)) { 
                            $hero_url = $hero_image['url']; ?>
                        <div class="qld__banner__image qld__banner__image--mobile-hide" style="background-image: url('<?php echo $hero_url; ?>');"></div>
                        <?php } ?>
                        <?php if (!empty($bg_type) && $bg_type == 'image') { 
                            if (!empty($mobile_img['url'])){
                                $mobile_url = $mobile_img['url']; ?>
                                <div class="qld__banner__image qld__banner__image--background qld__banner__image--desktop-hide" style="background-image: url('<?php echo $mobile_url; ?>')"></div>
                            <?php }} ?>
                        
                    </div>
                
                <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7" >
        
                <?php if (!empty($breadcrumbs && $breadcrumbs == 'yes')) { ?>
                    <!--@@ Breadcrumbs - Desktop @@-->
                    <nav class="qld__breadcrumbs qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop"
                        aria-label="breadcrumb">
                        <?php custom_breadcrumbs(); ?>
                    </nav>
                <?php } ?>

                    <!--@@ Heading(s) @@-->
                    <?php 
                    if($heading_bg == 'yes'){
                        $heading_dark = ' qld__banner__heading--dark';
                        $heading_light = ' qld__banner__heading--light';
                        $heading_margin = ' qld__banner__heading__wrapper';
                    } else {
                        $heading_dark = ' qld__banner__heading--opaque';
                        $heading_light = ' qld__banner__heading--opaque';
                        $heading_margin = '';
                    }
                    if(!empty($primary_heading)) { 
                        ?>
                        <h1 class="<?php echo esc_attr($heading_margin); ?>">
                        <span class="qld__banner__heading <?php echo esc_attr($heading_dark); ?>"><?php echo esc_html($primary_heading);?></span>
                        <?php if(!empty($secondary_heading)) { ?>
                        <span class="qld__banner__heading <?php echo esc_attr($heading_light); ?>"><?php echo esc_html($secondary_heading); ?></span>
                        <?php } ?>
                        </h1>
                    <?php }
                    if(!empty($secondary_heading) && empty($primary_heading)){ ?>
                        <h1 class="<?php echo esc_attr($heading_margin); ?>">
                        <span class="qld__banner__heading <?php echo esc_attr($heading_light); ?>"><?php echo esc_html($secondary_heading); ?></span>
                        </h1>
                    <?php } ?>

                       <!--@@ Content @@-->
                    <?php if(!empty($content)){ ?>
                    
                    <div class="qld__banner__content--body qld__abstract"><?php echo esc_html($content); ?></div>
                    <?php } ?>

                    <!--@@ CTA Buttons @@-->
                    <?php if($cta == 'button'){ ?>
                        <ul class="qld__banner__content--cta qld__link-list">
                        <?php
                        if(!empty($pbutton_link)){ 
                        $plink_url = $pbutton_link['url'];
                        $plink_title = $pbutton_link['title'];
                        $plink_target = $pbutton_link['target'] ? $pbutton_link['target'] : '_self'; ?>
                        <li class="qld__banner__buttons">
                            <a href="<?php echo esc_url($plink_url) ?>" target="<?php echo esc_attr($plink_target) ?>" class="qld__btn qld__btn--primary">
                                <?php if ($pbutton_text) {
                                    echo esc_attr($pbutton_text);
                                } else {
                                    echo esc_attr($plink_title);
                                } ?>
                            </a>
                        </li>
                        <?php } 
                        if(!empty($sbutton_link)){
                        $slink_url = $sbutton_link['url'];
                        $slink_title = $sbutton_link['title'];
                        $slink_target = $sbutton_link['target'] ? $sbutton_link['target'] : '_self'; ?>
                        <li class="qld__banner__buttons">
                            <a href="<?php echo esc_url($slink_url) ?>" target="<?php echo esc_attr($slink_target) ?>" class="qld__btn qld__btn--secondary">
                                <?php if ($sbutton_text) {
                                    echo esc_attr($sbutton_text);
                                } else {
                                    echo esc_attr($slink_title);
                                } ?>
                            </a>
                        </li>
                        <?php }    ?>
                    </ul>

                    <?php } ?>
                    

                     <!--@@ CTA Link List @@-->
                    
                </div>
            </div>
            
            <!--@@ Icon tile nav @@-->
                <div class="qld__banner__nav ">
                    <nav class="
                        qld__tile-nav 
                         
                         
                        qld__tile-nav--alt-dark
                    ">
                        <ul class="qld__tile-nav__list"> 
                            <li class="qld__tile-nav__item"><i class="fal fa-question-circle"></i><a href="#" class="qld__tile-nav__link">Brand</a></li>
                            <li class="qld__tile-nav__item"><i class="fal fa-stethoscope"></i><a href="#" class="qld__tile-nav__link">Content</a></li>
                            <li class="qld__tile-nav__item"><i class="fal fa-heart"></i><a href="#" class="qld__tile-nav__link">Components</a></li>
                        </ul>
                    </nav>
                </div>

        </div>
    </div>
</section>

