jQuery(function($) {
 // ヘッダー遅延・ヘッダーナビメニューの表示崩れ防止
 $('body').show();

 // 検証ツールでヘッダーを見て、問い合わせボタンのid（menu-item-172）を確認し、それにスタイルを加える
 $('#menu-item-172').addClass('c-btn c-btn--header pc');

 // ハンバーガーメニュー
 $('.c-hamburger').click(function() {
   $(this).toggleClass('active');
   $('.header-nav').toggleClass('active');
 });

 $('.header__nav ul li a').click(function() {
   $('.c-hamburger').removeClass('active');
   $('.header-nav').removeClass('active');
 });

 // FVのスライダー
 $('.js-slider').slick({
   autoplay: false,
   arrows: true,
   slidesToShow: 3, // 3枚ずつ表示
   slidesToScroll: 1, // 1枚ずつスクロール
   prevArrow: '<button type="button" class="slick-prev"><img src="' + arrowPrevPath + '" alt="Previous"></button>',
   nextArrow: '<button type="button" class="slick-next"><img src="' + arrowNextPath + '" alt="Next"></button>',
   responsive: [
     {
       breakpoint: 768,
       settings: {
         slidesToShow: 1, // 1枚表示
         slidesToScroll: 1,
         prevArrow: '<button type="button" class="slick-prev"><img src="' + arrowPrevPath + '" alt="Previous"></button>',
         nextArrow: '<button type="button" class="slick-next"><img src="' + arrowNextPath + '" alt="Next"></button>',
       }
     }
   ]
 });

 // アコーディオンメニューの初期化とクリックイベント
 $('.p-qa-list__a').hide(); // 初期状態で非表示

 $('.p-qa-list__q').on('click', function() {
   $(this).toggleClass('active'); // 矢印の回転を制御
   $(this).next('.p-qa-list__a').slideToggle(); // 対応する要素を開閉
 });

 $('.p-qa-list__a').on('click', function() {
   $(this).slideUp(); // 閉じる
   $(this).prev('.p-qa-list__q').removeClass('active'); // 矢印をリセット
 });

 // トップに戻るボタンの表示・非表示の切り替え
 $(window).on('scroll', function() {
   const scrollTop = $(this).scrollTop();
   const footerOffset = $('footer').offset().top; // footerの上端の位置を取得
   const windowHeight = $(window).height();

   // スクロール位置が200px以上の場合
   if (scrollTop > 200) {
     $('.c-top-back-btn, .c-btn, .c-top-back-btn--91-79, .c-top-back-btn--30-18').addClass('active');
   } else {
     $('.c-top-back-btn, .c-btn, .c-top-back-btn--91-79, .c-top-back-btn--30-18').removeClass('active');
   }

   // トップに戻るボタン、問い合わせボタン（footerまでスクロールした場合）
   if (scrollTop >= footerOffset - windowHeight) {
     $('.c-top-back-btn--91-79').addClass('fixed-position-long'); // footerの上端から上部9.1remに固定
     $('.c-top-back-btn--30-18').addClass('fixed-position-short'); // footerの上端から上部9.1remに固定
     $('.c-btn').addClass('fixed-position-con');
   } else {
     $('.c-top-back-btn--91-79').removeClass('fixed-position-long');
     $('.c-top-back-btn--30-18').removeClass('fixed-position-short');
     $('.c-btn').removeClass('fixed-position-con');
   }
 });

 // SimpleBarの初期化
 const tableWrap = document.querySelector('.p-plan__table-wrap');
 if (tableWrap) {
   new SimpleBar(tableWrap, {
     autoHide: false,
   });
 }

   // お問い合わせ チェックボックス
 $('input[name="your-subject[]"]').change(function() {
  // チェックボックスが変更されたときに親要素に 'checked' クラスを追加
  $(this).parent().toggleClass('checked');
});
});

 //送信ボタンを押した時のみバリデーションメッセージ表示
  jQuery(".form-submit").click(function () {
   jQuery(".wpcf7-form-control-wrap").addClass("is-show");
 });

 
 // single-related-area.phpの<p class="p-blog-details-main-related-article__title" data-title="<?php echo $post->post_title; ?>"></p>
 // で取得する関連記事のタイトルをPC画面なら32字、SP画面なら20字に設定
 function adjustTitleLength() {
   var width = window.innerWidth; // 現在の画面幅を取得
   var titles = document.querySelectorAll('.p-blog-details-main-related-article__title'); // タイトル要素を全て取得

   titles.forEach(function (title) {
     var originalTitle = title.getAttribute('data-title'); // 元のタイトルを取得
     var maxLength = (width <= 767) ? 20 : 32; // SP画面幅なら20文字、PC画面幅なら32文字を設定

     if (originalTitle.length > maxLength) {
       title.textContent = originalTitle.substring(0, maxLength) + '...'; // 最大文字数を超えていれば省略記号を付けて切り取る
     } else {
       title.textContent = originalTitle; // 最大文字数以内ならそのまま表示
     }
   });
 }

 // ページ読み込み時とウィンドウサイズ変更時に実行
 window.addEventListener('load', adjustTitleLength);
 window.addEventListener('resize', adjustTitleLength);

