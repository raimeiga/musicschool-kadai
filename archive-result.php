<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>
      <div class="p-mv">
        <div class="p-mv__image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result_list-mv-sp.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/result_list-mv.jpg" alt="卒業実績">
          </picture> 
        </div>
        <div class="p-mv__contents">
          <h1 class="p-mv__title" >卒業実績</h1>
        </div>  
      </div>    
       <!-- パンくずリストのテンプレパーツを読み込み -->
       <?php get_template_part('template-parts/breadcrumbs'); ?>

      <div class="p-result-list__inner l-inner">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'paged' => $paged,
          'post_type' => 'result',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>

        <h2 class="c-section-title25" >卒業実績一覧</h2>
        <div class="p-result-list__lists">
         <!-- 記事の取得 -->
         <?php if (have_posts()) : 
        $counter = 0;  // 記事のインデックスをカウント
        while (have_posts()) : the_post(); 
        $counter++; // 投稿のインデックスをカウント
      ?>
        <a href="<?php the_permalink(); ?>" class="p-result-list__list p-result-list-list">
          <div class="p-result-list-list__image">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('custom-size'); // 'custom-size'はカスタムサイズ
            } ?>
          </div>
          <p class="c-caption c-caption--w100">
            <?php if( has_term('', 'result_tag', $post->ID) ): 
              $post_term = get_the_terms($post->ID, 'result_tag'); 
              echo $post_term[0]->name; 
            endif; ?>
          </p>
          <!-- 最初の2つの記事には特別なクラスを付け、それ以降の記事には別のクラスを付ける -->
          <?php if ($counter <= 2) : ?>
            <h3 class="p-result-list-list__title--pad20"><?php the_title(); ?></h3>
          <?php else : ?>
            <h3 class="p-result-list-list__title"><?php the_title(); ?></h3>
          <?php endif; ?>
          <time datetime="the_time('Y-m-d')" class="p-result-list-list__time"><?php the_time('Y.m.d'); ?></time>
        </a>
      <?php endwhile; endif; ?>           
    </div>
        <!-- ページャーのテンプレ読み込み -->
        <?php get_template_part('template-parts/pager', '', $the_query); ?>
      </div><!-- p-result-list__inner l-innerの終わり -->
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