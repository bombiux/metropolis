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
	
	wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
	wp_enqueue_script('migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', array('jquery'), '3.1.0');
	
	wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', true);
	wp_enqueue_script('uiToTop', 'https://cdn.jsdelivr.net/gh/sksmatt/UItoTop-jQuery-Plugin@master/js/jquery.ui.totop.min.js', array('jquery'), '1.4.1', true);
	wp_enqueue_script('rdNavbar', 'https://cdn.jsdelivr.net/gh/ZemezPlugins/rd-navbar@master/dist/js/jquery.rd-navbar.min.js', array('jquery'), '1.4.1', true);
	wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js', array('jquery'), '3.4.2', true);
	wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), '1.1.2', true);
	
	wp_enqueue_script('rdVideoPlayer', get_template_directory_uri() . '/js/plugins/rdVideoPlayer.js', array('jQuery'), '1.0.1');
	wp_enqueue_script('rdVideoPlayer', get_template_directory_uri() . '/js/plugins/rdVideoPlayer.js', array('jQuery'), '1.0.1');
	
}

add_action('wp_enqueue_scripts', 'this_scripts');
