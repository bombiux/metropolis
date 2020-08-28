<?php

add_theme_support('post-thumbnails');

function this_menu() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'this')
	));
}

add_action('init', 'this_menu');
