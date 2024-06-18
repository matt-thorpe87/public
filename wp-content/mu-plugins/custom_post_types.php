<?php

/* function to create custom post types with the parameters*/
// (Parameters: 1st - name of the custom post type, 2nd - array of different options to describe the custom post type)
/* use WordPress Dashicons to access icons to use on custom posts: https://developer.wordpress.org/resource/dashicons/#calculator */


function theme_post_types() {

  //Topics Post Type
  register_post_type('topics', array(
    'supports'=> array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'category'),
	'template' => array(),
    'rewrite' => array('slug' => 'topics'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Topics',
	  'add_new' => 'Add New Topic',
      'add_new_item' => 'Add New Topic',
      'edit_item' => 'Edit Topic',
	  'view_item' => 'View Topic',
	  'view_items' => 'View Topics',
      'all_items' => 'All Topics',
      'singular_name' => 'Topic',
      'plural_name' => 'Topics',
	  'attributes' => 'Topic Attributes'
    ),
    'menu_icon' => 'dashicons-lightbulb'
  ));

  //Resources Post Type
  register_post_type('resources', array(
    'supports'=> array('title', 'editor', 'page-attributes', 'category', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'resources'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Resources',
	  'add_new' => 'Add New Resource',
      'add_new_item' => 'Add New Resource',
      'edit_item' => 'Edit Resource',
      'all_items' => 'All Resources',
	  'view_item' => 'View Resource',
	  'view_items' => 'View Resources',
      'singular_name' => 'Resource',
	  'plural_name' => 'Resources',
	  'attributes' => 'Resource Attributes'

    ),
    'menu_icon' => 'dashicons-open-folder'
  ));


}

add_action('init', 'theme_post_types');

function enable_categories_theme_post_types() {
    register_taxonomy_for_object_type('category', 'topics');
    register_taxonomy_for_object_type('category', 'resources');
}

add_action('init', 'enable_categories_theme_post_types');


/* ================== */
/** Hero Banner **/
/* ================== */

// function cptui_register_my_cpts() {

// 	/**
// 	 * Post Type: hero banners.
// 	 */

// 	$labels = [
// 		"name" => esc_html__( "Hero Banners", "custom-post-type-ui" ),
// 		"singular_name" => esc_html__( "hero banner", "custom-post-type-ui" ),
// 		"edit_item" => esc_html__( "Edit Hero Banner", "custom-post-type-ui" ),
// 		"new_item" => esc_html__( "New Hero Banner", "custom-post-type-ui" ),
// 		"view_item" => esc_html__( "View Hero Banner", "custom-post-type-ui" ),
// 	];

// 	$args = [
// 		"label" => esc_html__( "Hero Banners", "custom-post-type-ui" ),
// 		"labels" => $labels,
// 		"description" => "This post is intended to update the Hero Banner on the home page.",
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"show_ui" => true,
// 		"show_in_rest" => true,
// 		"rest_base" => "",
// 		"rest_controller_class" => "WP_REST_Posts_Controller",
// 		"rest_namespace" => "wp/v2",
// 		"has_archive" => false,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"delete_with_user" => false,
// 		"exclude_from_search" => false,
// 		"capability_type" => "post",
// 		"map_meta_cap" => true,
// 		"hierarchical" => false,
// 		"can_export" => false,
// 		"rewrite" => [ "slug" => "hero_banner", "with_front" => true ],
// 		"query_var" => true,
// 		"menu_icon" => "dashicons-images-alt2",
// 		"supports" => [ "title", "editor", "page-attributes" ],
// 		"show_in_graphql" => false,
// 	];

// 	register_post_type( "hero_banner", $args );

// }


function cptui_register_my_cpts_hero_banner() {

	/**
	 * Post Type: Hero Banners.
	 */

	$labels = [
		"name" => esc_html__( "Hero Banners", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Hero Banner", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Hero Banner", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Hero Banner", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Hero Banner", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Hero Banners", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "This post is intended to update the Hero Banner on the home page.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "hero_banner", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt2",
		"supports" => [ "title", "editor", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "hero_banner", $args );
}

add_action( 'init', 'cptui_register_my_cpts_hero_banner' );




?>
