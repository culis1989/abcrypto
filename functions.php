<?php

// REGISTER SCRIPTS
function abcrypto_scripts() {
    wp_enqueue_style( 'open-font','//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext');
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'abcrypto_scripts' );

// REGISTER TITLE
function get_title(){
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'get_title' );

// REGISTER MENU
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
));

// HIDE ADMIN BAR
add_filter('show_admin_bar', '__return_false');

// REGISTER WIDGETS
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer widget one', 'abcrypto' ),
        'id' => 'widget-1',
        'description' => __( 'Footer widget one', 'abcrypto' ),
        'before_widget' => '<div class="widget">',
      	'after_widget'  => '</div>',
      	'before_title'  => '<h3 class="widgettitle">',
      	'after_title'   => '</h3>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer widget two', 'abcrypto' ),
        'id' => 'widget-2',
        'description' => __( 'Footer widget two', 'abcrypto' ),
        'before_widget' => '<div class="widget">',
      	'after_widget'  => '</div>',
      	'before_title'  => '<h3 class="widgettitle">',
      	'after_title'   => '</h3>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer widget three', 'abcrypto' ),
        'id' => 'widget-3',
        'description' => __( 'Footer widget three', 'abcrypto' ),
        'before_widget' => '<div class="widget">',
      	'after_widget'  => '</div>',
      	'before_title'  => '<h3 class="widgettitle">',
      	'after_title'   => '</h3>',
    ));
}
