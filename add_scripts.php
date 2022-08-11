<?php

// jquery,JSの読み込み
function add_my_scripts() {	
  //WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');

  //jQuery を読み込む
  wp_enqueue_script(
      'jquery', 
      get_theme_file_uri( '/js/jquery-3.6.0.min.js' ), 
      array(), 
      '3.6.0', 
  );

  //common.js の読み込み
  wp_enqueue_script( 
      'common-script',
      get_theme_file_uri( '/js/script.js' ), 
      array( 'jquery' ),
      filemtime( get_theme_file_path( '/js/script.js' ) ), 
      true
  );
  //FontAwesome の読み込み
  wp_enqueue_script( 
      'fontawesome-script',
      'https://kit.fontawesome.com/77a829ded7.js'
  );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

// fontawesomeにcrossoriginを付与
function custom_script_loader_tag($tag, $handle) {
  if($handle !== 'fontawesome-script') {
    return $tag;
  }
  
  return str_replace('></script>', ' crossorigin="anonymous"></script>', $tag);
}
add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2);
