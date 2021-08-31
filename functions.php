<?php
/**
 * Theme functions and definitions
 *
 * @package Zero
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Register at least one menu for the menu settings to appear in the dashboard
function zero_register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
        )
    ); 
}
add_action( 'init', 'zero_register_menus' );


// Add theme ssupport
function zero_theme_supports() {

    add_theme_support( 'post-thumbnails' ); /* Enabled featured images */
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    
    //add_theme_support( 'editor-styles' ); /* Enabled block styles */
    //add_theme_support( 'align-wide' );    /* Enables block wide alignments */
}

add_action( 'after_setup_theme', 'zero_theme_supports' );
