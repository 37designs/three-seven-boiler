<?php
function threeseven_theme_assets() {

	// Setup global scripts
	wp_enqueue_script( 'jquery' );

	apply_filters( 'threeseven_global_scripts', $global_scripts = array(
		'global'	=>	array(
			'handle'	=>	'global',
			'uri'		=>	get_template_directory_uri() . '/assets/js/global.js',
			'deps'		=>	array( 'jquery' ),
			'ver'		=>	THEME_VER,
			'footer'	=>	false
		),
		'mmenu'		=>	array(
			'handle'	=>	'mmenu',
			'uri'		=>	get_template_directory_uri() . '/assets/js/jquery.mmenu.all.min.js',
			'deps'		=>	array( 'jquery' ),
			'ver'		=>	THEME_VER,
			'footer'	=>	false
		),
		'magnific-popup'	=>	array(
			'handle'	=>	'magnific-popup',
			'uri'		=>	get_template_directory_uri() . '/assets/js/magnific.min.js',
			'deps'		=>	array( 'jquery' ),
			'ver'		=>	THEME_VER,
			'footer'	=>	false,
		),
	) );

	three_seven_enqueue_scripts( $global_scripts );

	// Setup global styles
	apply_filters( 'threeseven_global_styles', $global_styles = array(
		'boiler'	=>	array(
			'handle'	=>	'boiler',
			'uri'		=>	get_template_directory_uri() . '/assets/css/37boiler.css',
			'ver'		=>	THEME_VER,
		),
		'global'	=>	array(
			'handle'	=>	'global',
			'uri'		=>	get_stylesheet_uri(),
			'ver'		=>	THEME_VER,
		),
		'magnific'	=>	array(
			'handle'	=>	'magnific-popup',
			'uri'		=>	get_template_directory_uri() . '/access/css/magnific.css',
			'ver'		=>	THEME_VER
		),
		'mmenu'		=>	array(
			'handle'	=>	'mmenu',
			'uri'		=>	get_template_directory_uri() . '/acces/css/jquery.mmenu.all.css',
			'ver'		=>	THEME_VER
		),
		'fawesome'	=>	array(
			'handle'	=>	'fontawesome',
			'uri'		=>	'//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css',
			'ver'		=>	THEME_VER,
		),
	) );

	threeseven_enqueue_styles( $global_styles );

}
add_action( 'wp_enqueue_scripts', 'threeseven_theme_assets', 0 );

function three_seven_enqueue_scripts( $scripts ) {

	foreach( $scripts as $script ) {

		// Register the script so we can conditionally use it elsewhere
		wp_register_script( $script[ 'handle' ], $script[ 'uri' ], $scripts[ 'deps' ], $script[ 'ver' ], $script[ 'footer' ] );

		// These are global, so enqueue
		wp_enqueue_script( $script[ 'handle' ] );

	}

}

function three_seven_enqueue_styles( $styles ) {

	foreach( $styles as $style ) {

		// Register the stle so we can conditionally load / unload
		wp_register_style( $style[ 'handle' ], $style[ 'uri' ], $script[ 'ver' ] );

		// These are global so enqueue
		wp_enqueue_style( $style[ 'handle' ] );

	}

}
