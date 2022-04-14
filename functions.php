<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const GABINETE_VERSION = '0.0.2';

/* Enqueues necessary JS and CSS files */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'gabinete-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), GABINETE_VERSION );
});

// Registers custom post type 'orçamentos'
require get_stylesheet_directory() . '/inc/orcamentos.php';