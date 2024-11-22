<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>
      <!-- メインビュー -->
      <div class="p-mv">
        <div class="p-mv__image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-list-mv-sp.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-list-mv.jpg" alt="ブログ">
          </picture> 
        </div>
        <div class="p-mv__contents">
          <h1 class="p-mv__title" >ブログ</h1>
        </div>  
      </div>    
      <!-- パンくずリストのテンプレパーツを読み込み -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>

      <div class="p-blog__inner-blog-list l-inner">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'paged' => $paged,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>

        <h2 class="c-section-title25" >ブログ一覧</h2>
        <div class="p-blog__lists-column">
         <!-- 記事の取得 -->
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-blog__list-row p-blog-list">
              <div class="p-blog-list__image-height-longer">
                <?php if (has_post_thumbnail()) {
                   the_post_thumbnail('custom-size'); // 'custom-size'はカスタムサイズ
                  } else {
                   // アイキャッチ画像がない場合にダミー画像を表示
                   echo '<img src="' . get_template_directory_uri() . '/images/dummy-image.jpg" alt="ダミー画像">';
                  } 
                ?>
              </div>
              <p class="c-caption c-caption--w-pc80-sp90">
                <?php if( has_term('', 'blog_tag', $post->ID) ): $post_term = get_the_terms($post->ID, 'blog_tag'); 
                 echo $post_term[0]->name; endif; ?>
              </p>
              <div class="p-blog-list__text">               
               <h3 class="p-blog-list__title-mb">
                 <?php 
                   if(mb_strlen($post->post_title)>35) 
                   {$title= mb_substr($post->post_title,0,35); echo $title . '...';} 
                   else {echo $post->post_title;} 
                  ?> 
                </h3>
               <time datetime="the_time('Y-m-d')" class="p-blog-list__time-side-change"><?php the_time('Y.m.d'); ?></time>
                <p class="p-blog-list__article"><?php echo get_the_excerpt(); ?></p>
              </div>
            </a>
          <?php endwhile; endif; ?>  
        </div>
        <!-- ページャーのテンプレ読み込み -->
        <?php get_template_part('template-parts/pager', '', $the_query); ?>
      </div>  
    </main>

    <!-- トップに戻るボタン -->
    <a href="#" class="c-top-back-btn c-top-back-btn--91-79 u-scroll-show">
     <div class="c-top-back-btn__icon">
       <img src="<?php echo get_template_directory_uri(); ?>/images/top-back-btn.svg" alt="top">
     </div>
    </a>
    <!-- 問い合わせボタン -->
    <?php get_template_part('template-parts/contact-button'); ?>
    
       
    <!-- フッターのテンプレパーツの読み込み -->
    <?php get_footer(); ?>