<?php

function add_theme_scripts() {    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');
  }

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function simple_theme_setup()
{
    // Featured Image Support
    add_theme_support('post-thumbnails');

    // Custom Logo
    add_theme_support('custom-logo');


     //Menus
     register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt Length
function set_excerpt_length()
{
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

 //Widget Locations
 function init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'init_widgets');
