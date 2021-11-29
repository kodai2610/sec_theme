<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="job-desc">
      <div class="top">
        <div class="top-meta">
          <div class="top-title">Entry form</div>
          <div class="top-subtitle">応募フォーム</div>
        </div>
      </div>
      <div class="thanks-wrapper">
        <section class="thanks thanks--entry">
          <h3 class="thanks-ttl">ご応募<br class="forSp">ありがとうございます。</h3>
          <p class="thanks-complement">
            この度はお問い合わせいただき、誠にありがとうございます。<br>
            受付完了メール（自動送信）を送信しましたので、ご確認ください。
          </p>
          <div class="thanks-box">
            <p class="thanks-box__head">万が一メールが届いてない場合、以下の原因が考えられます。</p>
            <ul class="thanks-box__lists">
              <li class="thanks-box__list">・入力されたメールアドレスに誤りがある可能性があります。</li>
              <li class="thanks-box__list">・迷惑メールフォルダに振り分けられている可能性があります。</li>
              <li class="thanks-box__list">・入力されたメールアドレスに誤りがある可能性があります。</li>
              <li class="thanks-box__list">・ドメイン設定受信を行っている可能性があります。「@sec-service.co.jp」の<br class="forPc">ドメイン受信設定を行ってください。</li>
            </ul>
            <p class="thanks-box__emphasis">メールが届かない場合は恐れ入りますが、<span class="hp_orange">再度ご応募</span>ください。</p>
            <?php
            $former_url = $_SERVER['HTTP_REFERER'];
            ?>
            <a href="<?php echo $former_url; ?>" class="viewmore viewmore--thanks">
              <p class="viewmore__text viewmore__text--contact">再度お問い合わせはこちら</p>
              <div class="viewmore__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
              </div>
            </a>
          </div>
          <a href="<?php echo esc_url(home_url()); ?>" class="thanks-link-to-top --job-desc-thanks">トップページへ戻る ＞</a>
        </section>
      </div>
      <section class="pageTop --job-desc-thanks">
        <div class="pageTop-box">
          <p class="pageTop-box__text">Page top</p>
          <div class="pageTop-box__vertical"></div>
        </div>
      </section>
    </main>
    <?php get_template_part('includes/header'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
