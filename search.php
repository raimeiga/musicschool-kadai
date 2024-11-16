<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>    
    <!-- パンくずリストのテンプレパーツを読み込み -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>
     
      <div class="p-search__inner l-inner">
        <div class="p-search__top-text">
          <?php if ( !empty(get_search_query()) ): ?>
          <?php if (have_posts()): ?>
          <?php
          $paged = (get_query_var('paged')) ? absint(get_query_var('paged')): 1;
          $args = array(
          'paged' => $paged,
          'post_type' => array('blog','result'),
          'orderby' => 'date',
          'order' => 'DESC',
          's' => get_search_query()
          );
          $the_query = new WP_Query($args);
          ?>
          <h1>「<span class="p-search__top-text-span"><?php the_search_query(); ?></span>」の検索結果</h1>
          <p><?php echo $the_query->found_posts; ?>件</p>
        </div>
        <div class="p-search__lists">
          <?php if ( $the_query->have_posts()): while ( $the_query->have_posts()): $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="p-blog-list p-blog__list-row">
              <div class="p-blog-list__image-height-longer">
              <?php
              $thumbnail_id = get_post_thumbnail_id($post->ID);
              $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
              if (get_post_thumbnail_id($post->ID)) :
              ?>
              <img src="<?php echo $thumb_url[0]; ?>" alt="ブログの画像">
              <?php endif; ?>
              </div>
              <p class="c-caption c-caption--w-pc80-sp90">
              <?php if (get_post_type() === 'blog'):
                $terms = get_the_terms($post->ID, 'blog_tag');
                foreach ($terms as $term):
                  echo $term->name;
                endforeach;
              endif; ?>
              <?php if (get_post_type() === 'result'):
                $terms = get_the_terms($post->ID, 'result_tag');
                foreach ($terms as $term):
                  echo $term->name;
                endforeach;
              endif; ?>
              </p>
              <div class="p-blog-list__text">
                <p class="p-blog-list__title-mb">
                  <?php if(mb_strlen($post->post_title)>37) {
                  $title= mb_substr($post->post_title,0,37); echo $title . '...';} else {
                  echo $post->post_title;} ?>
                </p>
                <time datetime="the_time('Y-m-d')" class="p-blog-list__time-side-change"><?php the_time('Y.m.d') ?></time>
                <p class="p-blog-list__article"><?php echo get_the_excerpt(); ?></p>
              </div>
            </div>
          </a>
            <?php endwhile; ?>
            <?php endif;//$the_query->have_posts() ?>
          <?php else://have_posts() ?>
          <div class="p-search-error__back-btn">
            <p class="p-search-error__text">検索されたキーワードにマッチする記事はありませんでした。</p>
            <div class="p-search-error__btn-wrap">
              <a onclick="history.back()" class="c-btn c-btn--contact-page">戻る</a>
            </div>
          </div>
          <?php endif;//if (have_posts() ?>
          <?php else://!empty(get_search_query()) ?>
          <div class="p-search-error__back-btn">
            <p class="p-search-error__text">検索キーワードが未入力です。</p>
            <div class="p-search-error__btn-wrap">
              <a onclick="history.back()" class="c-btn c-btn--contact-page">戻る</a>
            </div>
          </div>
         <?php endif;//!empty(get_search_query()) ?>
        </div>

        <!-- ページャーのテンプレ読み込み -->
        <?php if ( !empty(get_search_query()) ): ?>
          <?php if (have_posts()): ?>
            <?php get_template_part('template-parts/pager', '', $the_query); ?>
          <?php endif; ?>
        <?php endif; ?>  
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