<?php
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


function my_script_init() {
  wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/lib/swiper-bundle.min.css', array(), '10.2.0' );
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/lib/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_style("reset-css", get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
  
}
  add_action("wp_enqueue_scripts", "my_script_init");

  function my_menu_init() {
    register_nav_menus(
      array(
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
      )
    );
  }
  add_action('init', 'my_menu_init');

add_filter('get_the_archive_title', 'my_archive_title');


?>