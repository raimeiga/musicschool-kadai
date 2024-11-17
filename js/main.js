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
 // const remToPx = (rem) => rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
 const tableWrap = document.querySelector('.p-plan__table-wrap');
 if (tableWrap) {
   new SimpleBar(tableWrap, {
     autoHide: false,
     // scrollbarMaxSize: remToPx(10), // 10remをpxに変換して指定
   });
 }

 // お問い合わせ チェックボックス
 $('input[name="your-subject[]"]').change(function() {
   // チェックボックスが変更されたときに親要素に 'checked' クラスを追加
   $(this).parent().toggleClass('checked');
 });
});






// //ヘッダー遅延・ヘッダーナビメニューの表示崩れ防止
// $(function() {
//  $('body').show();
// });


// $(function() {
 
//  // 検証ツールでヘッダーを見て、問い合わせボタンのid（menu-item-172）を確認し、
//  // それに、静的サイトでつくったスタイル（c-btn c-btn--header pc）を加える措置
//  // イベントにするというより、$(function() {の真下に書けば、読み込みと同時に発火し、
//  //  スタイルが追加されるって仕組み。
//  $('#menu-item-172').addClass('c-btn c-btn--header pc');

//  // ハンバーガー
//  $('.c-hamburger').click(function(){
//    $(this).toggleClass('active')
//    $('.header-nav').toggleClass('active')
//  })

//  $('.header__nav ul li a').click(function(){
//    $('.c-hamburger').removeClass('active')
//    $('.header-nav').removeClass('active')
//  });
 
//  // FVのスライダー
//  $('.js-slider').slick({ 
//   // centerMode: true,
//    autoplay: false, 
//    arrows: true,
//    slidesToShow: 3, // 3枚ずつ表示
//    slidesToScroll: 1, // 1枚ずつスクロール
//    prevArrow: '<button type="button" class="slick-prev"><img src="' + arrowPrevPath + '" alt="Previous"></button>',  
//    nextArrow: '<button type="button" class="slick-next"><img src="' + arrowNextPath + '" alt="Next"></button>',
//    responsive: [
//      {
//        breakpoint: 768,
//        settings: {      
//          slidesToShow: 1, // 1枚表示
//          slidesToScroll: 1,
//          prevArrow: '<button type="button" class="slick-prev"><img src="' + arrowPrevPath + '" alt="Previous"></button>',  
//          nextArrow: '<button type="button" class="slick-next"><img src="' + arrowNextPath + '" alt="Next"></button>',     
//        }
//      }
//    ]
//  });

//  // アコーディオンメニューの初期化とクリックイベント
//  $('.p-qa-list__a').hide(); // 初期状態で非表示

//  $('.p-qa-list__q').on('click', function() {
//    $(this).toggleClass('active'); // 矢印の回転を制御
//    // $(this).addClass('active'); // 矢印の回転を制御
//    $(this).next('.p-qa-list__a').slideToggle(); // 対応する要素を開閉
//  });

//  $('.p-qa-list__a').on('click', function() {
//    $(this).slideUp(); // 閉じる
//    $(this).prev('.p-qa-list__q').removeClass('active'); // 矢印をリセット
//  });

//  // トップに戻るボタンの表示・非表示の切り替え
//  $(window).on('scroll', function() {
//   const scrollTop = $(this).scrollTop();
//   const footerOffset = $('footer').offset().top; // footerの上端の位置を取得
//   const windowHeight = $(window).height();

//   console.log("Footer offset:", footerOffset); // footerの位置をログに出力
  
//   // スクロール位置が200px以上の場合
//   if (scrollTop > 200) {
//     $('.c-top-back-btn, .c-btn,.c-top-back-btn--91-79,.c-top-back-btn--30-18').addClass('active');
//   } else {
//     $('.c-top-back-btn, .c-btn,.c-top-back-btn--91-79,.c-top-back-btn--30-18').removeClass('active');
//   }

//   // トップに戻るボタン、問い合わせボタン（footerまでスクロールした場合）
//   if (scrollTop >= footerOffset - windowHeight) { // footerの高さを278に設定
//     $('.c-top-back-btn--91-79').addClass('fixed-position-long'); // footerの上端から上部9.1remに固定
//     $('.c-top-back-btn--30-18').addClass('fixed-position-short'); // footerの上端から上部9.1remに固定
//     $('.c-btn').addClass('fixed-position-con'); 
//    } else {
//     $('.c-top-back-btn--91-79').removeClass('fixed-position-long'); // footerの上端から上部9.1remに固定
//     $('.c-top-back-btn--30-18').removeClass('fixed-position-short'); // footerの上端から上部9.1remに固定
//     $('.c-btn').removeClass('fixed-position-con'); 
//   }
// });
 
//  // SimpleBarの初期化
//  // const tableWrap = document.querySelector('.p-plan__table-wrap');
//  // if (tableWrap) {
//  //   new SimpleBar(tableWrap, {
//  //     autoHide: false,  // スクロールバーを常に表示
//  //     scrollbarMaxSize: 120, // スクロールバーの最大サイズ  
//  //   });
//  // }

// // 1remのピクセル値を取得
// const remToPx = (rem) => rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
// // rem値をピクセルに変換して設定
// const tableWrap = document.querySelector('.p-plan__table-wrap');
// if (tableWrap) {
//   new SimpleBar(tableWrap, {
//     autoHide: false,  // スクロールバーを常に表示
//     // scrollbarMaxSize: remToPx(10), // 10remをpxに変換して指定
//   });
// }

// });

// // //お問い合わせ チェックボックス
// $(function(){
//  $('input[name="your-subject[]"]').change(function(){
//    // チェックボックスが変更されたときに親要素に 'checked' クラスを追加
//    $(this).parent().toggleClass('checked');
//  });
// });
