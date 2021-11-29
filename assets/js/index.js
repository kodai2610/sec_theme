// textille
$(document).ready(function () {
  var wh1 = $(window).height() * 0.80; //画面の高さの50%の大きさ
  var wh2 = $(window).height() * 0.10; //画面の高さの20%の大きさ

  $(function () {
      var baseBorder = $('.js-sec1').offset().top;
      var imageBorderTrigger1 = baseBorder - wh1;
      var imageBorderTrigger2 = baseBorder - wh2;
     
        $(window).scroll(function () {
          if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
            $('.js-sec1').textillate({
            loop: false,
              in: {
                effect: 'fadeInRight',
              },
              out: {
                effect: false,
              }
            }).css('visibility','visible');
          } else {
          }
      });
  });

  $(function () {
    var baseBorder = $('.js-sec2').offset().top;
    var imageBorderTrigger1 = baseBorder - wh1;
    var imageBorderTrigger2 = baseBorder - wh2;

      $(window).scroll(function () {
        if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
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
        }
    });
  });

  $(function () {
    var baseBorder = $('.js-sec3').offset().top;
    var imageBorderTrigger1 = baseBorder - wh1;
    var imageBorderTrigger2 = baseBorder - wh2;

      $(window).scroll(function () {
        if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
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
        }
    });
  });

  $(function () {
    var baseBorder = $('.js-sec4').offset().top;
    var imageBorderTrigger1 = baseBorder - wh1;
    var imageBorderTrigger2 = baseBorder - wh2;

      $(window).scroll(function () {
        if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
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
        }
    });
  });

  $(function () {
    var baseBorder = $('.js-sec5').offset().top;
    var imageBorderTrigger1 = baseBorder - wh1;
    var imageBorderTrigger2 = baseBorder - wh2;

      $(window).scroll(function () {
        if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
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
        }
    });
  });

  $(function () {
    var baseBorder = $('.js-sec6').offset().top;
    var imageBorderTrigger1 = baseBorder - wh1;
    var imageBorderTrigger2 = baseBorder - wh2;

      $(window).scroll(function () {
        if ($(this).scrollTop() > imageBorderTrigger1 && $(this).scrollTop() < imageBorderTrigger2) {
          $('.js-sec6').textillate({
          loop: false,
            in: {
              effect: 'fadeInRight',
            },
            out: {
              effect: false,
            }
          }).css('visibility','visible');
        } else {
        }
    });
  });

});


// header scroll appear
$(document).ready(function () {

  $(function () {
      var wh = $(window).height() * 0.40; //画面の高さの75%の大きさ
      var pageTop = $('.sec').offset().top;
      // var pageTopTrigger = pageTop - wh;
      var pageTopTrigger = pageTop;

      $(window).scroll(function () {
          if ($(this).scrollTop() > pageTopTrigger) {
              $('#header--scroll').addClass('scrollin');
              // $('#header--scroll').fadeIn();
          } else {
              $('#header--scroll').removeClass('scrollin');
              // $('#header--scroll').fadeOut();
          }
      });

  });
});