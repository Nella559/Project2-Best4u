<?php

add_action( 'wp_enqueue_scripts', 'load_css' );

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;700&display=swap');

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts');


function load_css() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.css', array(), 'all');
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/main.css', array(), 'all');

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', false, null, false );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('child-theme-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

    wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', 'jquery', false, true );
    wp_enqueue_script('slick');

    wp_register_style('slick_css', get_template_directory_uri() . 'styles/slick-theme.css');
    wp_enqueue_style('slick_css');

    wp_register_style('slick_main', get_template_directory_uri() . 'styles/slick.css');
    wp_enqueue_style('slick_main');

    wp_enqueue_style(('icomoon'), get_template_directory_uri(). '/icomoon/style.css', false);

  }



//Menu
add_theme_support('menus');

function register_my_menu() {
  register_nav_menu('site-nav',__( 'Site Nav' ));
}
add_action( 'init', 'register_my_menu' );


//Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 277,
  'width'       => 64,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'logo', 'site-logo' ),
 'unlink-homepage-logo' => true, 
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

 //Footer


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));


    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}