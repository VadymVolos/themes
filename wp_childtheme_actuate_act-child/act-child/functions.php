<?php
	
	/*
	*
	*	Actuate Child Theme
	*	------------------------------------------------
	*	These functions will override the parent theme
	*	functions.
	*
	*
	*/


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style('google-font-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic');
}

load_theme_textdomain( 'actuate', get_stylesheet_directory() . '/languages' );


//  remove google fonts
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
	wp_deregister_style( 'google-font-merriweather' );
	wp_deregister_style( 'google-font-oswald' );
}