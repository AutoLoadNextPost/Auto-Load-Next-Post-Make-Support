<?php
/*
 * Support for Auto Load Next Post.
 */
function alnp_make_support() {
  add_theme_support('auto-load-next-post');
}
add_action('after_setup_theme', 'alnp_make_support');

/**
 * Enqueues stylesheet.
 */
function alnp_make_scripts() {
	// Make Theme stylesheet.
	wp_enqueue_style('ttfmake-main-style-css', get_template_directory_uri() . '/style.css');
	// Chile Theme stylesheet.
	wp_enqueue_style('alnp-make', get_stylesheet_directory_uri() . '/style.css', array('ttfmake-main-style-css'));
}
add_action('wp_enqueue_scripts', 'alnp_make_scripts');
