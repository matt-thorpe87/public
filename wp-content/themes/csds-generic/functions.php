<?php

function themeFiles()
{
    wp_enqueue_style('lato-font', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/fb2f2d4cd6.js');
    wp_enqueue_script('qh_base_script_handlebars', content_url('/themes/csds-generic/qh-design-system/externals/handlebars.min-v4.7.6.js'));
    wp_enqueue_script('qh_base_script_componentPreview', content_url('/themes/csds-generic/qh-design-system/externals/componentPreview.js'));
    wp_enqueue_script('qh_base_script_dsComponentLoader', content_url('/themes/csds-generic/qh-design-system/externals/dsComponentLoader.js'));
    wp_enqueue_script('qh_base_script_helper', content_url('/themes/csds-generic/qh-design-system/js/helpers.js'));
    wp_enqueue_style('leaflet_styles', '//unpkg.com/leaflet@1.7.1/dist/leaflet.css');
    wp_enqueue_script('leaflet_script', '//unpkg.com/leaflet@1.7.1/dist/leaflet.js');
    wp_enqueue_script('leaflet_esri_script', '//unpkg.com/esri-leaflet@3.0.1/dist/esri-leaflet.js');
    wp_enqueue_script('leaflet_esri_vector', '//unpkg.com/esri-leaflet-vector@3.0.0/dist/esri-leaflet-vector.js');
    wp_enqueue_script('qh_base_script_runtime', content_url('/themes/csds-generic/qh-design-system/js/runtime.js'));
    wp_enqueue_script('qh_base_main_core_script', content_url('/themes/csds-generic/qh-design-system/externals/main-core.js'));
    wp_enqueue_style('qh_base_main_core_style', content_url('/themes/csds-generic/qh-design-system/externals/main-core.css'));
    wp_enqueue_script('qh_base_script_main', content_url('/themes/csds-generic/qh-design-system/js/main.js'));
    wp_enqueue_style('qh_base_style', content_url('/themes/csds-generic/qh-design-system/main.css'));
    wp_enqueue_style('qh_base_styles', content_url('/themes/csds-generic/qh-design-system/qh-theme.css'));
    wp_enqueue_style('custom_theme_style', get_theme_file_uri('/styles/customThemeStyles.css'));
}
add_action('wp_enqueue_scripts', 'themeFiles');


/* Register menu locations */
if (!function_exists('register_theme_nav')) {

    function register_theme_nav()
    {
        register_nav_menus(
            array(
                'main_nav_menu' => __('Main nav menu', 'text_domain'),
                'top_right_nav_menu' => __('Top right menu', 'text_domain'),
                'footer_column_one' => __('Footer column one', 'text_domain'),
                'footer_column_two' => __('Footer column two', 'text_domain'),
                'footer_column_three' => __('Footer column three', 'text_domain'),
                'side_menu' => __('Side menu', 'text_domain'),
                'mega_menu' => __('Mega menu', 'text_domain')

            )
        );
    }
    add_action('init', 'register_theme_nav');
}
// end register menu locations


/* to add a QH class on the nav menu's anchor tag */
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


/* To add a class on the side navigation menu's <a> tag  */

function add_menu_link_sidenav($atts, $item, $args)
{
    $atts['class'] = 'qld__sidenav__link qld__main-nav__item-home qld__main-nav__item-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_sidenav', 10, 3);


/* To register a Walker class for the navigation */

if (!function_exists('register_navwalker')):
    function register_navwalker()
    {
        require ('inc/navwalker.php');
    }
endif;

add_action('after_setup_theme', 'register_navwalker');



function theme_features()
{
    add_theme_support('title-tag'); /* dynamically updates the title tag of evey page */
    add_theme_support('post-thumbnails'); /* will enable featured image to WP default posts and pages */
    add_theme_support('music');
    add_image_size('featured_image', 500, 400, array('center', 'center')); /* $name, $width, $height, $crop */
    add_image_size('pgBannerImgSize', 400, 400, true); /* $name, $width, $height, $crop */
    add_image_size('heroBannerImgSize', 400, 800, true); /* $name, $width, $height, $crop */
    require ('inc/breadcrumbs.php');
}

add_action('after_setup_theme', 'theme_features');


function theme_assets()
{
    wp_enqueue_style('theme-stylesheet', get_template_directory_uri() . '/dist/assets/css/customThemeStyles.css', array(), '1.0.0', 'all');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_assets');

// Register Advanced Custom Field blocks
function register_acf_blocks()
{
    register_block_type(__DIR__ . '/template_parts/blocks/callout_with_image');
    register_block_type(__DIR__ . '/template_parts/blocks/callout');
    register_block_type(__DIR__ . '/template_parts/blocks/accordion');
    register_block_type(__DIR__ . '/template_parts/blocks/banner-basic');
    register_block_type(__DIR__ . '/template_parts/blocks/banner-intermediate');
    register_block_type(__DIR__ . '/template_parts/blocks/banner-advanced');
    register_block_type(__DIR__ . '/template_parts/blocks/button');
    register_block_type(__DIR__ . '/template_parts/blocks/body');
    register_block_type(__DIR__ . '/template_parts/blocks/card');
    register_block_type(__DIR__ . '/template_parts/blocks/card-single-action');
    register_block_type(__DIR__ . '/template_parts/blocks/icon-list');
    register_block_type(__DIR__ . '/template_parts/blocks/link-list');
    register_block_type(__DIR__ . '/template_parts/blocks/multi-column');
    register_block_type(__DIR__ . '/template_parts/blocks/global-alert');
    register_block_type(__DIR__ . '/template_parts/blocks/icon-box');
    register_block_type(__DIR__ . '/template_parts/blocks/image-group');
    register_block_type(__DIR__ . '/template_parts/blocks/page-alert');
    register_block_type(__DIR__ . '/template_parts/blocks/video');
    register_block_type(__DIR__ . '/template_parts/blocks/video-cards');
    register_block_type(__DIR__ . '/template_parts/blocks/posts-carousel');
    register_block_type(__DIR__ . '/template_parts/blocks/carousel');
    register_block_type(__DIR__ . '/template_parts/blocks/contact-form');
    register_block_type(__DIR__ . '/template_parts/blocks/posts-card');
    register_block_type(__DIR__ . '/template_parts/blocks/download-block');
}

if (function_exists('register_acf_blocks')) {
    add_action('init', 'register_acf_blocks');
}
// end function Advanced Custom Fields blocks


// Start function add QH Theme category to block category
function example_block_category($categories, $post)
{
    $qh_category = array(
        'slug' => 'qh-design',
        'title' => 'QH Design Components',
    );
    $categories_sorted = array();
    $categories_sorted[0] = $qh_category;

    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }
    return $categories_sorted;
}
add_filter('block_categories_all', 'example_block_category', 10, 2);
// end function add QH Theme category to block category


// Function to show which template page is loaded  - delete before pushing live
function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
add_action( 'wp_footer', 'meks_which_template_is_loaded' );
// end function template page loaded


function acf_load_field_choices( $field ) {
    
    // Reset choices
    $field['choices'] = get_post_types();
    // Return the field
    return $field;
    
}
add_filter('acf/load_field/name=post_type_for_posts_card', 'acf_load_field_choices');
add_filter('acf/load_field/name=post_type_for_posts_carousel', 'acf_load_field_choices');


// Search Filter function
function ip_search_filter_item_class($passed_string = false) {
	$category = (isset($_GET['cat']) ? $_GET['cat'] : false);

	if($passed_string == $category) {
		echo 'current';
	}
}

function ip_search_filter($args) {
	// Check we're not in admin area
	if(!is_admin()) {
		// Check if this is the main search query
		if( $args->is_search()) {
			// Check if $_GET['post_type'] is set
			if(isset($_GET['cat']) && $_GET['cat'] != '') {
				// Filter it just to be safe
				$category = sanitize_text_field($_GET['cat']);

				// Set the post type
				$args->set( 'cat' , $category );
			}
		}
	}
	// Return query
	return $args;
}
add_filter('pre_get_posts', 'ip_search_filter');
// end search filter function

