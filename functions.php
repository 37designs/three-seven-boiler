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

$threeseven_includes = array(
    'lib/settings.php',             // Default settings
    'lib/shortcodes.php',           // Custom shortcodes go here
    'lib/assets.php',               // Load assets
    'lib/custom-functions.php',     // Any custom functions
    'lib/widgets.php',              // Custom widgets and widget areas
    'lib/comments.php',             // Custom comments
    'lib/custom-post-types.php'     // Custom post types / taxonomies
);

foreach ($threeseven_includes as $file) {

    if(!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'three_seven'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}

unset($file, $filepath);

?>
