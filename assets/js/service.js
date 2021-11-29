//fadeIn
triggerMargin = 100;

//textille
$(document).ready(function(){ //プラグイン動作用
  $('.js-sec1').textillate({
    loop: false,
      in: {
        effect: 'fadeInRight',
      },
      out: {
        effect: false,
      }
    }).css('visibility','visible');

  var wh1 = $(window).height() * 0.80; //画面の80%の大きさ
  var wh2 = $(window).height() * 0.10; //画面の10%の大きさ

  $(function() {
    var baseBorder = $('.js-sec2').offset().top;
    var borderTrigger1 = baseBorder - wh1;
    var borderTrigger2 = baseBorder - wh2;
    $(window).scroll(function(){
      if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
        $('.js-sec2').textillate({
          loop: false,
            in: {
              effect: 'fadeInRight',
            },
            out: {
              effect: false,
            }
          }).css('visibility','visible');
      } else {
      }}
    )
  })

  $(function() {
    var baseBorder = $('.js-sec3').offset().top;
    var borderTrigger1 = baseBorder - wh1;
    var borderTrigger2 = baseBorder - wh2;
    $(window).scroll(function(){
      if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
        $('.js-sec3').textillate({
          loop: false,
            in: {
              effect: 'fadeInRight',
            },
            out: {
              effect: false,
            }
          }).css('visibility','visible');
      } else {
      }}
    )
  })

  $(function() {
    var baseBorder = $('.js-sec4').offset().top;
    var borderTrigger1 = baseBorder - wh1;
    var borderTrigger2 = baseBorder - wh2;
    $(window).scroll(function(){
      if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
        $('.js-sec4').textillate({
          loop: false,
            in: {
              effect: 'fadeInRight',
            },
            out: {
              effect: false,
            }
          }).css('visibility','visible');
      } else {
      }}
    )
  })

  $(function() {
    var baseBorder = $('.js-sec5').offset().top;
    var borderTrigger1 = baseBorder - wh1;
    var borderTrigger2 = baseBorder - wh2;
    $(window).scroll(function(){
      if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
        $('.js-sec5').textillate({
          loop: false,
            in: {
              effect: 'fadeInRight',
            },
            out: {
              effect: false,
            }
          }).css('visibility','visible');
      } else {
      }}
    )
  })
});

