<?php 
/**
* Block styles.
* 
* @package clayi
* @since 1.0.0
*/

/**
* Register block styles
*/
function clayi_register_block_styles(){
    register_block_style(
        'core/paragraph',
        array(
            'name' => 'clayi-rounded-corners',
            'label' => __( 'Rounded corners (requires background color)', 'clayi' ),
            'inline-style' => '
            .is-style-clayi-rounded-corners {
                border-radius: 6px;
            }',
        )
    );
}
add_action( 'init', 'clayi_register_block_styles' );