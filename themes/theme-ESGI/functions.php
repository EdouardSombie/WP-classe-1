<?php

add_action( 'after_setup_theme', 'esgi_setup_theme', 0);
function esgi_setup_theme(){
	add_theme_support( 'custom-logo' );

	/* Enregistrement des emplacements de menu */
	register_nav_menus( array(
	    	'main_menu' => 'Menu principal',
	    	'footer_menu'  => 'Menu du footer',
		) );
}

add_action( 'wp_enqueue_scripts', 'esgi_enqueue_assets', 1);
function esgi_enqueue_assets(){
	wp_enqueue_style('main', get_stylesheet_uri());
}





























function mytheme_register_nav_menu(){
		
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );