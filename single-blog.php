<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>
      <!-- パンくずリストのテンプレパーツを読み込み -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>

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
          <!-- 関連記事のテンプレパーツ読み込み -->
          <?php get_template_part('template-parts/single-related-area', '', $args = array('post_type' => 'blog')); ?>      
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