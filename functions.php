<?php
/*
 * Add to theme's functions.php file 
 * Or, add to a code snippet, such as through the wpcode plugin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Styles
if ( ! function_exists( 'enqueue_custom_styles' ) ) {
    function enqueue_custom_styles() {
      // Normalize
      wp_register_style( 'the-new-normal-css', 'https://cdn.jsdelivr.net/gh/sarahschopick/the-new-normal.css@main/the-new-normal.min.css', array(), '1.0.0' );
      wp_enqueue_style( 'the-new-normal-css' );

      // WordPress Normalization
      wp_register_style( 'normalize-wordpress', 'https://cdn.jsdelivr.net/gh/sarahschopick/normalize-wordpress@main/normalize-wordpress.min.css', array(), '1.0.0' );	
      wp_enqueue_style( 'normalize-wordpress' );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );
