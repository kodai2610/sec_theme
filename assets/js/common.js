// menu button toggle
// $('.menu-button').click(function() {
//   $(this).toggleClass('menu-button--close');
// });

//hamburger
$(document).on("click", ".menu-button", function () {
  $(this).toggleClass("menu-button--close");

  if ($(this).hasClass("menu-button--close")) {
    $(".hamburger").css("left", "0");
    $("body").css("overflow-y", "hidden");
  } else {
    $(".hamburger").css("left", "100%");
    $("body").css("overflow-y", "unset");
  }
});

// page top scroll
$('.pageTop-box__text').click(function () {
  $('body,html').animate({
      scrollTop: 0
  }, 700);
  return false;
});

//*** fadeIn ***//

// var scrollAnimationElm = document.querySelectorAll('.fadein');
var scrollAnimationElm = document.querySelectorAll('.effect');
var triggerMargin = 300; //小さいほどすぐ発動
var scrollAnimationFunc = function(margin) {
    //scrollAnimationElmの数だけ繰り返す
    for(var i = 0; i < scrollAnimationElm.length; i++) {
        // var triggerMargin = 300;
        if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
            // console.log(triggerMargin);
            target = scrollAnimationElm[i].dataset.class;
            scrollAnimationElm[i].classList.add(target);
        }
    }
}

window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);


// loading
$(function() {
  var h = $(window).height();

  // $('#wrap').css('display','none');
  // $('#loader-bg ,#loader').height(h).css('display','block');
});

$(window).on('load', function () { //全ての読み込みが完了したら実行
  $('#loader-bg').delay(900).fadeOut(800);
  $('.loader-wrapper').delay(600).fadeOut(300);
});

// 5秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()', 1800);
});

function stopload(){
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
}


//headerを消す処理

let beforePos = 0;
// const lowerHeader1 = document.getElementById('lower-header1');
// const lowerHeader2 = document.getElementById('lower-header2');
// const lowerHeader3 = document.getElementById('lower-header3');

const lowerHeaders =
  [
    document.getElementById("lower-header1"),
    document.getElementById("lower-header2"),
    document.getElementById("lower-header3"),
  ];
function fadeHeader() {
  const border = 500;
  let scroll = window.pageYOffset;
  for(let i = 0; i < 2; i++) {
    if(border > scroll || scroll < beforePos) { //ボーダーに達していないかアップスクロールの時はヘッダー出現
      if(lowerHeaders[i].classList.contains('upMove')) {
        lowerHeaders[i].classList.remove('upMove');
        lowerHeaders[i].classList.add('downMove');
      }
    }else {
      lowerHeaders[i].classList.remove("downMove");
      lowerHeaders[i].classList.add("upMove");
    }
  }
  beforePos = scroll; //スクロール検知
}

window.addEventListener('scroll', () => {
  if(lowerHeaders[0]) {
    fadeHeader();
  }
});


