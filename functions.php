<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu(){
	register_nav_menu('headerNav', 'Меню в header');

}

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('roboto', get_template_directory_uri().'/assets/fonts/Roboto/stylesheet.css');
	wp_enqueue_style('gotham', get_template_directory_uri().'/assets/fonts/GothamPro/stylesheet.css');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
	
}