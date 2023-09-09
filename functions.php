<?php
add_action('wp_enqueue_scripts', 'linking_style');
add_action('after_setup_theme', 'theme_register');
add_filter( 'upload_mimes', 'extra_mime_types' );

function extra_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

function theme_register_nav_menu(){
	register_nav_menu('headerNav', 'Меню в header');
}

function theme_register(){
	register_nav_menu('headerNav', 'Меню в header');
	// Logo
	remove_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo');
	// Logo-end
}

function linking_style(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('roboto', get_template_directory_uri().'/assets/fonts/Roboto/stylesheet.css');
	wp_enqueue_style('gotham', get_template_directory_uri().'/assets/fonts/GothamPro/stylesheet.css');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
}