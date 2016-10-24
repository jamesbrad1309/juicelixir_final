<?php
/*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());

/*
 *  INCLUDED FILES
 */

$file_includes = [
    'inc/theme-assets.php',       // Style and JS
    'inc/theme-setup.php',        // General theme setting
    'inc/acf-options.php',        // ACF Option page
    'inc/theme-shortcode.php'     // Theme Shortcode
];

foreach ($file_includes as $file) {
    if ( !$filePath = locate_template($file) ) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }

    require_once $filePath;
}

unset($file, $filePath);
 
?>