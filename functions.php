<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

function sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
    wp_register_style('front', get_template_directory_uri() . '/assets/css/front-awesome.css', array());
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array());
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('front');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'sheets');

function script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'script');

function menue()
{
    $menues = array(
        "headermenue" => "headermenue",
        "sidemenue" => "sidemenue"
    );
    register_nav_menus($menues);
}
add_action('init', 'menue');
