//エントリーサンクスからの遷移の時フォーム復活
window.onpageshow = function() {
	const formerUrl = document.referrer;//遷移元のURL取得
  if(formerUrl.indexOf('contact-thanks') != -1 && window.name != 'any') {
     window.location.reload();
     window.name = 'any'
  }else {
    window.name = '';
  }
};

//エラー時に下に移る
$(function(){
  if ($('.error')[0] ) {
      $('.mw_wp_form').addClass('mw_wp_form_error');
        var errorEl = $('.mw_wp_form');
        var position = errorEl.offset().top;
      $('body,html').delay(200).animate({scrollTop:position}, 600, 'swing');
  }
});