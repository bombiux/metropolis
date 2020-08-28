<?php

add_theme_support('post-thumbnails');

function this_menu() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'this')
	));
}

add_action('init', 'this_menu');

function this_scripts() {
	wp_enqueue_style('gFonts', 'https://fonts.googleapis.com/css?family=Shadows+Into+Light%7CLibre+Franklin:200,300,400,600,700', array(), '1.0.0');
	wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
	wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1');
	wp_enqueue_style('style', get_stylesheet_uri(), array('gFonts', 'bootstrap', 'fa'), '1.0.0');
	
	wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('core'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'this_scripts');
