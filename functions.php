<?php

function add_thema_style()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/ress.css');
    wp_enqueue_style('swiper-style', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css');
    wp_enqueue_style('fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
    wp_enqueue_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}
function add_thema_script()
{
    wp_enqueue_script('main-sctipt', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
    wp_enqueue_script('boot1-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('boot2-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), false, true);
    wp_enqueue_script('swiper-script', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_thema_style');
add_action('wp_enqueue_scripts', 'add_thema_script');


if (!function_exists('theme_setup')) :
    function theme_setup()
    {
        add_editor_style(array('assets/css/editor-style.css'));

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(2000, 1200, true);

        add_theme_support('html5', array(
            'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        register_nav_menus(array(
            'global'    => 'グローバル',
            'footer'    => 'フッター',
        ));
    }
endif;
add_action('after_setup_theme', 'theme_setup');

function theme_widgets_init()
{
    register_sidebar(array(
        'name'          => 'サイドバー',
        'id'            => 'sidebar-1',
        'description'   => 'サイドバーに表示されるウィジェット',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => 'フッター1',
        'id'            => 'footer-1',
        'description'   => 'フッターに表示されるウィジェット',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => 'フッター2',
        'id'            => 'footer-2',
        'description'   => 'フッターに表示されるウィジェット',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');
