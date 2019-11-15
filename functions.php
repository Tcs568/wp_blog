<!-- globalnav -->
function theme_setup() {
register_menu( array(
'globalnav' => 'グローバルナビ'
));
}
add_action('after_setup_theme' , 'thema_setup');

<!-- sidebar widget -->
function theme_widgets_init() {
register_sidebar( array(
'name' => 'サイドバー1',
'id' => 'sidebar-1',
'description' => 'サイドバーに表示されるウィジェット',
'befor_widget' => '<aside id="%1$s" class="wiget %2$s">',
    'after_widget' => '</aside>',
'befor_title' => '<div class="sidebar__head">',
    'after_title' =>'</div>',

));
}
add_action('widgets_init' , 'thema_widgets_init');

<!-- footer widget -->
function theme_widgets_init() {
register_sidebar( array(
'name' => 'フッター1',
'id' => 'footer-1',
'description' => 'フッターに表示されるウィジェット',
'befor_widget' => '<section id="%1$s" class="wiget %2$s">',
    'after_widget' => '</aside>',
    'befor_title' => '<div class="sidebar__head">',
        'after_title' =>'</div>',

    ));
    }
    add_action('widgets_init' , 'thema_widgets_init');