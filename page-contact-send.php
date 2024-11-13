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

      <div class="p-contact-send">
        <div class="p-contact-send__inner l-inner">
          <p>お問い合わせいただきありがとうございました。<br>
             内容確認後、担当者よりメールにてご連絡いたします。
          </p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn c-btn--contact-page">ホームへ戻る</a>
         </div>
      </div>
    </main>

 <!-- フッターのテンプレパーツの読み込み -->
 <?php get_footer(); ?>