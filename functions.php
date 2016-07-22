<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');
// Customizer
require_once ('includes/customizer/customizer.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}
function bst_child_enqueues() {

	wp_enqueue_style('jerelia-css', get_template_directory_uri() . '/css/jerelia.css');

    // Add Google Fonts
    wp_enqueue_style( 'jerelia-font', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic');
	
	// Add Hero
	wp_enqueue_script( 'hero-scripts', get_template_directory_uri() . '/js/hero.js');
	// Add Parallax
	wp_enqueue_script( 'paralax-scripts', get_template_directory_uri() . '/js/parallax.js');

}
add_action('wp_enqueue_scripts', 'bst_child_enqueues', 101);


$types = array( 'post', 'page' );
  foreach( $types as $type )
      add_post_type_support( $type, 'unpublish' );

?>
