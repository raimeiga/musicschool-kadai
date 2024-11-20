<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
 
    <main>
     <div class="main">
       <div class="p-fv">
         <div class="p-fv__image">
           <picture>
             <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/fv-sp.jpg">
             <img src="<?php echo get_template_directory_uri(); ?>/images/fv.jpg" alt="「音楽で生きる」を叶えるミュージックスクール">
           </picture> 
         </div>
         <div class="p-fv__contents">
           <h1>「音楽で生きる」<br class="sp" >を叶える<br>ミュージックスクール</h1>
         </div>  
       </div>
     </div>

     <section class="concept">
       <div class="p-concept l-inner">
         <h2 class="p-top-title p-concept__title">全人類、<br class="sp">ミュージシャン計画。</h2>
         <p class="p-concept__text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
         <div class="p-concept__image">
           <picture>
             <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/semicircle-sp.png">
             <img src="<?php echo get_template_directory_uri(); ?>/images/semicircle.png" alt="私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています">
           </picture>
         </div>
         
         <div class="p-concept__flow p-concept-flow">
            <div class="p-concept-flow__detail p-concept-flow-detail">
              <p class="p-concept-flow-detail__en">Enthusiasm</p>
              <span class="p-concept-flow-detail__circle"></span>
              <p class="p-concept-flow-detail__ja">熱狂し</p>
            </div>
            <div class="p-concept-flow__detail p-concept-flow-detail">
              <p class="p-concept-flow-detail__en">Envision</p>
              <span class="p-concept-flow-detail__circle"></span>
              <p class="p-concept-flow-detail__ja">想像し</p>
            </div>
            <div class="p-concept-flow__detail p-concept-flow-detail">
              <p class="p-concept-flow-detail__en">Effulgent</p>
              <span class="p-concept-flow-detail__circle p-concept-flow-detail__circle-03"></span>
              <p class="p-concept-flow-detail__ja">輝く存在へ</p>
            </div>
         </div>
       </div>      
     </section>

     <section class="message">
       <div class="p-message__inner l-red-inner">      
          <h2 class="c-section-title30 p-message__title">音楽業界初！<br>収益化までサポートする<br class="sp">ミュージックスクール</h2>
          <p class="p-message__text">楽器や作詞作曲などの<br class="sp">技術・知識はもちろんのこと<br> 
             自分で稼ぎつづけるための<br class="sp">ビジネス面もサポートします！
          </p>
       </div>
     </section>

     <section class="reason">
       <div class="p-reason__inner l-inner">
         <h2 class="c-section-title30 p-reason__title">きたむらミュージック<br class="sp">スクールが選ばれる理由</h2>
         <div class="p-reason__contents" >
           <div class="p-reason__content p-reason-content">
             <div class="p-reason-content__image">
               <picture>
                 <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/reason01-sp.jpg">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/reason01.jpg" alt="技術面はプロによるマンツーマン授業！">
               </picture>
             </div>
             <div class="p-reason-content__textarea p-reason-content-textarea">
               <div class="p-reason-content-textarea__title u-flex-1">
                 <h2>技術面はプロによるマンツーマン授業！</h2>
               </div>
               <p class="p-reason-content-textarea__text u-flex-1">
                 第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。
               </p>
             </div>   
           </div>
           <div class="p-reason__content p-reason-content">
            <div class="p-reason-content__image">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/reason02-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/reason02.jpg" alt="収益化するためのビジネスサポート！">
              </picture>
            </div>
            <div class="p-reason-content__textarea p-reason-content-textarea">
              <div class="p-reason-content-textarea__title u-flex-1">
                <h2>収益化するためのビジネスサポート！</h2>
              </div>
              <p class="p-reason-content-textarea__text u-flex-1">
               コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
              </p>
            </div>   
           </div>
           <div class="p-reason__content p-reason-content">
            <div class="p-reason-content__image">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/reason03-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/reason03.jpg" alt="24時間365日使える練習ROOMを完備！">
              </picture>
            </div>
            <div class="p-reason-content__textarea p-reason-content-textarea">
              <div class="p-reason-content-textarea__title u-flex-1">
                <h2>24時間365日使える練習ROOMを完備！</h2>
              </div>
              <p class="p-reason-content-textarea__text u-flex-1">
               一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）           
              </p>
            </div>   
           </div>
         </div>
       </div>
     </section>     

     <section class="voice l-red-inner">
       <div class="p-voice__inner">
         <h2 class="c-section-title30">生徒さんたちの声</h2>      
         <?php
         $args = array(
             'posts_per_page' => 6,
             'post_type' => 'result',
             'orderby' => 'date',
             'order' => 'DESC'
         );
         $the_query = new WP_Query($args);
         ?>   
         <div class="p-voice__lists js-slider">
           <?php if($the_query->have_posts()) :
           while($the_query->have_posts()) : $the_query->the_post(); ?>
           <a href="<?php echo get_permalink($post->ID); ?>" >
             <div class="p-voice__list p-voice-list">
               <div class="p-voice-list__image">
                 <?php
                 $thumbnail_id = get_post_thumbnail_id($post->ID);
                 $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                 if (get_post_thumbnail_id($post->ID)):
                 ?>
                 <img src="<?php echo $thumb_url[0] ?>" alt="生徒の画像">
                 <?php endif; ?>
               </div>
               <p class="p-voice-list__name p-voice-list__name--my">
                 <?php echo get_post_meta(get_the_ID(), '職業', true); ?>
                 <?php echo get_post_meta(get_the_ID(), '名前', true); ?>さん
               </p>
               <p class="p-voice-list__text">
                 <?php if(mb_strlen(get_the_excerpt())>26) 
                 {$title= mb_substr(get_the_excerpt(),0,26); echo $title . '...';} 
                 else {echo mb_substr(get_the_excerpt(),0,26);} ?>               
               </p>
             </div>
           </a>
           <?php endwhile; ?>
           <?php endif; ?>
         </div>        
       </div>
     </section>          

     <section class="flow">   
       <div class="p-flow__inner l-inner">
         <h2 class="c-section-title30">ご利用の流れ</h2>
         <div class="p-flow__lists">
           <div class="p-flow__list p-flow-list">
             <!-- <p class="p-flow-list__circle">●</p> -->
             <p class="p-flow-list__item">お問い合わせ</p>
             <p class="p-flow-list__text u-flex-1">
               まずはフォームまたはメールにてお問い合わせください。<br>
               ヒアリングの日程を調整します。
             </p>
           </div>
           <div class="p-flow__list p-flow-list">
             <!-- <p class="p-flow-list__circle">●</p> -->
             <p class="p-flow-list__item">ヒアリング</p>
             <p class="p-flow-list__text u-flex-1">
              現在の技術面や将来の目標などをお伺いします。<br>
              悩みや不安な事もお気軽にご相談ください。
             </p>
           </div>
           <div class="p-flow__list p-flow-list">
             <!-- <p class="p-flow-list__circle">●</p> -->
             <p class="p-flow-list__item">プランのご提案</p>
             <p class="p-flow-list__text u-flex-1">
              ライフスタイルや目標によって最適なプランをご提案します。<br>
              継続できるようサポートいたします。
             </p>
           </div>
           <div class="p-flow__list p-flow-list">
           <!-- <p class="p-flow-list__circle">●</p> -->
            <p class="p-flow-list__item">ご入学</p>
            <p class="p-flow-list__text u-flex-1">
             お申し込み完了後、レッスンがスタートします。<br>
             マンツーマン指導なので、いつからでもスタートが可能です。
            </p>
           </div>
         </div>
       </div>
     </section>


     <section class="qa">
       <div class="p-qa__inner l-inner">
         <h2 class="c-section-title30">よくあるご質問</h2>
         <div class="p-qa__lists">
           <div class="p-qa__list p-qa-list">
             <div class="p-qa-list__q">
               <span class="p-qa-list__circle p-qa-list__circle-Q">Q</span>
               <p class="p-qa-list__text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
             </div>
             <div class="p-qa-list__a">
               <span class="p-qa-list__circle p-qa-list__circle-A">A</span>
               <p class="p-qa-list__text"> 回答が入ります。回答が入ります。回答が入ります。回答が入ります。</p>
             </div>
           </div>
           <div class="p-qa__list p-qa-list">
             <div class="p-qa-list__q">
               <span class="p-qa-list__circle p-qa-list__circle-Q">Q</span>
               <p class="p-qa-list__text">途中でプランを変更することは可能ですか？</p>
             </div>
             <div class="p-qa-list__a">
               <span class="p-qa-list__circle p-qa-list__circle-A">A</span>
               <p class="p-qa-list__text"> 途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
             </div>
           </div>
           <div class="p-qa__list p-qa-list">
             <div class="p-qa-list__q">
               <span class="p-qa-list__circle p-qa-list__circle-Q">Q</span>
               <p class="p-qa-list__text">入学金などの分割払いはできますか？</p>
             </div>
             <div class="p-qa-list__a">
               <span class="p-qa-list__circle p-qa-list__circle-A">A</span>
               <p class="p-qa-list__text"> 途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
             </div>
           </div>
           <div class="p-qa__list p-qa-list">          
             <div class="p-qa-list__q">
               <span class="p-qa-list__circle p-qa-list__circle-Q">Q</span>
               <p class="p-qa-list__text">休学することも可能ですか？</p>
             </div>
             <div class="p-qa-list__a">
               <span class="p-qa-list__circle p-qa-list__circle-A">A</span>
               <p class="p-qa-list__text"> 回答が入ります。回答が入ります。回答が入ります。回答が入ります。</p>
             </div>
           </div>                            
         </div>

       </div>
     </section>

     <section class="blog">
       <div class="p-blog__inner l-inner">
         <h2 class="c-section-title30">ブログ</h2>
         <div class="p-blog__lists">
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
           <?php if($the_query->have_posts()) :
           while($the_query->have_posts()) : $the_query->the_post(); ?>
           <a href="<?php echo get_permalink($post->ID); ?>" class="p-blog__list p-blog-list">            
             <div class="p-blog-list__image">
               <?php
               $thumbnail_id = get_post_thumbnail_id($post->ID);
               $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
               if (get_post_thumbnail_id($post->ID)) :
               ?>
                 <img src="<?php echo $thumb_url[0]; ?>" alt="ブログ画像">
               <?php endif; ?>
             </div>
             <p class="c-caption c-caption--w-pc80-sp90">
               <?php
               $terms = get_the_terms($post->ID, 'blog_tag');
               foreach ($terms as $term) :
                 echo $term->name;
               endforeach;
               ?>
             </p>
             <p class="p-blog-list__title">
               <?php if(!is_mobile()):
                 if(mb_strlen($post->post_title)>19) {
                 $title= mb_substr($post->post_title,0,19); echo $title . '...';} else {
                 echo $post->post_title;}
               else:
                 if(mb_strlen($post->post_title)>35) {
                 $title= mb_substr($post->post_title,0,35); echo $title . '...';} else {
                 echo $post->post_title;}
               endif; ?>
             </p>
             <time datetime="the_time('Y-m-d')" class="p-blog-list__time"><?php the_time('Y.m.d') ?></time>
           </a>
           <?php endwhile; ?>
           <?php endif; ?>
         </div>
         <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="p-blog__link">ブログ一覧へ</a>
       </div>
     </section>
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