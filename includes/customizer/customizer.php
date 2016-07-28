<?php
/**
 *  Customizer
 */
 function panel_register( $wp_customize ) {


    // Hero
        require_once get_template_directory() . '/includes/customizer/panels/hero.php';
    // About
        require_once get_template_directory() . '/includes/customizer/panels/about.php';     
    // Social
        require_once get_template_directory() . '/includes/customizer/panels/social.php';
    // Team
        require_once get_template_directory() . '/includes/customizer/panels/team.php';       
    // Callback
        require_once get_template_directory() . '/includes/customizer/panels/callback.php';
    // Contacs
        require_once get_template_directory() . '/includes/customizer/panels/contacts.php';


   }
add_action( 'customize_register', 'panel_register' );

function set_custom_title() { 
    $hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
    return "Майстерня бізнесу " . $hero_title; }
add_filter( 'pre_get_document_title', 'set_custom_title' );


/**
 *  Customizer Live Preview
 */
if(!function_exists('jerelia_customizer_live_preview')) {
    add_action( 'customize_preview_init', 'customizer_live_preview' );
    function customizer_live_preview() {
        wp_enqueue_script( 'jerelia-customizer-live-preview', get_template_directory_uri() . '/includes/customizer/js/jerelia-customizer-live-preview.js', array('customize-preview'), '1.0', true);
    }
}



/**
 *  Sanitize HTML
 */
if( !function_exists( 'sanitize_html' ) ) {
    function sanitize_html( $input ) {
        $input = force_balance_tags( $input );
        
        $allowed_html = array(
            'a' => array(
                'href' => array(),
                'title' => array()
            ),
            'br' => array(),
            'em' => array(),
            'img' => array(
                'alt' => array(),
                'src' => array(),
                'srcset' => array(),
                'title' => array()
            ),
            'strong' => array(),
        );
        $output = wp_kses( $input, $allowed_html );
        return $output;
    }
}


    /**
     * Function to sanitize checkboxes
     */
if( !function_exists( 'jerelia_sanitize_checkbox' ) ) {
    function jerelia_sanitize_checkbox($value)
    {
        if ($value == 1) {
            return 1;
        } else {
            return 0;
        }
    }
}