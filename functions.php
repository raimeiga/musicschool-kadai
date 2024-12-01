
<?php

// CSSとJavaScriptを読み込む関数
function custom_theme_scripts() {
    // リセットCSS
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

    // slickのCSS
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // スタイルシート（キャッシュバスティング）
    $style_version = date("ymdHi", filemtime(get_template_directory() . '/css/style.css')); // 最終更新日時を取得
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), $style_version); // バージョンを追加

    // Noto Sans JPフォント
    wp_enqueue_style('noto-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

    // Simplebar CSS
    wp_enqueue_style('simplebar-css', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

function custom_theme_footer_scripts() {
    // jQueryを読み込む
    // wp_deregister_script('jquery'); // 既存のjQueryを解除
    // wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true); // jQueryを追加

    // slickのJavaScript
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    // Simplebar JS
    wp_enqueue_script('simplebar-js', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js', array('jquery'), null, true);

    // 自作のJavaScriptファイル
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('slick-js', 'simplebar-js','jquery'), null, true);
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

//管理画面で 投稿メニュー を非表示
function remove_menus () {
 global $menu;
 remove_menu_page( 'edit.php' );
}
add_action('admin_menu', 'remove_menus');


//管理画面「外観＞メニュー」 を表示
//「WordPressでメニューを有効化する」という意味らしい
add_action('after_setup_theme', 'register_menu');
function register_menu() {
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

//トップページ「生徒さんたちの声」のスライドの左右にある矢印を取得
// prevArrow,nextArrowの2行とコンビ
function enqueue_slider_scripts() {
 // スライダーのJavaScriptファイルを読み込む
 wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

 // スライダーの矢印画像パスをJavaScriptに渡す
 $arrow_prev_path = get_template_directory_uri() . '/images/arrow-prev.svg';
 $arrow_next_path = get_template_directory_uri() . '/images/arrow-next.svg';
 $arrow_prev_path_sp = get_template_directory_uri() . '/images/arrow-prev-sp.svg';
 $arrow_next_path_sp = get_template_directory_uri() . '/images/arrow-next-sp.svg';

 wp_add_inline_script('slick-slider', "
     var arrowPrevPath = '{$arrow_prev_path}';
     var arrowNextPath = '{$arrow_next_path}';
     var arrowPrevPathSp = '{$arrow_prev_path_sp}';
     var arrowNextPathSp = '{$arrow_next_path_sp}';
 ");
}
add_action('wp_enqueue_scripts', 'enqueue_slider_scripts');


// ユーザーエージェント判定
// PC20文字、スマホ35文字までという文字数の制限を設定するので必要らしい
function is_mobile(){
 $useragents = array(
   'iPhone', // iPhone
   'iPod', // iPod touch
   'Android', // 1.5+ Android
   'dream', // Pre 1.5 Android
   'CUPCAKE', // 1.5+ Android
   'blackberry9500', // Storm
   'blackberry9530', // Storm
   'blackberry9520', // Storm v2
   'blackberry9550', // Storm v2
   'blackberry9800', // Torch
   'webOS', // Palm Pre Experimental
   'incognito', // Other iPhone browser
   'webmate' // Other iPhone browser
 );
 $pattern = '/'.implode('|', $useragents).'/i';
 return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


// Contact Form 7 が生成するフォームのHTMLからcolsと rows の属性を削除
add_filter('wpcf7_form_elements', 'remove_textarea_cols_rows');

function remove_textarea_cols_rows($content) {
    $content = preg_replace('/cols="\d*"\s/', '', $content); // cols属性を削除
    $content = preg_replace('/rows="\d*"\s/', '', $content); // rows属性を削除
    return $content;
}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//省略記号を [...] ではなく、単純な3点リーダー（...）に変更
function modify_read_more_link() {
 return '...'; // 省略記号を「...」に設定
}
add_filter('excerpt_more', 'modify_read_more_link');


// パンくずリストのタイトルに30字の文字数制限を設定
function limit_breadcrumb_title_length( $title ) {
 // 30文字を超えた場合に切り捨てて「...」を追加
 if ( mb_strlen( $title ) > 30 ) {
     $title = mb_substr( $title, 0, 30 ) . '...';
 }
 return $title;
}
add_filter( 'bcn_breadcrumb_title', 'limit_breadcrumb_title_length' );


/*recaptchaをお問い合わせページのみに表示させるため、
  body.page-contactを付与させるためのコード */
function add_contact_page_body_class($classes) {
 if (is_page('contact')) { // お問い合わせページのスラッグが 'contact' の場合
     $classes[] = 'page-contact';
 }
 return $classes;
}
add_filter('body_class', 'add_contact_page_body_class');

