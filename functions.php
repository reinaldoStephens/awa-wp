<?php

/**
 * Theme functions
 * 
 * @package Awa
 */

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
    while (@ob_end_flush());
});

function awa_enqueue_scripts()
{
    wp_register_style('style-css', get_stylesheet_uri(), array(), null);
    wp_register_script('main-js', get_template_directory_uri() . './assets/main.js', [], null, true);

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'awa_enqueue_scripts');
