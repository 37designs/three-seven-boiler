<?php
/*
 * Title: The base functions file for the Three Seven Framework (Version 5.5)
 * Description: This file imports all the custom settings, assets and functionality we've built
 *
 */

/*
   ____              ____               ___      ___      ___      ___      ___     _  _      ___
  |__ /             |__  |     o O O   |   \    | __|    / __|    |_ _|    / __|   | \| |    / __|
   |_ \      _        / /     o        | |) |   | _|     \__ \     | |    | (_ |   | .` |    \__ \
  |___/    _(_)_    _/_/_    TS__[O]   |___/    |___|    |___/    |___|    \___|   |_|\_|    |___/
_|"""""| _|"""""| _|"""""|  {======| _|"""""| _|"""""| _|"""""| _|"""""| _|"""""| _|"""""| _|"""""|
"`-0-0-' "`-0-0-' "`-0-0-' ./o--000' "`-0-0-' "`-0-0-' "`-0-0-' "`-0-0-' "`-0-0-' "`-0-0-' "`-0-0-'

*/

if( !defined( 'THEME_VER' ) ) {

    define( 'THEME_VER', '1.0' );

}

apply_filters( 'threeseven_includes', $threeseven_includes = array(
    'inc/settings.php',             // Default settings
    'inc/shortcodes.php',           // Custom shortcodes go here
    'inc/assets.php',               // Load assets
    'inc/custom-functions.php',     // Any custom functions
    'inc/widgets.php',              // Custom widgets and widget areas
    'inc/comments.php',             // Custom comments
    'inc/custom-post-types.php'     // Custom post types / taxonomies
) );

foreach ( $threeseven_includes as $file ) {

    if( !$filepath = locate_template( $file ) ) {
        trigger_error( sprintf( __( 'Error locating %s for inclusion', 'three_seven' ), $file ), E_USER_ERROR );
    }

    require_once $filepath;
}

unset( $file, $filepath );
