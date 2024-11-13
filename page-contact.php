<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>

    <main>
     <div class="p-mv">
       <div class="p-mv__image">
         <picture>
           <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact_send-sp.jpg">
           <img src="<?php echo get_template_directory_uri(); ?>/images/contact_send.jpg" alt="お問い合わせ">
         </picture> 
       </div>
       <div class="p-mv__contents">
         <h1 class="p-mv__title" >お問い合わせ</h1>
       </div>  
     </div>    

      <!-- パンくずリストのテンプレパーツを読み込み -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>

     <div class="p-contact">
       <div class="p-contact__inner l-inner">
         <p>当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
            通常３営業日以内にメールにてご連絡させていただきます。
         </p>
         <?php
         if (have_posts()) :
           while (have_posts()) : the_post();

             remove_filter('the_content', 'wpautop');
             the_content();

           endwhile;
         endif;
         ?>
         <?php echo do_shortcode('[contact-form-7 id="2cf5623" title="お問い合わせ"]'); ?>
       </div>       
     </div>     
    </main>
    
    <!-- トップに戻るボタン -->
    <a href="#" class="c-top-back-btn c-top-back-btn--30-18 u-scroll-show">
     <div class="c-top-back-btn__icon">
       <img src="<?php echo get_template_directory_uri(); ?>/images/top-back-btn.svg" alt="top">
     </div>
    </a>

<!-- フッターのテンプレパーツの読み込み -->
<?php get_footer(); ?>

  
  
