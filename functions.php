<?php
/**
 * Theme Functions
 * 
 * @package Neon_Digital
 */

function neon_enqueue_scripts() {
    // Enqueue Theme Stylesheet (style.css) - Required for Child Themes & WP Standards
    wp_enqueue_style( 'neon-style', get_stylesheet_uri() );

    // Enqueue Main CSS (The actual styles)
    wp_enqueue_style( 'neon-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '3.0.0', 'all' );
    
    // Enqueue Main JS (if exists)
    // wp_enqueue_script( 'neon-main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'neon_enqueue_scripts' );

function neon_setup() {
    // Add dynamic title tag support
    add_theme_support( 'title-tag' );
    
    // Add featured image support
    add_theme_support( 'post-thumbnails' );
    
    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'neon-digital' ),
    ) );
}
add_action( 'after_setup_theme', 'neon_setup' );
?>
