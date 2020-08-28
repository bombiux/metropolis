<?php

add_theme_support('post-thumbnails');

function this_menu() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'this')
	));
}

add_action('init', 'this_menu');

function this_scripts_styles() {
	
	wp_enqueue_style('Google-Fonts', 'https://fonts.googleapis.com/css?family=Shadows+Into+Light%7CLibre+Franklin:200,300,400,600,700', array(), '1.0.0');
	wp_enqueue_style('Font'', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '1.0.0');
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '0.0.6');
	wp_enqueue_style('pushyCSS', get_template_directory_uri() . '/css/pushy.css', array(), '1.0.10');
	wp_enqueue_style('style', get_stylesheet_uri(), array('Google-Fonts', 'reset', 'pushyCSS'), '1.0.12');
	
	wp_enqueue_script('feather', get_template_directory_uri() . '/js/feather.js', array(), '1.0.10', true);
	wp_enqueue_script('pushyJS', get_template_directory_uri() . '/js/pushy.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('feather','jquery','pushyJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'this_scripts_styles');
