<?php
add_theme_support( 'post-thumbnails' );

function dd($param) {
  print "<pre>";
  var_dump($param);
  exit;
}

add_action('init', function() {
  register_post_type('recruit', [ 
    'label' => '採用情報',//管理画面上の名前
    'public' => true,//メニューに表示
    'menu_position' => 5,
    'menu_icon' => 'dashicons-businesswoman',
    'has_archive' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy('method', 'recruit', [
    'label' => '採用方法',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
  register_post_type('interview', [ 
    'label' => '社員インタビュー',//管理画面上の名前
    'public' => true,//メニューに表示
    'menu_position' => 5,
    'menu_icon' => 'dashicons-businesswoman',
    'has_archive' => true,
    'show_in_rest' => true,
  ]);
  register_post_type('news', [ 
    'label' => 'ニュース',//管理画面上の名前
    'public' => true,//メニューに表示
    'menu_position' => 5,
    'menu_icon' => 'dashicons-feedback',
    'has_archive' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy('news_cat', 'news', [
    'label' => 'カテゴリ',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

add_filter( 'mwform_content_wpautop_mw-wp-form-544', '__return_false' );

/**
 * 送信完了後に完了ページへ遷移
 */
function my_mwform_after_send_entry( $Data )
{
    $form_key = $Data->get_form_key();
    if ( $form_key === 'mw-wp-form-563' ) {
        wp_redirect(home_url() . '/entry-thanks');
        exit;
    }
}
add_action( 'mwform_after_send_mw-wp-form-563', 'my_mwform_after_send_entry' );

function my_mwform_after_send_contact( $Data )
{
    $form_key = $Data->get_form_key();
    if ( $form_key === 'mw-wp-form-544' ) {
        wp_redirect( home_url() . '/contact/contact-thanks');
        exit;
    }
}
add_action( 'mwform_after_send_mw-wp-form-544', 'my_mwform_after_send_contact' );

/**
 * my_mail
 * @param object $Mail
 * @param array $values
 * @param MW_WP_Form_Data $Data
 */
function my_mail( $Mail, $values, $Data ) {
    // $Data->get( 'hoge' ) で送信されたデータが取得できます。
    if($Data->get('contact-item') == 'サービス（協業）について') {
      $Mail->to = 'test@test.com'; // 送信先を変更する
    }
    elseif($Data->get('contact-item') == 'ご意見・ご要望について') {
      $Mail->to = 'test@test.com';
    }else {
      $Mail->to = 'test@test.com';
    }
    return $Mail;
}
add_filter( 'mwform_admin_mail_mw-wp-form-544', 'my_mail', 10, 3 );

//フォームプラグイン用のショートコード作成
function make_url() {
  return home_url();
}
add_shortcode('url', 'make_url');


