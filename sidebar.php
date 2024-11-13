<!-- サイドバー -->
<div class="p-sidebar">      
  <div class="p-sidebar__mail p-sidebar-mail">
    <div class="p-sidebar__title">
      <h3>無料メールマガジン</h3>
    </div>
    <a href="">       
      <div class="p-sidebar-mail__banner">
        <div class="p-sidebar-mail__banner-image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/banner-sp.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
          </picture>
        </div>
        <p>バナー広告</p>                   
      </div>   
    </a>                     
  </div>

  <div class="p-sidebar__blog-search p-sidebar-blog-search">
    <div class="p-sidebar__title">
      <h3>ブログ内を検索</h3>
    </div>            
    <div class="p-sidebar-blog-search__wrap">   
      <!-- searchform.ph（検索フォーム）の読み込み -->
      <?php get_search_form(); ?>
    </div>
  </div>   

  <div class="p-sidebar__reco-articles p-sidebar-reco-articles">
    <div class="p-sidebar__title">
      <h3>おすすめの記事</h3>
    </div> 
    <?php
    $args = array(
      'posts_per_page' => 3,
      'post_type' => 'blog',
      'taxonomy' => 'blog_recommend',
      'term' => 'on',
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if( $the_query->have_posts() ):
    while( $the_query->have_posts() ): $the_query->the_post(); ?>
    <a href="<?php echo get_permalink($post->ID); ?>" class="p-sidebar-reco-articles__list">                
      <div class="p-sidebar-reco-articles__image">    
      <?php
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
      if ( get_post_thumbnail_id($post->ID) ):
      ?>
        <img src="<?php echo $thumb_url[0]; ?>" alt="">
      <?php endif ;?>             
      </div>
      <div class="p-sidebar-reco-articles__title u-flex-1">
        <p>
          <?php if(mb_strlen($post->post_title)>23) {
          $title= mb_substr($post->post_title,0,23); echo $title . '...';} 
          else {echo $post->post_title;} ?>
        </p>
      </div>
    </a>                       
    <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>

  <div class="p-sidebar__category p-sidebar-category">
    <div class="p-sidebar__title">
      <h3>カテゴリー</h3>
    </div>
    <?php
    $terms = get_terms('blog_tag');
    foreach ( $terms as $term ):
    ?>
    <p class="p-sidebar-category__name">
      <a href="<?php echo esc_url( home_url( '/blog_tag/'.$term->slug ) ); ?>"
      class="p-sidebar-category__name-link"><?php echo $term->name; ?>
      </a>
    </p>
    <?php endforeach; ?>
  </div>
</div><!-- サイドバーの終わり -->