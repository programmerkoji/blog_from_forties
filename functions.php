<?php
/***
　wp_head  remove_action
***/
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');

remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

//nextpage,prevpage
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//canonicalのmetaタグ
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/*jquerydelete*/
function delete_wphead_jquery() {
  wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'delete_wphead_jquery' );

/*title delete*/
remove_action( 'wp_head', '_wp_render_title_tag', 1 );

/*css delete*/
remove_action( 'wp_head', 'wp_print_styles',8);
remove_action( 'wp_head', 'wp_print_head_scripts',9);

add_filter( 'show_admin_bar', '__return_false' );

/* wp-block-library-cssを消す */
add_action('wp_enqueue_scripts', function() {
  wp_deregister_style('wp-block-library');
});

/*【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除 */
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width と heifht を削除
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html); // class を削除
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html); // title を削除
  $html = preg_replace('/<a href=".+">/', '', $html); // a タグを削除
  $html = preg_replace('/<\/a>/', '', $html); // a の閉じタグのを削除
  return $html;
}

/*特殊文字調整、<p><br>削除*/
add_action('init', function() {
  remove_filter('the_title', 'wptexturize');
  remove_filter('the_content', 'wptexturize');
  remove_filter('the_excerpt', 'wptexturize');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_editor_content', 'wp_richedit_pre');
});
add_filter('tiny_mce_before_init', function($init) {
  $init['wpautop'] = false;
  return $init;
});
// global-styles-inline-css を読み込まないようにする（※ v5.9から追加）
function custom_wp_dequeue_css()
{
    wp_dequeue_style('global-styles');
}
add_action( 'wp_enqueue_scripts', 'custom_wp_dequeue_css', 100);
