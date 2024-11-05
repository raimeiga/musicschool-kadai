<?php
// CSSとJavaScriptを読み込む関数
function custom_theme_scripts() {
    // リセットCSS
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

    // slickのCSS
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // スタイルシート
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.2');

    // Noto Sans JPフォント
    wp_enqueue_style('noto-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

    // Simplebar CSS
    wp_enqueue_style('simplebar-css', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

function custom_theme_footer_scripts() {
    // jQueryを読み込む
    wp_deregister_script('jquery'); // 既存のjQueryを解除
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true); // jQueryを追加

    // slickのJavaScript
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    // Simplebar JS
    wp_enqueue_script('simplebar-js', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js', array('jquery'), null, true);

    // 自作のJavaScriptファイル
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('slick-js', 'simplebar-js'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_footer_scripts');


//サムネイル有効化
add_theme_support('post-thumbnails');

//現在のページ数の取得
function show_page_number() {
 global $wp_query;
 $paged = get_query_var('paged');
 echo $paged;
}