//job-wrapperを制御する

//初期設定
let target_h = document.getElementById('js-target').clientHeight;
let bg_h = target_h * 1.015;
document.getElementById('js-bg').style.height = `${bg_h}px`;
// console.log('bg_h :' + bg_h);

//画面サイズ変更時
window.addEventListener('resize', function() {
  target_h = document.getElementById('js-target').clientHeight;
  bg_h = target_h * 1.015;
  // console.log('resize bg_h :' + bg_h);
  document.getElementById('js-bg').style.height = `${bg_h}px`;
});

//エントリーサンクスからの遷移の時フォーム復活
window.onpageshow = function() {
	const formerUrl = document.referrer;
  if(formerUrl.indexOf('entry-thanks') != -1 && window.name != 'any') {
     window.location.reload();
     window.name = 'any'
  }else {
    window.name = '';
  }
};

//エラー時に下に移る
$(function(){
  if ( $('.error')[0] ) {
      $('.mw_wp_form').addClass('mw_wp_form_error');
          var errorEl = $('.mw_wp_form').eq(0);
          var position = errorEl.parent().offset().top; 
      $('body,html').delay(200).animate({scrollTop:position}, 600, 'swing');
  }
});