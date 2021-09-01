<?php 
/**
* Clay Admin class
* 
* Adds a theme about page to the WordPress admin area
*
* @package Clay
* @since 1.0.0
*/

namespace Clay;

/**
* Admin Theme about page
* 
* @since 1.0.0
*/
class AboutPage {
    /**
    * Constructor.
    * 
    * @since 1.0.0
    * @access public
    * @return void
    */
    public function __construct(){
        add_action( 'admin_menu', [ $this, 'action_admin_page_menu' ] );
    }

    /**
    * Adds the menu item for the theme information page.
    * 
    * @since 1.0.0
    * @access public
    * @return void
    */
    public function action_admin_page_menu() {
        add_theme_page( 
            __( 'Clay Setup Help', 'clay' ), 
            __( 'Clay Setup Help', 'clay' ), 
            'edit_theme_options', 
            'clay_theme', 
            [ $this, 'docs' ] 
        ); 
    }

    /**
    * Create the documentation page.
    * 
    *
    * @since 1.0.0
    * @access public
    * @return void
    */
    public function docs(){
        ?>
            <div class="wrap">
                <div class="welcome-panel">
                    <div class="welcome-panel-content">
                        <h1><?php esc_html_e( 'Clay Setup Help', 'clay' ); ?></h1><br>
                        <?php esc_html_e( 'Clay is an experimental full site editing theme.', 'clay' ); ?><br>
                        <?php esc_html_e( 'Templates, block patterns and block styles may change in future versions.', 'clay' ); ?><br><br>
                    </div>
                </div>
            </div>
        <?php
    }
}

new AboutPage();