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
    $anchor = 'id='. esc_attr($block['anchor']);
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($hero_image)) {
    $className .= ' qld__banner--has-hero';
}
if (!empty($bg_color)) {
    $className .= ' qld__banner--' . $bg_color;
}
if( !empty($breadcrumbs) && $breadcrumbs == 'yes'){
    $className .= ' qld__banner--breadcrumbs';
} 
// if( !empty($cta) && $cta == 'icon-tile') {
//     $className .= ' qld__banner--nav';
// }

// Background image //
if (!empty($bg_type) && $bg_type == 'image'){
    if (!empty($desktop_img)){
        $img_url = $desktop_img['url'];
        $bg = 'background-image: url(' . $img_url . ')'; 
    }
}
?>

<!--@@ Banner @@-->
<section <?php echo esc_attr($anchor); ?> class="qld__banner qld__banner__advanced <?php echo esc_attr($className); ?>"
    style="<?php if(!empty($bg)) echo esc_attr($bg);?>">

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
                
                <?php if (!empty($hero_image)) {  
                    $hero_url = $hero_image['url']; ?>
                    <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5 mobile-hide qld__banner__hero--<?php echo esc_attr($hero_image_display); ?>">
                        <div class="qld__banner__image qld__banner__image--mobile-hide" style="background-image: url('<?php echo $hero_url; ?>');"></div>
                    </div>
                        <?php } ?>
                        <?php if (!empty($bg_type) && $bg_type == 'image') { 
                            if (!empty($mobile_img['url'])){
                                $mobile_url = $mobile_img['url']; ?>
                                <div class="qld__banner__hero col-xs-12 col-md-6 col-lg-5 desktop-hide qld__banner__hero--<?php echo esc_attr($hero_image_display); ?>">

                                <div class="qld__banner__image qld__banner__image--background qld__banner__image--desktop-hide" style="background-image: url('<?php echo $mobile_url; ?>')"></div>
                            </div>
                            <?php }} ?>
                        
                    
                
                <div class="qld__banner__content qld__banner-advanced-content col-xs-12 col-md-6 col-lg-7" >
        
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
                        
                        <!-- Primary button -->
                        <li class="qld__banner__buttons">
                            <a href="<?php echo esc_url($plink_url) ?>" target="<?php echo esc_attr($plink_target) ?>" class="qld__btn qld__btn--primary">
                                <?php if ($pbutton_text) {
                                    echo esc_attr($pbutton_text);
                                } else {
                                    echo esc_attr($plink_title);
                                } ?>
                            </a>
                        </li>
                        <!-- End primary button  -->

                        <!-- Secondary button -->
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
                        <!-- End secondary button -->
                        <?php }    ?>
                    </ul>
                    <!-- end CTA buttons -->

                    <!--@@ CTA Link List @@-->
                    <?php } elseif ($cta == 'link-list' ) { ?>
                        <ul class="qld__card-list qld__card-list--matchheight qld__banner__card-list">
                            <?php 
                            $link_list_bg = get_field('link_list_background');
                            if (!empty($link_list_bg)){
                                $bg_link_color = ' qld__card--' . $link_list_bg;
                            } ?>
                            <?php if (have_rows('link_list_item')) :
                                while (have_rows('link_list_item')) : the_row(); 
                                $item_title = get_sub_field('link_title');
                                $item_link = get_sub_field('item_link');
                                if(!empty($item_link)){
                                    $ilink_url = $item_link['url'];
                                    $ilink_target = $item_link['target'] ? $item_link['target'] : '_self'; 
                                    $ilink_title = $item_link['title'];
                                } ?>

                                <!-- Individual link list items -->
                                <li class="col-xs-12">
                                    <div class="qld__card qld__card__action qld__card__arrow <?php echo esc_attr($bg_link_color); ?>">
                                        <div class="qld__card__inner">
                                            <div class="qld__card__content">
                                                <h2 class="qld__card__title">
                                                    <a href="<?php echo esc_url($ilink_url); ?>" class="qld__card--clickable__link" target="<?php echo esc_attr($ilink_target); ?>"><?php if (!empty($item_title)){
                                                        echo $item_title; 
                                                    } else {
                                                        echo $ilink_title;
                                                    }
                                                    ?></a>
                                                    <span class="material-icons qld-material-icons md-dark md-24">east</span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End of individual link list items -->
                                <?php endwhile;
                                endif; ?>
                        </ul>
                  
                    <?php } ?>
                    <!--@@ End of CTA Link List @@-->

                </div>
            </div>
            
            <!--@@ Icon tile nav @@-->
            <?php if ( $cta == 'icon-tile') { 
                $tile_background = get_field('icon_tile_background_colour');
                if (!empty($tile_background)){
                    $color = ' qld__tile-nav--'. $tile_background;
                }
                ?>
                <div class="qld__banner__nav ">
                    <nav class="qld__tile-nav <?php echo esc_attr($color); ?>">
                        <ul class="qld__tile-nav__list"> 
                        <?php if (have_rows('icon_tile')) :
                            while (have_rows('icon_tile')) : the_row(); 
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link'); 
                            if(!empty($link)){
                                $link_url = $link['url'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; 
                                $link_title = $link['title'];
                            } ?>

                            <!-- Individual nav list items -->
                            <li class="qld__tile-nav__item">
                                <?php if (!empty($icon)) : ?>
                                <i class="fal <?php echo esc_attr($icon); ?>"></i><?php endif; ?>
                                <a href="<?php echo esc_html($link_url); ?>" class="qld__tile-nav__link" target="<?php echo esc_attr($link_target) ?>"><?php if (!empty($title)){
                                    echo $title;
                                } else {
                                    echo $link_title;
                                 } ?></a>
                            </li>
                            <!--  End of individual nav list items -->
                            <?php
                            endwhile;
                            endif; ?>
                        </ul>
                    </nav>
                    
                </div>
            <?php } ?>
            <!--@@ End of icon tile nav @@-->

        </div>
    </div>
</section>

