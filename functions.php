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
        'before_widget' => ' <div class="sidebar__box">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar__head"><span>',
        'after_title'   => '</span></div>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');

function custom_the_posts_pagination($template)
{
    $template = '
	<nav class="p-posts-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="post__nav">%3$s</div>
	</nav>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');

function my_contact_enqueue_scripts()
{
    wp_deregister_script('contact-form-7');
    wp_deregister_style('contact-form-7');
    if (is_page('contact')) {
        if (function_exists('wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
        }
        if (function_exists('wpcf7_enqueue_styles')) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action('wp_enqueue_scripts', 'my_contact_enqueue_scripts');
