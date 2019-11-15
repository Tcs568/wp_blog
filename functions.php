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