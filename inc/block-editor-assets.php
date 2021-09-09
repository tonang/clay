<?php 
/**
* Enqueue all gutenberg scripts on block editor assets
* @since 1.0.0
**/
function clay_block_editor_assets(){
	wp_enqueue_script(
		'clay-extend-gutenberg',
		CLAY_THEME_URL . '/assets/js/extend-gutenberg.js',
		array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'),
		filemtime( CLAY_THEME_PATH . '/assets/js/extend-gutenberg.js'),
		true
	);

	wp_enqueue_script( 
		'clay-theme-editor', 
		CLAY_THEME_URL . '/assets/js/editor.js',
		array('wp-blocks', 'wp-dom'),
		filemtime( CLAY_THEME_PATH . '/assets/js/editor.js' ), 
		true
	);

	
}
add_action( 'enqueue_block_editor_assets', 'clay_block_editor_assets' );