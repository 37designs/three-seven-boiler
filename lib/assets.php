<?php

// Register Script
function theme_assets() {

    // Scripts
	wp_register_script( 'global', get_template_directory_uri() . '/assets/js/global.js', array( 'jquery' ), '1', false );
	wp_register_script( 'mmenu', get_template_directory_uri() . '/assets/js/jquery.mmenu.all.min.js', array( 'jquery' ), '5.6.3', false );
	wp_register_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific.min.js', array( 'jquery' ), '5.6.3', false );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'mmenu' );
	wp_enqueue_script( 'magnific-popup' );
	wp_enqueue_script( 'global' );

    // Styles
    wp_enqueue_style( 'styles', get_stylesheet_uri() );
    
    wp_register_style( '37boiler', get_template_directory_uri() . '/assets/css/37boiler.css', '1' );
	wp_enqueue_style( '37boiler' );
    
	wp_register_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific.css', '1' );
	wp_enqueue_style( 'magnific-popup' );
	
	wp_register_style( 'mmenu', get_template_directory_uri() . '/assets/css/jquery.mmenu.all.css' );
	wp_enqueue_style( 'mmenu' );
	
	// Font Awesome
	// wp_register_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	// wp_enqueue_style( 'font-awesome' );
	
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'theme_assets' );