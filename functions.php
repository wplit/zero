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

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    //add_theme_support( 'editor-styles' );
    //add_theme_support( 'align-wide' ); 
    //add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'zero_theme_supports' );
