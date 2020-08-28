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
	wp_enqueue_style('Font-Awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.0.6');
	wp_enqueue_style('style', get_stylesheet_uri(), array('Google-Fonts', 'bootstrap', 'Font-Awesome'), '1.0.0');
	
	/* wp_enqueue_script('feather', get_template_directory_uri() . '/js/feather.js', array(), '1.0.10', true);*/
	wp_enqueue_script('core', get_template_directory_uri() . '/js/pushy.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0'); 
}

add_action('wp_enqueue_scripts', 'this_scripts_styles');
