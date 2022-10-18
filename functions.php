<?php
/* 
    Template Name: functions.php
    Description: Adding features to wordpress theme

*/

function add_theme_scripts() {    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');

    wp_register_script('jquery', get_template_directory_uri(). '/assets/js/vendor/jquery.js',);
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

    add_theme_support('title-tag');

    // Custom Logo
    add_theme_support('custom-logo');


     //Menus
     register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');




//WP_Customize_Control (change side title and tagline, add widgets to a sidebar, o footer, change home settings)
function customizer_settings($wp_customizer){

    //add a customizer setting

    //include new section
    $wp_customizer->add_section('header',array(
        'title'=> __('Header Settings'),
        'priority'=>70
    ));

    //add capability to customizer setting
    $wp_customizer->add_setting('header_image',array(
        'capability'=> 'edit_theme_options'
    ));


    //add the controls in the customizer settings
    $wp_customizer-> add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
        'label'=>__('Header Image'),
        'section'=>'header'
    )));

    //add header text setting
    $wp_customizer->add_setting('header_text_field',array(
        'capability'=> 'edit_theme_options',
        'default'=>'Title'
    ));

    // the text control description title
    $wp_customizer->add_control('header_text_conrtrol',array(
        'label'=>__('Header Text'),
        'description'=>'Change Header Text',
        'section'=>'header',
        'settings'=>'header_text_field'
    ));

     //add header text setting
     $wp_customizer->add_setting('header_desc_field',array(
        'capability'=> 'edit_theme_options',
        'default'=>'Description'
    ));

    // the text control
    $wp_customizer->add_control('header_description_conrtrol',array(
        'label'=>__('Header Description'),
        'description'=>'Change Header Description',
        'section'=>'header',
        'settings'=>'header_desc_field'
    ));

}
add_action('customize_register','customizer_settings');


add_theme_support('custom-background');

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
