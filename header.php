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

<body>
  <div id="wrapper">
    <!-- header -->
    <header class="l-header">
      <div class="p-header">
        <div class="p-header__logo p-header-logo">
          <a href="<?php echo get_template_directory_uri(); ?>/index.html">
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
            <ul class="p-header-nav__lists">
              <li class="p-header-nav__list">
                <a href="<?php echo get_template_directory_uri(); ?>/plan.html">料金</a>
              </li>
              <li class="p-header-nav__list">
                <a href="<?php echo get_template_directory_uri(); ?>/blog_list.html">ブログ</a>
              </li>
              <li class="p-header-nav__list">
                <a href="<?php echo get_template_directory_uri(); ?>/result_list.html">卒業実績</a>
              </li>    
            </ul>
          </div>
          <a href="<?php echo get_template_directory_uri(); ?>/contact_form.html" class="c-btn c-btn--header pc">お問い合わせ</a>
        </div>
      </div>
      <?php wp_head(); ?>
    </header>