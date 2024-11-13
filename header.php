<!DOCTYPE html>
<html lang="ja">
<head>
 <title>music_school</title>
 <meta name="description" content="music_schoolの紹介">
 <meta charset="UTF-8">

 <!-- レスポンシブ対応 -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!-- 第三者閲覧防止のためのnoindexを記述 -->
 <meta name="robots" content="noindex">

 <!-- ファビコン設定 -->
 <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

</head>
<body style="display: none;"><!-- ヘッダー遅延・ヘッダーナビメニューの表示崩れ防止　 -->
  <div id="wrapper">
    <!-- header -->
    <header class="l-header">
      <div class="p-header">
        <div class="p-header__logo p-header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="p-header-logo__image">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/sp_logo-red20x31.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-red32x49.svg" alt="きたむらミュージックスクール">
              </picture>
            </div>
            <div class="p-header-logo__text">
              <h1>きたむら<br class="pc"><span>ミュージックスクール</span></h1>
            </div>  
          </a>   
        </div>
        <div class="p-header__right p-header-right">      
          <!-- <div class="header__hb-btn header-hb__btn sp"> -->
          <div class="c-hamburger  js-hamburger sp">
            <div class="c-hamburger__inner">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
         
          <div class="p-header__nav p-header-nav">
          <?php
           wp_nav_menu(array(
           'menu' => 'header',
           'menu_class' => 'header-nav-list',
           'container' => 'nav',
           'container_class' => 'header-nav'
           ));
           ?>
          </div>          
        </div>
      <?php wp_head(); ?>
    </header>