<?php
function abcrypto_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
  //  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'abcrypto_scripts' );

function get_title(){
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'get_title' );
