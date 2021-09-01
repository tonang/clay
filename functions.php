<?php 
/**
* Functions and definitions
* 
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Clay
* @since 1.0.0
*/

/**
* The theme version.
* 
* @since 1.0.0
*/
define( 'CLAY_VERSION', wp_get_theme()->get( 'Version' ) );

/* Check if the WordPress version is 5.5 or higher, and if the PHP version is at least 7.2. If not do not activate */
if ( version_compare( $GLOBALS['wp_version'], '5.5', '<' ) || version_compare( PHP_VERSION_ID, '70200', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';

    return;
}

// Theme support.
require_once 'classes/class-theme-support.php';