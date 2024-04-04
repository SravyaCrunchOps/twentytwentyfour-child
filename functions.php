<?php

add_action('wp_enqueue_scripts', 'enqueue_child_styles');

function enqueue_child_styles() {
    wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css");
    wp_enqueue_style("child-css", get_stylesheet_directory_uri()."/style.css", array());
}

function register_menus() {
    // displays menu on frontend
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            "footer-menu" => 'Footer Menu',
            'account-menu' => 'Account Menu'
        )
    );
}

add_action('init', 'register_menus');