<?php 
/**
* Block patterns 
* 
* @package Clay
* @since 1.0.0
**/

/**
* Register Block Pattern Category.
**/
if ( function_exists( 'clay_register_block_pattern_category' ) ) {
    clay_register_block_pattern_category() {
        'elements',
        array( 'label' => esc_html__( 'Design elements', 'clay' ) )
    }
}