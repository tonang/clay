<?php 
/**
* Block patterns 
* 
* @package clayi
* @since 1.0.0
**/

/**
* Register Block Pattern Category.
**/
if ( function_exists( 'clayi_register_block_pattern_category' ) ) {
    clayi_register_block_pattern_category(
        'elements',
        array( 'label' => esc_html__( 'Design elements', 'clayi' ) )
    );
}