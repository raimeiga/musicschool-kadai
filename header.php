<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()): ?>
    <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
    <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール
    「きたむらミュージックスクール」の公式ホームページです。">
  <!-- 固定ページ -->
  <?php elseif(is_page()): ?>
    <?php if(get_field("title")): ?>
    <title><?php echo the_field('title'); ?></title>
    <?php else: ?>
    <title><?php the_title(); ?> | きたむらミュージックスクール</title>
    <?php endif; ?>
    <?php if(get_field("description")): ?>
    <meta name="description" content="<?php echo the_field('description'); ?>">
    <?php else: ?>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの
    <?php the_title(); ?>ページです。">
    <?php endif; ?>
  <!-- 投稿ページ -->
  <?php elseif(is_single()): ?>
    <?php if(get_field("title")): ?>
    <title><?php echo the_field('title'); ?></title>
    <?php else: ?>
    <title><?php the_title(); ?> | きたむらミュージックスクール</title>
    <?php endif; ?>
    <?php if(get_field("description")): ?>
    <meta name="description" content="<?php echo the_field('description'); ?>">
    <?php else: ?>
    <meta name="description" content="<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
    <?php 
    $des = get_the_content();
    $des = strip_tags($des);
    $des = str_replace(array("\r\n"," "), '', $des);
    $desp = mb_substr($des, 0, 120, "UTF-8");
    echo $desp;
    ?>
    <?php endwhile; ?><?php endif; ?>">
    <?php endif; ?>
  <!-- アーカイブページ -->
  <?php elseif(is_archive()): ?>
    <?php if(!is_paged()): ?>
       <?php
       // タクソノミーが blog_tag か result_tag かを確認する
       if (is_tax('blog_tag')) {
           $term = get_queried_object();
           $title = $term->name; // タクソノミーの名前を取得
       } elseif (is_tax('result_tag')) {
           $term = get_queried_object();
           $title = $term->name; // タクソノミーの名前を取得
       } else {
           $title = single_term_title('', false); // デフォルトのタイトル取得
       }
       ?>
       <title><?php echo esc_html($title); ?> | きたむらミュージックスクール</title>
       <meta name="description" content="きたむらミュージックスクール公式ホームページの
       <?php echo esc_html($title); ?>タクソノミーアーカイブページです。">
    <?php else: ?>
       <title><?php echo esc_html($title); ?>タクソノミーアーカイブ 
       <?php show_page_number(''); ?>ページ目  | きたむらミュージックスクール</title>
       <meta name="description" content="きたむらミュージックスクール公式ホームページの
       <?php echo esc_html($title); ?>タクソノミーアーカイブ <?php show_page_number(''); ?>ページ目です。">
    <?php endif; ?>
  <!-- 検索結果ページ -->
  <?php elseif(is_search()): ?>
    <title>検索結果 | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの検索結果ページです。">
  <!-- 404ページ -->
  <?php elseif(is_404()): ?>
    <title>お探しのページはございません | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの404ページです。">
  <!-- その他 -->
  <?php else: ?>
    <title><?php the_title(); ?> | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの
    <?php the_title(); ?>ページです。">
  <?php endif; ?>
  <?php wp_head(); ?>
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
      </div>
      <?php wp_head(); ?>
    </header>