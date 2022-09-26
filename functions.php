<?php
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 500, 500, true );

    }

    function basic_custom_logo_setup() {
      $defaults = array(
          'height'               => 50,
          'width'                => 100,
          'flex-height'          => true,
          'flex-width'           => true,
          'header-text'          => array( 'Basic WP', 'first theme development' ),
          'unlink-homepage-logo' => true, 
      );

      add_theme_support( 'custom-logo', $defaults );
    }
    add_action('after_setup_theme', 'basic_custom_logo_setup');



    register_nav_menus(
        array('primary-menu' => 'Header Menu' )
    );



    function add_theme_scripts() {
        wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri().'/owl/assets/owl.carousel.min.css',array(),'0.4' );
        wp_enqueue_script( 'owl-js', get_stylesheet_directory_uri() . '/owl/owl.carousel.min.js', array(), '1.3', true );
        wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', false, 1.1, true); 
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


?>