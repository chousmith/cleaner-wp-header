<?php
/**
 * @package Cleaner WP Header
 * @version 0.1.1
 */
/*
Plugin Name: Cleaner WP Header
Plugin URI: http://wordpress.org
Description: Blindly removes some default tags that WordPress puts in the header area, like feed_links, rsd_link, shortlink, wp_generator, rel_canonical, etc based off https://scotch.io/?p=1062
Author: alex chousmith
Version: 0.1.1
Author URI: http://www.ninthlink.com
*/

function cleaner_wp_header_please() {
	// Display the links to the extra feeds such as category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Display the links to the general feeds: Post and Comment Feed
	remove_action( 'wp_head', 'feed_links', 2 );
	// Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Display the link to the Windows Live Writer manifest file.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// prev link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Display relational links for the posts adjacent to the current post.
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	// Display the XHTML generator that is generated on the wp_head hook, WP version
	remove_action( 'wp_head', 'wp_generator' );
	// rel-canonical tag
	remove_action( 'wp_head', 'rel_canonical' );
	// default wp shortlink meta tag
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'wp_head', 'cleaner_wp_header_please', 0 );
?>
