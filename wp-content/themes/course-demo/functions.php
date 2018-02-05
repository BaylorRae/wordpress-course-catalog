<?php

function theme_styles() {
	wp_enqueue_style( 'bootstrap-4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'course-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
