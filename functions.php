<?php
add_theme_support('post-tumbnail');
add_theme_support('menus');
add_theme_support('widgets');

function sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'sheets');

function script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/script.js');
    wp_register_script('script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'script');

function menue()
{
    $menues = array(
        "headermenue" => "Headermenue",
        "sidemenue" => "Sidemenue"
    );
    register_nav_menus($menues);
}
add_action('init', 'menue');
