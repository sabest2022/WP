<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

function sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
    wp_register_style('front', get_template_directory_uri() . '/assets/css/font-awesome.css', array());
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



function o_widget_area()
{
    // widgets för footer
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area1',
            'id' => 'footer-1',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area2',
            'id' => 'footer-2',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area3',
            'id' => 'footer-3',
            'description' => 'footer widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'footer area4',
            'id' => 'footer-4',
            'description' => 'footer widget area'
        )
    );
    // widgets för aside
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area1',
            'id' => 'aside-1',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area2',
            'id' => 'aside-2',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'aside area3',
            'id' => 'aside-3',
            'description' => 'aside widget area'
        )
    );
    register_sidebar(
        array(
            'before_widget'  => '<div>',
            'after_widget'   => "</div>",
            'name' => 'kontakt form',
            'id' => 'kontakt',
            'description' => 'kontakt widget area'
        )
    );
}

add_action('widgets_init', 'o_widget_area');
