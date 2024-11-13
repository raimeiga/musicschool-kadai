<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
    <main>
      <div class="p-mv">
        <div class="p-mv__image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact_send-sp.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_send.jpg" alt="404 not found">
          </picture> 
        </div>
        <div class="p-mv__contents">
          <h1 class="p-mv__title" >404 not found</h1>
        </div>  
      </div>    
      
      <div class="p-contact-send">
        <div class="p-contact-send__inner404 l-inner ">
          <p>申し訳ございませんが、お探しのページが見つかりませんでした。<br>
             お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
          </p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn c-btn--contact-page">ホームへ戻る</a>
        </div>
      </div>
    </main>    

<!-- フッターのテンプレパーツの読み込み -->
<?php get_footer(); ?>