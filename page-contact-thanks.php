<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="contact">
      <section class="top">
        <div class="container">
          <!--使い回しカード-->
          <div class="card">
            <div class="card-container">
              <div class="card-contents">
                <div class="card-contents-wrapper">
                  <div class="card-title">
                    <h3 class="card-title__text card-title__text--en js-textillate js-sec6">Contact</h3>
                    <h3 class="card-title__text card-title__text--ja js-textillate js-sec6">お知らせ</h3>
                  </div>
                  <!-- <p class="card-contents-wrapper__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p> -->
                </div>
              </div>
              <div class="card-image-wrapper card-image-wrapper--bc-white">
                <div class="card-image effect fadein_bottom_5" data-class="bottom_in_active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact-card.png" alt="" class="card-image__image">
                </div>
              </div>
            </div>
          </div><!--card-->
        </div>
      </section>
      <section class="thanks thanks--contact">
        <div class="container">
          <h3 class="thanks-ttl">お問い合わせ<br class="forSp">ありがとうございます。</h3>
          <p class="thanks-complement">
            この度はお問い合わせいただき、誠にありがとうございます。<br>
            受付完了メール（自動送信）を送信しましたので、ご確認ください。
          </p>
          <div class="thanks-box">
            <p class="thanks-box__head">万が一メールが届いてない場合、<br class="forSp">以下の原因が考えられます。</p>
            <ul class="thanks-box__lists">
              <li class="thanks-box__list">・入力されたメールアドレスに誤りがある可能性があります。</li>
              <li class="thanks-box__list">・迷惑メールフォルダに振り分けられている可能性があります。</li>
              <li class="thanks-box__list">・入力されたメールアドレスに誤りがある可能性があります。</li>
              <li class="thanks-box__list">・ドメイン設定受信を行っている可能性があります。「@sec-service.co.jp」の<br class="forPc">ドメイン受信設定を行ってください。</li>
            </ul>
            <p class="thanks-box__emphasis">メールが届かない場合は恐れ入りますが、<span class="hp_orange">再度お問い合わせ</span>ください。</p>
            <a href="<?php echo esc_url(home_url('/contact')) ?>" class="viewmore viewmore--thanks" >
              <p class="viewmore__text viewmore__text--contact">再度お問い合わせはこちら</p>
              <div class="viewmore__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
              </div>
            </a>
          </div>
          <a href="<?php echo esc_url(home_url()); ?>" class="thanks-link-to-top" >トップページへ戻る ＞</a>
        </div>
      </section>
      <section class="pageTop">
        <div class="pageTop-box">
          <p class="pageTop-box__text">Page top</p>
          <div class="pageTop-box__vertical"></div>
        </div>
      </section>
    </main>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
    <!-- textillate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/card.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
