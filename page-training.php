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
    <main id="training">
      <section class="top">
        <div class="container">
          <!--使い回しカード-->
          <div class="card">
            <div class="card-container">
              <div class="card-contents">
                <div class="card-contents-wrapper">
                  <div class="card-title">
                    <h3 class="card-title__text card-title__text--en js-textillate js-sec1">Training</h3>
                    <h3 class="card-title__text card-title__text--ja js-textillate js-sec1">研修制度</h3>
                  </div>
                </div>
              </div>
              <div class="card-image-wrapper card-image-wrapper--bc-green">
                <div class="card-image effect fadein_bottom_5" data-class="bottom_in_active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/training-card.png" alt="" class="card-image__image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="secDream">
        <div class="title">エンジニアへの夢、叶えます。</div>
        <div class="text">
          <div class="text1">
            S.E.Cが創業以来ずっと続けていること。それは<br>「経験はないけど、エンジニアに挑戦したい！」<br>そんな思いを受け入れてきた、ということ。
          </div>
          <div class="text2">
            しかし技術職でもあるITエンジニア。<br>育てると一口に言ってもなかなか大変だったりするんです。
          </div>
          <div class="text3">
            S.E.Cでは長い年月をかけて試行錯誤し、誰もが立ち上がりやすい研修のカタチを模索。<br>外部研修に放り出したり、テキストを読んで終わるような研修ではなく、<br>経験の無い方に向けて3か月、経験者のお持ちの方でも<br>1か月間は研修を受けてもらうようにしています。
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
    <!-- textillate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous"></script>
    <!--各ページ固有のjsを読み込む-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/training.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
