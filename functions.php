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

	// Add Parsley
	wp_enqueue_style('parsley-css', get_template_directory_uri() . '/css/parsley.css');

    // Add Google Fonts
    wp_enqueue_style( 'jerelia-font', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic');
	
	// Add Hero
	wp_enqueue_script( 'hero-scripts', get_template_directory_uri() . '/js/hero.js');
	// Add Parallax
	wp_enqueue_script( 'paralax-scripts', get_template_directory_uri() . '/js/parallax.js');


	wp_enqueue_script('parsley', get_template_directory_uri() . '/js/parsley.min.js');
	wp_enqueue_script('parsley-uk', get_template_directory_uri() . '/js/i18n/uk.js');
}
add_action('wp_enqueue_scripts', 'bst_child_enqueues', 101);


$types = array( 'post', 'page' );
  foreach( $types as $type )
      add_post_type_support( $type, 'unpublish' );

add_filter( 'wp_mail_from_name', 'vortal_wp_mail_from_name' );
function vortal_wp_mail_from_name( $email_from ){
	return 'Команда Jerelia';
}

// Custom Role


function add_theme_caps() {
	// Get role Leader
	$role = get_role( 'leader' );


	if ( null !== $role ) {
		// Role exist
		$role->add_cap( 'edit_posts' ); 
		$role->remove_cap( 'manage_options' );
	}
	else {
		//Create Role
	$createrole = add_role(
	    'leader',
	    __( 'Лидер' ),
	    array(
	        'read'         => true,  // true allows this capability
	       	'edit_published_posts'   => true,
			'edit_pages'   => true,
	        'edit_published_pages'   => true,
	       	'edit_theme_options'   => true,
	       	'unfiltered_html'   => true,
	       	'unfiltered_upload'   => true,
	       	'upload_files'   => true,
	    )
	);
	}

}
add_action( 'admin_init', 'add_theme_caps');

// Hide Post Menu

function custom_remove_menus(){

    // Get current user's data
    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;

    // Check user's roles   
    $user = new WP_User( $user_id );
    if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
        if( in_array( 'leader', $user->roles ) ) {
            // Remove menu items
            remove_menu_page( 'edit.php' );
        }
    }
}

add_action( 'admin_menu', 'custom_remove_menus' );

// test

// update_option ( 'blogname', 'Тестовый лидер' );

?>
