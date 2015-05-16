<?php
function wp101_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wp101.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customstyle', get_template_directory_uri() . '/js/wp101.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'wp101_script_enqueue');

function wp101_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', '主标题导航');
    register_nav_menu('secondary', '页脚导航');
}

add_action('init', 'wp101_theme_setup');
