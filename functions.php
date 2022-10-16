<?php

function add_theme_scripts() {    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');

    wp_register_script('jquery', get_template_directory_uri(). '/assets/js/vendor/jquery.js');
    wp_enqueue_script('jquery');
    
    wp_register_script('input', get_template_directory_uri(). '/assets/js/vendor/what-input.js');
    wp_enqueue_script('input');
    
    wp_register_script('foundation', get_template_directory_uri(). '/assets/js/vendor/foundation.js');
    wp_enqueue_script('foundation');
    
    wp_register_script('app', get_template_directory_uri(). '/assets/js/app.js');
    wp_enqueue_script('app');
    
    wp_register_script('up', get_template_directory_uri(). '/assets/js/up-button.js');
    wp_enqueue_script('up');
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


function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'is-active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

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
