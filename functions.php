<?php

add_action('wp_enqueue_scripts', 'enqueue_child_styles');

function enqueue_child_styles() {
    wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css");
    wp_enqueue_style("child-css", get_stylesheet_directory_uri()."/style.css", array());
    wp_enqueue_style('blog-style', get_stylesheet_directory_uri()."./styles/blog-style.css");
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

function custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function time_ago($timestamp) {
    $current_time = time();
    $timestamp = strtotime($timestamp);

    $time_difference = $current_time - $timestamp;
    $seconds = $time_difference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    if ($seconds <= 60) {
        return 'Just now';
    } elseif ($minutes <= 60) {
        if ($minutes == 1) {
            return 'A minute ago';
        } else {
            return "$minutes minutes ago";
        }
    } elseif ($hours <= 24) {
        if ($hours == 1) {
            return 'An hour ago';
        } else {
            return "$hours hours ago";
        }
    } elseif ($days <= 7) {
        if ($days == 1) {
            return 'Yesterday';
        } else {
            return "$days days ago";
        }
    } elseif ($weeks <= 4.3) {
        if ($weeks == 1) {
            return 'A week ago';
        } else {
            return "$weeks weeks ago";
        }
    } elseif ($months <= 12) {
        if ($months == 1) {
            return 'A month ago';
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return 'A year ago';
        } else {
            return "$years years ago";
        }
    }
}
