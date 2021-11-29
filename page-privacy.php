<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header();?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="privacy">
      <div class="top">
        <div class="top-meta card-title">
          <div class="card-title__text card-title__text--en  card-title__text--sm">Privacy policy</div>
          <div class="card-title__text card-title__text--ja">プライバシーポリシー</div>
        </div>
      </div>
      <section class="code">
        <div class="float-contents code__box">
          <p class="code__txt">
            株式会社S.E.C（以下、「当社」という。）では、情報通信が発達し個人情報の利用が拡大する社会に於いて、<br class="forPc">個人情報の保護が重要な責務であることを認識しております。<br class="forPc">個人情報保護理念と自ら定めた行動規範に基づき、社会的使命を十分に認識し、本人の権利の保護、<br class="forPc">個人情報に関する法規制等を遵守致します。<br class="forPc">また、以下に示す方針を具現化するための個人情報保護マネジメントシステムを構築し、<br class="forPc">最新のＩＴ技術の動向、社会的要請の変化、経営環境の変動等を常に認識しながら、<br class="forPc">その継続的改善に、全社を挙げて取り組むことをここに宣言致します。
          </p>
          <ul class="code__lists">
            <li class="code__list">
              １． 当社は、適切な個人情報の取得・利用及び提供を行い、特定された利用目的の達成に必要な範囲を超えた<br class="forPc">個人情報の取扱いを行ないません。また、そのための措置を講じます。
            </li>
            <li class="code__list">
              ２． 当社は個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守致します。
            </li>
            <li class="code__list">
              ３． 当社は個人情報の漏えい、滅失、き損などのリスクに対しては、合理的な安全対策を講じて防止すべく、<br class="forPc">事業の実情に合致した経営資源を注入し、個人情報のセキュリティ体制を継続的に向上させていきます。<br class="forPc">また、万一の際には速やかに是正措置を講じます。
            </li>
            <li class="code__list">
              ４． 当社は個人情報取扱いに関する苦情及び相談に対しては、迅速かつ誠実に対応致します。
            </li>
            <li class="code__list">
              ５． 個人情報保護マネジメントシステムは、当社を取り巻く環境の変化と実情を踏まえ、<br class="forPc">適時・適切に見直して継続的に改善をはかります。
            </li>
          </ul>
          <p class="code__name">株式会社S.E.C<br>代表取締役社長　岡田 充弘</p>
          <div class="code-contact">
            <p class="code-contact__ttl">【個人情報保護方針に関するお問い合わせ先 兼 個人情報に関する苦情・相談窓口】</p>
            <p class="code-contact__address">〒101-0031　東京都千代田区東神田1-9-8　THE WAVES AKIHABARA 5F<br class="forPc">株式会社S.E.C　個人情報に関するお問い合わせ窓口</p>
            <p class="code-contact__mail">メールアドレス：<br class="forSp"><span class="hp_blue">security@sec-service.co.jp</span>　<br class="forSp">※特定電子メールはご遠慮ください</p>
            <p class="code-contact__tel">TEL：03-5825-4612 <br class="forSp">（受付時間　10:00～18:00）</p>
          </div>
        </div>
      </section>
      <section class="pageTop">
        <div class="pageTop-box">
          <p class="pageTop-box__text">Page top</p>
          <div class="pageTop-box__vertical"></div>
        </div>
      </section>
    </main>
    <?php get_template_part('includes/footer');?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <!--各ページ固有のjsを読み込む-->
  </body>
</html>
