<div class="p-blog-details-main__related-articles p-blog-details-main-related-articles">
  <?php
    $terms = get_the_terms($post->ID, $args['post_type'].'_tag');
    if(!empty($terms)):
    foreach ( $terms as $term ):
      $args = array(
        'posts_per_page' => 3,
        'post_type' => $args['post_type'],
        'taxonomy' => $args['post_type'].'_tag',
        'term' => $term->slug,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $the_query = new WP_Query($args);
  ?>
  <div class="p-blog-details-main-related-articles__label">
    <p>関連記事</p>
  </div>                       
  <div class="p-blog-details-main-related-article__lists">   
    <?php if( $the_query->have_posts() ):
    while( $the_query->have_posts() ): $the_query->the_post(); ?> 
      <a href="<?php echo get_permalink($post->ID); ?>" class="p-blog-details-main-related-article__list">
        <div class="p-blog-details-main-related-article__image <?php echo ($args['post_type'] === 'result') ? 'result-image' : 'blog-image'; ?>">
          <?php
            // アイキャッチ画像があるか確認
            if ( has_post_thumbnail() ):
                // アイキャッチ画像があればその画像を表示
                the_post_thumbnail('small'); // サイズは必要に応じて変更
            else:
                // アイキャッチ画像がない場合にダミー画像を表示
                echo '<img src="' . get_template_directory_uri() . '/images/dummy-image.jpg" alt="ダミー画像">';
            endif;
            ?>
        </div>
        <p class="c-caption c-caption--w80"><?php echo $term->name; ?></p>
        <div class="p-blog-details-main-related-article__text u-flex-1">
          <p>
            <?php echo get_the_title(); ?>
          </p>
          <time datetime="the_time('Y-m-d')" class="p-blog-details-main__date"><?php the_time('Y.m.d') ?></time>
        </div>                 
      </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>  
  </div>
</div>