<?php


/**
 * Remove WordPress junk markup.
 *
 */
function vm_remove_wp_clues () {
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	add_filter( 'the_generator', '__return_false' );
}

add_action( 'init', 'vm_remove_wp_clues' );


/**
 * Enable WordPress theme features.
 *
 */
function vm_set_theme_features () {
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'vm_set_theme_features' );