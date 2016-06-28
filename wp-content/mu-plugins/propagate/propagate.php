<?php
/*
Plugin Name: (MU) Propagate
Plugin URI: https://www.3.7designs.co
Description: Propagate custom functionality
Version: 1.0
Author: 3.7 DESIGNS
Author URI: http://www.3.7designs.co
Text Domain: propagate_37
Domain Path: /languages
*/

if( !defined( 'PROP_MU_VER' ) ) {

    define( 'PROP_ME_VER', '1.0' );

}

if( !defined( 'PROP_MU_URL' ) ) {

    define( 'PROP_MU_URL', plugin_dir_URL( __FILE__ ) );

}

if( !defined( 'PROP_MU_DIR' ) ) {

    define( 'PROP_MU_DIR', plugin_dir_path( __FILE__ ) );

}

do_action( 'prop_mu_before_load' );

apply_filters( 'prop_mu_includes', $prop_mu_includes = array(
    'inc/assets.php'
) );

foreach ( $prop_mu_includes as $file ) {

    if( !$filepath = locate_template( $file ) ) {
        trigger_error( sprintf( __( 'Error locating %s for inclusion', 'three_seven' ), $file ), E_USER_ERROR );
    }

    require_once $filepath;
}

unset( $file, $filepath );

do_action( 'prop_mu_after_load' );
