<?php
/**
 * Plugin name: Modification of robots.txt
 * Version:     1.0
 */

/**
 * Modify robots.txt for main site and subdomains
 *
 * @param $output
 * @param $public
 *
 * @return string
 */
function fbn_custom_robots( $output, $public ) {
	$site_id = get_current_blog_id();
	if ( $site_id == 4 ) {
		$output .= "Disallow: /respiratory-resources\n";
		$output .= "Disallow: /resources/respiratory/*\n";
		$output .= "Disallow: /resources/metabolism/*\n";
		$output .= "Disallow: /resources/sex-and-fertility/*\n";
		$output .= "Disallow: /resources/cardiovascular/*\n";
		$output .= "Disallow: /resources/pain-psychosocial/*\n";

	} 
	return $output;
}

add_filter( 'robots_txt', 'fbn_custom_robots', 20, 2 );