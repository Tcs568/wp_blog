<!-- globalnav -->
function theme_setup() {
register_menu( array(
'globalnav' => 'グローバルナビ'
));
}
add_action('after_setup_theme' , 'thema_setup');

<!-- img -->
function customize_img_attribute( $content ) {
$re_content = str_replace('alt=""', 'alt="画像"', $content);
return $re_content;
}
add_filter('the_content','customize_img_attribute');

<!-- widget -->
function theme_widgets_init() {
register_sidebar( array(
'name' => 'サイドバー',
'id' => 'sidebar',
'description' => 'サイドバーに表示されるウィジェット',
'befor_widget' => '<aside id="%1$s" class="wiget %2$s">',
    'after_widget' => '</aside>',
'befor_title' => '<h2>',
    'after_title' =>'</h2>',

));
}
add_action('widgets_init' , 'thema_widgets_setup');