<?php 
/**
* Enqueue all frontend file.
* 
* @since 1.0.0
*/
function clay_enqueue_styles(){
    wp_enqueue_style( 
        'clay-style',
        CLAY_THEME_STYLESHEET . '',
        CLAY_VERSION
    );

    wp_enqueue_style(
        'clay-main-style',
        CLAY_THEME_URL . '/assets/css/main.css',
        CLAY_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'clay_enqueue_styles' );
