<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>    
      <!-- パンくずリストのテンプレパーツを読み込み -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>  


      <?php while ( have_posts() ): the_post(); ?>
      <div class="p-result-details__inner l-inner">
        <div class="p-result-details__image">
          <?php 
           if ( has_post_thumbnail() ) :
             // アイキャッチ画像が設定されていればその画像を表示
             the_post_thumbnail('large');
           else :
             // アイキャッチ画像が設定されていない場合はダミー画像を表示
             echo '<img src="' . get_template_directory_uri() . '/images/dummy-image.jpg" alt="ダミー画像">';
           endif;
           ?>
          <p class="c-caption c-caption--w100">
            <?php if( has_term('', 'result_tag', $post->ID) ): ?> 
            <?php $post_term = get_the_terms($post->ID, 'result_tag'); echo $post_term[0]->name; ?> <?php endif; ?>
          </p>      
        </div>         
        <h1 class="p-result-details__title"><?php the_title(); ?></h1>
        <time datetime="the_time('Y-m-d')" class="p-result-details__date"><?php the_time('Y.m.d'); ?></time>
       
        <div class="p-result-details__table-area">
          <table class="p-result-details__table p-result-details-table">
            <tbody>
              <tr class="p-result-details-table__tr">
                <td class="p-result-details-table__label-01">名前</td>
                <td class="p-result-details-table__label-02"><?php echo get_post_meta($post->ID, '名前', true); ?></td>
              </tr>
              <tr class="p-result-details-table__tr">
                <td class="p-result-details-table__label-01">職業</td>
                <td class="p-result-details-table__label-02"><?php echo get_post_meta($post->ID, '職業', true); ?></td>
              </tr>
              <tr class="p-result-details-table__tr">
                <td class="p-result-details-table__label-01">ジャンル</td>
                <td class="p-result-details-table__label-02"><?php echo get_post_meta($post->ID, 'ジャンル', true); ?></td>
              </tr>
              <tr class="p-result-details-table__tr">
                <td class="p-result-details-table__label-01">実績</td>
                <td class="p-result-details-table__label-02"><?php echo get_post_meta($post->ID, '実績', true); ?></td>
              </tr>
              <tr class="p-result-details-table__tr">
                <td class="p-result-details-table__label-01">SNS</td>
                <td class="p-result-details-table__label-02"><?php echo get_post_meta($post->ID, 'sns', true); ?></td>
              </tr>             
            </tbody>
          </table>
          <div class="p-result-details__text"><?php the_content(); ?></div>
        </div>
                  
        <!-- 前後記事のテンプレパーツ読み込み -->
        <?php get_template_part('template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'result')); ?>
        <!-- 関連記事のテンプレパーツ読み込み -->
        <?php get_template_part('template-parts/single-related-area', '', $args = array('post_type' => 'result')); ?>      
      
      </div><!--p-result-details__innerの終わり -->
      <?php endwhile; ?>
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