<?php

/**
 * Connecting styles
 */
add_action('wp_enqueue_scripts', 'new_theme_style_css');
function new_theme_style_css(): void
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/css/styles.css');
}

/**
 * Connecting scripts
 */
add_action('wp_enqueue_scripts', 'new_theme_script_js');
function new_theme_script_js(): void
{
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '1.0', false);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', '', '1.0', false);
}

/**
 * Added widgets
 */
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'before_widget' => '<div class="card my-4 widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="card-header">',
        'after_title' => '</h5><div class="card-body">',
    ));

/**
 * Added menu
 */
register_nav_menus(array(
    'top'  => 'Top menu',
));

/**
 * Added thumbnails
 */
add_theme_support('post-thumbnails');