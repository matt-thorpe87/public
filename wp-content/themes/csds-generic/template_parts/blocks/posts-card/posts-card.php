<?php
/**
 * Posts Card Block template.
 *
 * @param array $block The block settings and attributes.
 */


//  Load values and assign defaults
$heading = get_field('posts_card_header');
$subheading = get_field('posts_card_subheading');
$color_settings = get_field('card_colour');
$number_posts = get_field('number_of_posts');
$post_type = get_field('post_type_for_posts_card');
$order = get_field('posts_card_order');
$cat = get_field('posts_category');
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and image values.
$className = 'qld__card qld__card__action';
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


// get posts //
$posts = new wp_query(
    array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $number_posts,
        'orderby' => $order,
        'order' => 'desc',
        'cat' => $cat
    )
);
?>

<!-- posts card -->
<section class="qld__card--wrapper qld__card--wrapper-bg-colour" <?php echo esc_attr($anchor); ?>>
    <div class="container-fluid">
        
        <?php if (!empty($heading)) { ?>
        <div class="col-xs-12 qld__posts_card_header">
            <h2> <?php echo esc_attr($heading); ?> </h2> <?php
            } ?>
            <?php if (!empty($subheading)) { ?>
            <p> <?php   echo esc_attr($subheading); ?> </p> </div><?php 
            } ?>
        
        <div class="row">
            <ul class="qld__card-list qld__card-list--matchheight  <?php if(!empty($containerClassName)) : echo esc_attr($containerClassName); endif ?>">
                <?php if ($posts->have_posts()) :
                 while($posts->have_posts()) : $posts->the_post();
                ?>
                <?php 
                    $post_ID = get_the_ID();
                    $post_title = get_the_title();
                    $post_exerpt = get_the_excerpt();
                    $post_featured_image = wp_get_attachment_image(get_post_thumbnail_id($post_ID), 'single-post-thumbnail');
                    $alt_text_image = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    $post_link = get_post_permalink();
                ?>
                <li class="col-sm-12 col-md-6 col-lg-4">
                    <!-- <a class="qld__posts__card__link" href="<?php echo esc_url($post_link) ?>"> -->

                        <div class="<?php echo esc_attr($className); ?>">

                                <?php if (!empty($post_featured_image)) { 
                                    $feature_img = get_the_post_thumbnail_url();
                                 } 
                                 elseif (!empty(z_taxonomy_image_url())){
                                    $feature_img = z_taxonomy_image_url();
                                }
                                else {
                                    $feature_img = '/wp-content/themes/csds-generic/dist/assets/images/img/header-logo-qgov--dark.svg';
                                } ?>
                                    <a href="<?php echo esc_url($post_link) ?>">
                                        <div class="qld__responsive-media-img--bg"
                                            style="background-image: url(<?php echo $feature_img;  ?>">
                                        </div>
                                    </a>

                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <h3 class="qld__card__title">  
                                            <?php if(!empty($post_title)){
                                                ?><a href="<?php echo esc_url($post_link) ?>">
                                                <?php echo $post_title;
                                            } ?></a>
                                        </h3>
                                    </div>
                                    <div class="qld__card__footer">
                                        <hr class="qld__horizontal-rule">
                                        <div class="qld__card__footer-inner">
                                            <ul class="qld__card__tags qld__tag-list">
                                                <?php
                                                $id = get_the_ID();
                                                $postCategory = get_the_category($id);
                                                foreach ($postCategory as $postCat):
                                                    ?>
                                                    <li>
                                                        <a class="qld__tag qld__tag--link" tabindex="0"
                                                            href="<?php echo get_category_link($postCat->cat_ID); ?>">
                                                            <?php echo $postCat->name; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </a> -->
                </li>   
                <?php endwhile;
                endif;
                ?>
            </ul>
        </div>    
    </div>             
</section>

