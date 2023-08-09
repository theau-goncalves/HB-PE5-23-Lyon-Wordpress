<?php

/**
 * Proper way to enqueue scripts and styles
 */
function myThemeScriptEnqueue() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/main.css' );
//	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'myThemeScriptEnqueue' );