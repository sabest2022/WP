<?php

function theme_support()
{
    add_theme_support('menus');
}

add_action('after_setup_theme', 'theme_support');

function register_menys()
{
    $menus = array(
        'huvudmeny' => 'Huvudmeny',
        'footer' => 'Footer'
    );
    register_nav_menus($menus);
}

function register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('css-style', get_template_directory_uri() . "/style.css", array('bootstrap-style'), $version, 'all');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), 'all');
    wp_enqueue_style('fontawesome-style', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('script-js', get_template_directory_uri() . "/assets/js/script.js", array(), $version, 'all');
    wp_enqueue_script('script-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), 'all');
}

add_action('wp_enqueue_scripts', 'register_scripts');
