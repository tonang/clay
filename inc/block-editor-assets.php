<?php 
/**
* Enqueue all gutenberg scripts on block editor assets
* @since 1.0.0
**/
function clayi_block_editor_assets(){
	wp_enqueue_script(
		'clayi-extend-gutenberg',
		clayi_THEME_URL . '/assets/js/extend-gutenberg.js',
		array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'),
		filemtime( clayi_THEME_PATH . '/assets/js/extend-gutenberg.js'),
		true
	);

	wp_enqueue_script( 
		'clayi-theme-editor', 
		clayi_THEME_URL . '/assets/js/editor.js',
		array('wp-blocks', 'wp-dom'),
		filemtime( clayi_THEME_PATH . '/assets/js/editor.js' ), 
		true
	);

	
}
add_action( 'enqueue_block_editor_assets', 'clayi_block_editor_assets' );