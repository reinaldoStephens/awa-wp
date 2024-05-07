<?php

/**
 * Theme functions
 * 
 * @package Awa
 */

if (!defined('AWA_DIR_PATH')) {
    define('AWA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AWA_DIR_URI')) {
    define('AWA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once AWA_DIR_PATH . '/inc/helpers/autoloader.php';

function awa_get_theme_instance()
{
    \AWA_THEME\Inc\AWA_THEME::get_instance();
}

awa_get_theme_instance();

function awa_enqueue_scripts()
{
}

add_action('wp_enqueue_scripts', 'awa_enqueue_scripts');

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
