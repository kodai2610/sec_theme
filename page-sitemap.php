<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="sitemap">
      <div class="top">
        <div class="top-meta card-title">
          <div class="card-title__text card-title__text--en card-title__text--sm">Site map</div>
          <div class="card-title__text card-title__text--ja">サイトマップ</div>
        </div>
      </div>
      <section class="map">
        <div class="float-contents map__box">
          <div class="map__container">
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/about')); ?>" class="map-contents__ttl-link">What's S.E.C ?　＞</a> </li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url('/')); ?>about#futures" class="map-contents__list-link">S.E.Cの未来　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url('/')); ?>about#member" class="map-contents__list-link">S.E.Cを創るひと　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url('/')); ?>about#features" class="map-contents__list-link">S.E.Cの特徴　＞</a></li>
            </ul>
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/data')); ?>" class="map-contents__ttl-link">Data for S.E.C　＞</a> </li>
            </ul>
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/recruit')); ?>" class="map-contents__ttl-link">Join us　＞ </a> </li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/recruit#work" class="map-contents__list-link">事業内容　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/recruit#point" class="map-contents__list-link">働くポイント　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/recruit#view" class="map-contents__list-link">社員インタビュー　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/recruit#desc" class="map-contents__list-link">採用情報　＞</a></li>
            </ul>
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/service')); ?>" class="map-contents__ttl-link">Service　＞</a> </li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/service#ses" class="map-contents__list-link">SES事業　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/service#si" class="map-contents__list-link">SI事業　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/service#dev" class="map-contents__list-link">人材育成支援　＞</a></li>
            </ul>
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/company')); ?>" class="map-contents__ttl-link">Company　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/company#vision" class="map-contents__list-link">企業理念　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/company#view" class="map-contents__list-link">会社概要　＞</a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/company#map" class="map-contents__list-link">アクセスマップ　＞</a></li>
            </ul>
            <ul class="map-contents">
              <li class="map-contents__ttl"><a href="<?php echo esc_url(home_url('/news')); ?>" class="map-contents__ttl-link">News　＞ </a></li>
              <li class="map-contents__list"><a href="<?php echo esc_url(home_url()); ?>/news#lists" class="map-contents__list-link">お知らせ一覧　＞</a></li>
            </ul>
          </div>
          <div class="map__bottom">
            <ul class="map__bottom-lists">
              <li class="map-contents__ttl map__bottom-list"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="map__bottom-link">お問い合わせ　＞</a></li>
              <li class="map-contents__ttl map__bottom-list"><a href="<?php echo esc_url(home_url('/privacy')); ?>" class="map__bottom-link">プライバシーポリシー　＞</a></li>
            </ul>
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
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
