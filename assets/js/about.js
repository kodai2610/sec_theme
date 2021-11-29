$(function(){
  //*** fadeIn ***//
  // triggerMargin = 0; //小さいほどすぐ発動
  triggerMargin = -200;
  // console.log(triggerMargin);
  //*** 画面固定してスクロール ***//
  // var fix = $('#js-scroll-obj');
  // var firstList = $('#js-scroll-first-list');
  // var lastList = $('#js-scroll-last-list');
  // var wh = $(window).height();
  
  //*** 画面固定してスクロール ***//
  var fix = $('#js-scroll-obj');
  var firstList = $('#js-scroll-first-list');
  var lastList = $('#js-scroll-last-list');
  var wh = $(window).height();
  var firstCenterBorder = firstList.offset().top + firstList.innerHeight() / 2 - wh / 2; //最初の要素が画面中央に来るときのwindow一番上
  var lastCenterBorder = lastList.offset().top + lastList.innerHeight() / 2 - wh / 2; //最後の要素が画面中央に来るときのwindow一番上
  var objCenterBorder = fix.offset().top + fix.innerHeight() / 2 - wh / 2;
  // var upLastMargin = 400;
  // var adjustMargin = 50;
  var scroll = 0;
  //関数

  const fixed = function () {
    if (fix.hasClass('is-notFixed-bottom')) {
      fix.removeClass('is-notFixed-bottom');
    }
    if (fix.hasClass('is-notFixed-up')) {
      fix.removeClass('is-notFixed-up');
    }
    fix.addClass('is-fixed');
  }

  const fixedCancelUp = function () {
    if (fix.hasClass('is-fixed')) {
      fix.removeClass('is-fixed');
    }
    fix.addClass('is-notFixed-up');
  }

  const fixedCancelDown = function () {
    if (fix.hasClass('is-fixed')) {
      fix.removeClass('is-fixed');
    }
    fix.addClass('is-notFixed-bottom');
  }
  $(window).on('scroll', function () {
    if (window.matchMedia('(max-width: 768px)').matches) {
      return;
    }
    if ($(this).scrollTop() > scroll) { //下スクロールの時の処理
      if ($(this).scrollTop() < firstCenterBorder) { //次の要素が可視範囲に入るまで
        fixedCancelUp();
      } else if (firstCenterBorder <= $(this).scrollTop() && $(this).scrollTop() <= lastCenterBorder) {
        fixed(); //次の要素が可視範囲に入るかつ最後の要素が画面中央に来るまで
      } else {
        fixedCancelDown(); // 消えたら
      }
    } else { //上スクロールの時の処理
      if ($(this).scrollTop() < firstCenterBorder) { //最初の要素が画面中央に来るときのwindow一番上
        fixedCancelUp();
      } else if (firstCenterBorder <= $(this).scrollTop() && $(this).scrollTop() <= lastCenterBorder) {
        fixed();
      } else {
        fixedCancelDown();
      }
    }
    scroll = $(this).scrollTop(); //最後のスクロール位置を保存して代入
  });

 
});



// 下記より荏隈
// Our memberのカードアニメーション
// スクロールしたら発動
$(window).scroll(function() {

  let sc = $(this).scrollTop(); //スクロール量
  let cardContentStartPos = $('.member').offset().top; //セクショントップの座標
  let cardContentScDis = sc - cardContentStartPos;

  if( cardContentStartPos > sc ) { //上に抜ける時
    $('.member .container').removeClass('card-follow card-unfollow').addClass('card-default');
  }
  else if ( 0 < cardContentScDis && cardContentScDis < 1200 ) {//発動時
    $('.member .container').removeClass('card-unfollow card-default').addClass('card-follow');
  }
  else { //下に抜ける時
    $('.member .container').removeClass('card-follow card-default').addClass('card-unfollow');
  }

  if ( cardContentScDis > 400 ) {
    $('.member-card--3').removeClass('unflip').addClass('flip');
    $('.member-box--3').removeClass('box-unflip').addClass('box-flip');
    $('.member-box--2').css('z-index', 70);
  } else {
    $('.member-card--3').removeClass('flip').addClass('unflip');
    $('.member-box--3').removeClass('box-flip').addClass('box-unflip');
    $('.member-box--2').css('z-index', 20);
  }

  if ( cardContentScDis > 800 ) {
    $('.member-card--2').removeClass('unflip2').addClass('flip');
    $('.member-box--2').removeClass('box-unflip').addClass('box-flip');
    $('.member-box--1').css('z-index',70);
  } else {
    $('.member-card--2').removeClass('flip').addClass('unflip2');
    $('.member-box--2').removeClass('box-flip').addClass('box-unflip');
    $('.member-box--1').css('z-index',10);
  }

});



// bounceアニメーション
var icons = document.querySelectorAll('.top-icons__icon');
window.addEventListener('load',function() {
  icons.forEach(icon => {
    const targetId = icon.dataset.id;
    // console.log(targetId);
    icon.id = targetId;
  });
});







//スクロールで固定

/* 戦略 
  // どこまでスクロールしたらまるが fixedにな
  // どこまでスクロールしたら丸が止まるのか

  // if( スクロールの量 > 最初のfuturesの位置の量) {
  //   丸をfixdedにする
  // } else if(スクロールの量 > 最後のfuturesの位置の量) {
  //   fixedを外す
  // } 

  ダウンスクロールの時
  if(スクロールの量 < 最初のfuturesの位置の量 - a1 ) {
    fixed解除
  } else if ( 最初のfuturesの位置の量 - a1 < スクロールの量 < 最後のfuturesの位置の量 - b1  ) {
    fixed
  } else {
    fixedを解除
  }
  アップスクロールの時
  if(スクロールの量 < 最初のfuturesの位置の量 - a2 ) {
    fixed解除
  } else if ( 最初のfuturesの位置の量 - a2 < スクロールの量 < 最後のfuturesの位置の量 - b2  ) {
    fixed
  } else {
    fixedを解除
  }

  var scroll = 0;
  $(window).on('scroll', function(){
    if($(this).scrollTop() < scroll ){
      //上スクロールの時の処理
    }else{
      //下スクロールの時の処理
    }
    scroll = $(this).scrollTop(); //最後のスクロール位置を保存して代入
  });
  */