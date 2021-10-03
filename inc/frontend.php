<?php 
/**
* Enqueue all frontend file.
* 
* @since 1.0.0
*/
function clayi_enqueue_styles(){
    wp_enqueue_style( 
        'clayi-style',
        CLAYI_THEME_STYLESHEET . '',
        CLAYI_VERSION
    );

	wp_enqueue_style( 
		'google-fonts',
		'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap', 
		null, 
		null 
	);

    wp_enqueue_style(
        'clayi-main-style',
        CLAYI_THEME_URL . '/assets/css/main.css',
        CLAYI_VERSION
    );

    // Enqueue bloat gutenberg theme
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'clayi_enqueue_styles' );
