<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <?php if(is_front_page()): ?>
    <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
    <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。">
  
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
    <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php the_title(); ?>ページです。">
    <?php endif; ?>
    
  <!-- 投稿ページ -->
<?php elseif(is_single()): ?>
  <?php if (is_singular('blog')): // single-blog.php の場合 ?>
    <title>ブログ タイトル「<?php the_title(); ?>」のページです。 | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページのブログ「<?php the_title(); ?>」のページです。">
  <?php elseif (is_singular('result')): // single-result.php の場合 ?>
    <title>卒業実績 タイトル「<?php the_title(); ?>」のページです。 | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの卒業実績「<?php the_title(); ?>」のページです。">
  <?php else: ?>
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
  <?php endif; ?>


  <!-- アーカイブページ archive-blog.php,archive-result.php,taxonomy-blog_tag.php,taxonomy-result_tag.php-->
  <?php elseif(is_archive()): ?>
  <?php if(!is_paged()): ?>
    <?php
    // タクソノミーが blog_tag か result_tag かを確認する
    if (is_post_type_archive('blog')) {
        // archive-blog.phpの場合
        $title = 'ブログ一覧';
    } elseif (is_post_type_archive('result')) {
        // archive-result.phpの場合
        $title = '卒業実績一覧';
    } elseif (is_tax('blog_tag')) {
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
    <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php echo esc_html($title); ?>のページです。">
    <?php else: ?>
      <?php
      // ページ番号がある場合
      if (is_post_type_archive('blog')) {
          // archive-blog.phpの場合
          $title = 'ブログ一覧';
      } elseif (is_post_type_archive('result')) {
          // archive-result.phpの場合
          $title = '卒業実績一覧';
      } else {
          $title = single_term_title('', false); // デフォルトのタイトル取得
      }
      ?>
      <title><?php echo esc_html($title); ?> | きたむらミュージックスクール</title>
      <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php echo esc_html($title); ?>の<?php show_page_number(''); ?>ページ目です。">
    <?php endif; ?> 
 
  <!-- 検索結果ページ -->
  <?php elseif(is_search()): ?>
    <title>検索結果: <?php echo get_search_query(); ?> | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの「<?php echo get_search_query(); ?>」の検索結果ページです。">

  <!-- 404ページ -->
  <?php elseif(is_404()): ?>
    <title>お探しのページはございません | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの404ページです。">

  <!-- その他 -->
  <?php else: ?>
    <title><?php the_title(); ?> | きたむらミュージックスクール</title>
    <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php the_title(); ?>ページです。">
  <?php endif; ?>

  <!-- Google構造化データ マークアップ -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "きたむらミュージックスクール"
  }
  </script>

  <?php wp_head(); ?>
</head>

<body style="display: none;">
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
              <h2>きたむら<br class="pc"><span>ミュージックスクール</span></h2>
            </div>  
          </a>   
        </div>
        <div class="p-header__right p-header-right">      
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
