<?php

/**
 * Enqueue theme assets
 * 
 * @package Awa
 */



namespace Awa_Theme\Inc;

use AWA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // register styles
        wp_register_style('style-css', get_stylesheet_uri(), array(), null);
        wp_register_style('header-css', AWA_DIR_URI . '/assets/src/scss/header.scss', array(), null);
        // enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('header-css');
    }

    public function register_scripts()
    {
        wp_register_script('main-js', AWA_DIR_URI . './assets/main.js', [], null, true);
        wp_enqueue_script('main-js');
    }
}
