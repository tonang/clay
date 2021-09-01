<?php 
/**
* Theme support
* 
* @package Clay
* @since 1.0.0
*/

namespace Clay;

/**
* Add theme support
* 
* @since 1.0.0
**/
class Theme_Support {

    /**
    * Constructor.
    * 
    * @since 1.0.0
    * @access public
    */
    public function __construct(){
        add_action( 'after_setup_theme', [ $this, 'action_setup' ] );
        add_action( 'after_setup_theme', [ $this, 'action_content_width' ] );
    }

    /**
    * Adds theme-supports.
    * 
    * @access public
    * @since 1.0.0
    * @return void
    */
    public function action_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        // Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
         add_theme_support( 'title-tag' );

		/*
		* Switch default core markup to output valid HTML5.
		* The comments block uses the markup from the comments template.
		*/
		add_theme_support(
			'html5',
			[
				'comment-form',
				'comment-list',
			]
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for align wide.
        add_theme_support( 'align-wide' );
        // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Enqueue editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'./assets/css/editor.css',
			)
		);
    }

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width Content width.
	 * @since 1.0.0
	 * @access public
	 */
    public function action_content_width() {
		// This variable is intended to be overruled from themes.
		// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = apply_filters( 'clay_content_width', 720 );
    }
}

new Theme_Support();