<?php
/*
   ==========================
   | 包含css和js
   ==========================
*/
function wp101_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wp101.css', array(), '1.0.0', 'all');
    //js
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.6.4.min.js', array(), '1.6.4', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.css', array(), '3.3.4', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/wp101.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'wp101_script_enqueue');

/*
   ==========================
   | 激活菜单
   ==========================
*/
function wp101_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', '主标题导航');
    register_nav_menu('secondary', '页脚导航');
}

add_action('init', 'wp101_theme_setup');

/*
   ==========================
   | 主题支持功能
   ==========================
*/
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
   ==========================
   | 侧边栏功能
   ==========================
*/
function wp101_widget_setup() {
    register_sidebar(
        array(
            'name'        =>  'Sidebar',
            'id'          =>  'sidebar-1',
            'class'       =>  'custom',
            'description' => '标准侧边栏',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' =>  '</aside>',
            'before_title'  =>  '<h3 class="widget-title">',
            'after_title'  =>  '</h3>',

        )
    );
}
add_action('widgets_init', 'wp101_widget_setup');

/*
   ==========================
   | 禁止wordpress加载google字体
   ==========================
*/
function coolwp_remove_open_sans_from_wp_core() {
wp_deregister_style( 'open-sans' );
wp_register_style( 'open-sans', false );
wp_enqueue_style('open-sans','');}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
