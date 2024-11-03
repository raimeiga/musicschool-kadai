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
            <a href="">           
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--fb">   
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fb-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook">
                </picture>              
              </div>
            </a>
            <a href="">      
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--tw">         
                <picture>         
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/tw-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/tw.svg" alt="twitter">
                </picture>   
              </div>
            </a>
            <a href="">    
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--hatena">
                <picture>               
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/hatena-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/hatena.svg" alt="haten">
                </picture>  
              </div>
            </a>
            <a href="">    
              <div class="p-blog-details-main__sns-link p-blog-details-main__sns-link--line">
                <picture>                     
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/line-sp.svg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/line.svg" alt="line">
                </picture>
              </div>
            </a>
            <a href="">    
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
               
          
          <div class="p-blog-details-main__articles">
            <a href="blog_details.html">
              <div class="p-blog-details-main__article">
                <div class="p-blog-details-main__article-item-01">
                  <p class="p-blog-details-main__pre-article">◀︎ 前の記事</p>
                </div>
                <div class="p-blog-details-main__article-item-02">
                  <div class="p-blog-details-main__article-image pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details98.jpg" alt="フォロワーではなくファンを増やせとは？">
                  </div>
                  <p class="p-blog-details-main__article-title u-flex-1">タイトルが入ります。タイトルが入ります。タイトルが入</p>
                </div>
              </div>
            </a>
            <a href="blog_details.html">
             <div class="p-blog-details-main__article">
              <div class="p-blog-details-main__article-item-01">
                <p class="p-blog-details-main__next-article">次の記事 ▶︎</p>
              </div>
              <div class="p-blog-details-main__article-item-02">
                <div class="p-blog-details-main__article-image pc">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details98.jpg" alt="フォロワーではなくファンを増やせとは？">
                </div>
                <p class="p-blog-details-main__article-title u-flex-1">タイトルが入ります。タイトルが入ります。タイトルが入</p>
              </div>
            </div>
            </a>
          </div>    

          <div class="p-blog-details-main__related-articles p-blog-details-main-related-articles">
            <div class="p-blog-details-main-related-articles__label">
              <p>関連記事</p>
            </div>            
            <div class="p-blog-details-main-related-article__lists">              
                <div class="p-blog-details-main-related-article__list">
                  <div class="p-blog-details-main-related-article__image">
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-details-sp160.110.jpg">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details200.140.jpg" alt="フォロワーではなくファンを増やせとは？">
                    </picture>
                  </div>
                  <p class="c-caption c-caption--w80">ギター</p>
                  <div class="p-blog-details-main-related-article__text u-flex-1">
                    <p>タイトルが入ります。タイトル</p>
                    <time datetime="2024-10-01" class="p-blog-details-main__date">2024.10.01</time>
                  </div>                     
                </div>
              
                <div class="p-blog-details-main-related-article__list">
                  <div class="p-blog-details-main-related-article__image">
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-details-sp160.110.jpg">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details200.140.jpg" alt="フォロワーではなくファンを増やせとは？">
                    </picture>
                  </div>
                  <p class="c-caption c-caption--w80">ギター</p>
                  <div class="p-blog-details-main-related-article__text u-flex-1">
                    <p>タイトルが入ります。タイトル</p>
                    <time datetime="2024-10-01" class="p-blog-details-main__date">2024.10.01</time>
                  </div>                     
                </div>
              
                <div class="p-blog-details-main-related-article__list">
                 <div class="p-blog-details-main-related-article__image">
                   <picture>
                     <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-details-sp160.110.jpg">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details200.140.jpg" alt="フォロワーではなくファンを増やせとは？">
                   </picture>
                 </div>
                 <p class="c-caption c-caption--w80">ギター</p>
                 <div class="p-blog-details-main-related-article__text u-flex-1">
                   <p>タイトルが入ります。タイトル</p>
                   <time datetime="2024-10-01" class="p-blog-details-main__date">2024.10.01</time>
                 </div>                     
                </div>
              
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