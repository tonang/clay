<?php 
/**
* Functions and definitions
* 
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package clayii
* @since 1.0.0
*/

/**
* The theme version.
* 
* @since 1.0.0
*/
define( 'CLAYI_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'CLAYI_THEME_PATH', get_template_directory() );
define( 'CLAYI_THEME_URL', get_template_directory_uri() );
define( 'CLAYI_THEME_STYLESHEET', get_stylesheet_uri() );
define( 'CLAYI_THEME_IMAGE', CLAYI_THEME_URL . '/assets/images' );

/* Check if the WordPress version is 5.5 or higher, and if the PHP version is at least 7.2. If not do not activate */
if ( version_compare( $GLOBALS['wp_version'], '5.5', '<' ) || version_compare( PHP_VERSION_ID, '70200', '<' ) ) {
    require CLAYI_THEME_PATH . '/inc/back-compat.php';

    return;
}

// Theme support.
require_once 'classes/class-theme-support.php';

add_theme_support( 'editor-styles');
add_editor_style( 'assets/css/editor-style.css' );

// About page.
require_once 'classes/class-aboutpage.php';

// Block styles.
require_once 'inc/block-styles.php';

// Block patterns.
require_once 'inc/block-patterns.php';

// Block patterns - Header.
// require_once 'inc/block-patterns-header.php';


// Enqueue gutenberg JS files to back-end editor.
require_once 'inc/block-editor-assets.php';

// Frontend
require_once 'inc/frontend.php';