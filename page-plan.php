<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>
   
    <main>
     <!-- メインビュー -->
     <div class="p-mv">
       <div class="p-mv__image">
         <picture>
           <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/plan-sp.jpg">
           <img src="<?php echo get_template_directory_uri(); ?>/images/plan.jpg" alt="プラン・料金">
         </picture> 
       </div>
       <div class="p-mv__contents">
         <h1 class="p-mv__title" >プラン・ 料金</h1>
       </div>  
     </div>    
    <!-- パンくずリストのテンプレパーツを読み込み -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

     <!-- p-plan -->
     <div class="p-plan__inner l-inner">
       <h2 class="c-section-title25" >料金体系</h2>
       <div class="p-plan__btns">
         <div class="c-btn c-btn--plan">
           <p>入会金 39,000円</p>
         </div>         
         <div class="c-btn c-btn--plan">
           <p>月額料金</p>
         </div>
       </div>
       <p class="p-plan__text">きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
       <h2 class="c-section-title25 p-plan__title" >プラン内容・月額料金</h2>
       <div class="p-plan__table-wrap">
         <table class="p-plan__table p-plan-table">
           <thead>
             <tr class="p-plan-table__head">
              <th></th>
              <th class="p-plan-table__head-th  p-plan-table__head--bg-blk">ベーシック<br class="sp">プラン</th>
              <th class="p-plan-table__head-th  p-plan-table__head--bg-red"><span class="p-plan-table__head--recommend">おすすめ</span><br>スタンダード<br class="sp">プラン</th>
              <th class="p-plan-table__head-th  p-plan-table__head--bg-blk">プレミアム<br class="sp">プラン</th>
             </tr>
           </thead>
           <tbody>
             <tr class="p-plan-table__body  p-plan-table-body">
               <td class="p-plan-table-body__category--price">月額料金</td>
               <td class="p-plan-table-body__price">39,000円</td>
               <td class="p-plan-table-body__price">59,000円</td>
               <td class="p-plan-table-body__price">128,000円</td>
             </tr>
             <tr class="p-plan-table__body  p-plan-table-body  p-plan-table__body--grey">
              <td class="p-plan-table-body__category">マンツーマン授業</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span><br>週１回</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--red"></span><br>週２回</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span><br>無制限</td>
             </tr>
             <tr class="p-plan-table__body  p-plan-table-body">
              <td class="p-plan-table-body__category">ビジネス基本講座</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span></td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--red"></span></td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span></td>
            </tr>
            <tr class="p-plan-table__body  p-plan-table-body  p-plan-table__body--grey">
              <td class="p-plan-table-body__category">練習ROOM利用</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span><br>月10時間</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--red"></span><br>月20時間</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span><br>無制限</td>
            </tr>
            <tr class="p-plan-table__body  p-plan-table-body">
              <td class="p-plan-table-body__category">ビジネスコンサル</td>
              <td class="p-plan-table-body__item"><span class="c-line"></span></td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--red"></span><br>月２回</td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span><br>月３回</td>
            </tr>
            <tr class="p-plan-table__body  p-plan-table-body  p-plan-table__body--grey">
              <td class="p-plan-table-body__category">コミュニティ<br class="sp">参加資格</td>
              <td class="p-plan-table-body__item"><span class="c-line"></span></td>
              <td class="p-plan-table-body__item"><span class="c-line"></span></td>
              <td class="p-plan-table-body__item"><span class="c-circle c-circle--black"></span></td>
            </tr>          
          </tbody>          
         </table>    
       </div>    
       <p class="p-plan-table__attention">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>                  
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