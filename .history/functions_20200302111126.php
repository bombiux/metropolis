<?php

add_theme_support('post-thumbnails');

function this_menu() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'this')
	));
}

add_action('init', 'this_menu');

function this_scripts() {
	wp_enqueue_style('Google-Fonts', 'https://fonts.googleapis.com/css?family=Shadows+Into+Light%7CLibre+Franklin:200,300,400,600,700', array(), '1.0.0');
	wp_enqueue_style('Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.3.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.0.6');
	wp_enqueue_style('style', get_stylesheet_uri(), array('Google-Fonts', 'bootstrap', 'Font-Awesome'), '1.0.0');
	
	wp_enqueue_script('core', get_template_directory_uri() . '/js/core.js', array(), '1.0.0', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('core'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'this_scripts');
