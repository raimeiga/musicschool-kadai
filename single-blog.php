<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>
      <!-- パンくずリスト -->
       <div class="c-breadcrumb-wrap">
         <div class="c-breadcrumb">
           <a href="index.html" class="c-breadcrumb__text c-breadcrumb__text--2-lines">ホーム</a>
           <p class="c-breadcrumb__text c-breadcrumb__text--2-lines">&#62;</p>
           <a href="blog_list.html" class="c-breadcrumb__text c-breadcrumb__text--2-lines">ブログ</a>
           <p class="c-breadcrumb__text c-breadcrumb__text--2-lines">&#62;</p>
           <a href="blog_details.html" class="c-breadcrumb__text c-breadcrumb__text--2-lines">ギター</a>
           <p class="c-breadcrumb__text c-breadcrumb__text--2-lines">&#62;</p><br class="sp">
           <p class="c-breadcrumb__text c-breadcrumb__text--blog-details">アルペジオが劇的に向上する３つの習慣</p>
         </div>
       </div>

      <?php while ( have_posts() ): the_post(); ?>
      <div class="p-blog-details__inner l-inner">
        <div class="p-blog-details__main p-blog-details-main">            
          <div class="p-blog-details-main__01-image">            
            <?php the_post_thumbnail('large'); ?>
          </div>  
          <p class="c-caption c-caption--w-pc80-sp90"> 
            <?php if( has_term('', 'blog_tag', $post->ID) ): $post_term = get_the_terms($post->ID, 'blog_tag'); 
            echo $post_term[0]->name; endif; ?>
          </p>          
          <h1 class="p-blog-details-main__01-title"><?php the_title(); ?></h1>
          <time datetime="the_time('Y-m-d')" class="p-blog-details-main__date"><?php the_time('Y.m.d'); ?></time>
          
          <div class="p-blog-details-main__sns-links">
            <?php
              $url = get_permalink();
              $title = get_the_title();
            ?>
            <a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url ); ?>" target="_blank" rel="noopener">       
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--fb">   
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fb-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook">
                </picture>              
              </div>
            </a>
            <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url . '&text=' . $title ); ?>" target="_blank" rel="noopener">      
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--tw">         
                <picture>         
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/tw-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/tw.svg" alt="twitter">
                </picture>   
              </div>
            </a>
            <a href="<?php echo esc_url( 'http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title ); ?>" target="_blank" rel="noopener">
            <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--hatena">
                <picture>               
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hatena-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/hatena.svg" alt="haten">
                </picture>  
              </div>
            </a>
            <a href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $url . $title ); ?>" target="_blank" rel="noopener">            
            <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--line">
                <picture>                     
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/line-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/line.svg" alt="line">
                </picture>
              </div>
            </a>
            <a href="<?php echo esc_url( 'http://getpocket.com/edit?url=' . $url . '&title=' . $title ); ?>" target="_blank" rel="noopener">            
            <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--pocket">
                <picture>                 
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pocket-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pocket.svg" alt="pocket">
                </picture>   
              </div>   
            </a>             
          </div>
          
          <div class="p-blog-details-main__under-sns-links">
            <?php the_content(); ?>
          </div>     
               
          <!-- 前後記事のテンプレパーツ読み込み -->
          <?php get_template_part('template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'blog')); ?>

          <div class="p-blog-details-main__related-articles p-blog-details-main-related-articles">
            <?php
            $terms = get_the_terms($post->ID, 'blog_tag');
            if(!empty($terms)):
            foreach ( $terms as $term ):
              $args = array(
                'posts_per_page' => 3,
                'post_type' => 'blog',
                'taxonomy' => 'blog_tag',
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
                  <div class="p-blog-details-main-related-article__image">
                    <?php
                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                    if ( get_post_thumbnail_id($post->ID) ):
                    ?>
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-details-sp160.110.jpg">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details200.140.jpg" alt="フォロワーではなくファンを増やせとは？">
                    </picture>
                    <?php endif; ?>
                  </div>
                  <p class="c-caption c-caption--w80"><?php echo $term->name; ?></p>
                  <div class="p-blog-details-main-related-article__text u-flex-1">
                    <p>
                    <?php if(mb_strlen($post->post_title)>32) 
                    {$title= mb_substr($post->post_title,0,32); echo $title . '...';} 
                    else {echo $post->post_title;} ?>
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
        </div><!-- p-blog-details__mainの終わり -->

        <!-- サイドバーのテンプレ読み込み -->
        <?php get_sidebar(); ?>

      </div><!-- p-blog-details__inner l-innerの終わり -->
      <?php endwhile; ?>
    </main>
    
    <!-- トップに戻るボタン -->  
    <a href="#" class="c-top-back-btn c-top-back-btn--91-79 u-scroll-show">
      <div class="c-top-back-btn__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top-back-btn.svg" alt="top">
      </div>
    </a>    
    <!-- 問い合わせボタン -->
    <a href="contact_form.html" class="c-btn c-btn--fixed u-scroll-show">お問い合わせ</a>
 
 <!-- フッターのテンプレパーツの読み込み -->
 <?php get_footer(); ?>