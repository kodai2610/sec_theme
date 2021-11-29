<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <!-- write your code here -->
    <style>
      #animation_container1 {
      position:absolute;
      margin:auto;
      left:0;right:0;
      top:0;bottom:0;
      }
      #animation_container2 {
      position:absolute;
      margin:auto;
      left:0;right:0;
      top:0;bottom:0;
      }
    </style>
    <script>
      const path = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/SECアニメーション.js"></script>
    <!--phpファイルにした時デバイスサイズに応じて出し分ける-->
    <?php if(wp_is_mobile()): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animation-sp.js"></script>
    <?php else: ?>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animation-pc.js"></script>
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>

  <body onload="init();" style="margin:0px;">
    <?php get_template_part('includes/front-header') ?>
    <main id="index">

      <section class="top">
          <div id="animation_container1" style="background-color:rgba(255, 255, 255, 1.00); width:1400px; height:745px">
            <canvas id="canvas1" width="1400" height="745" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
            <div id="dom_overlay_container1" style="pointer-events:none; overflow:hidden; width:1400px; height:745px; position: absolute; left: 0px; top: 0px; display: block;">
            </div>
          </div>

        <div id="animation_container2" class="forSp" style="background-color:rgba(255, 255, 255, 1.00); width:375px; height:812px">
          <canvas id="canvas2" width="375" height="812" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
          <div id="dom_overlay_container2" style="pointer-events:none; overflow:hidden; width:375px; height:812px; position: absolute; left: 0px; top: 0px; display: block;">
          </div>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top-bg.png" alt="" class="top__bg">
        <div class="top-box">
          <h3 class="top__slogan top__slogan--en">Creating the<br>Future<br>Together</h3>
          <h4 class="top__slogan top__slogan--ja">共に創る、ミライを。</h4>
        </div>
      </section>

      <section class="news">
        <div class="news-container">
          <div class="news-container-wrapper">
            <h4 class="news-container-wrapper__news">News</h4>
            <p class="news-container-wrapper__date">2021.04.01</p>
            <p class="news-container-wrapper__title">HPをリニューアル中です。</p>
          </div>
          <!-- <div class="news-container__indicator forPc">

          </div> -->
          <div class="news-container__indicator forSp">
            <div class="news-container__indicator__circle news-container__indicator__circle--active"></div>
            <div class="news-container__indicator__vertical"></div>
            <div class="news-container__indicator__circle"></div>
            <div class="news-container__indicator__vertical"></div>
            <div class="news-container__indicator__circle"></div>
          </div>
        </div>
      </section>

      <section class="sec">
        <div class="sec-container">
          <section class="sec-container-wrapper">
            <div class="sec-container-wrapper-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec1-pop.png" alt="" class="sec-container-wrapper-image__pop effect" data-class="zoomIn">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec1-icon.png" alt="" class="sec-container-wrapper-image__icon fadein_bottom_50 effect" data-class="bottom_in_active">
              <p class="sec-container-wrapper-image__number fadein_bottom effect" data-class="bottom_in_active">01</p>
            </div>
            <div class="sec-container-wrapper-box">
              <div class="contents">
                <div class="contents-wrapper">
                  <div class="title">
                    <h3 class="title__text title__text--en js-textillate js-sec1">What's S.E.C ?</h3>
                    <h3 class="title__text title__text--ja js-textillate js-sec1">S.E.Cについて</h3>
                  </div>
                  <p class="contents-wrapper__text">S.E.Cとは、どんな組織なのか。<br>
                    本ページをご覧になれば、すぐに当社のことが理解できるはず。<br>
                    包み隠さずお伝えしていますので、ぜひのぞいて見てください。</p>
                  <a href="<?php echo esc_url(home_url('/about')); ?>" class="viewmore" >
                    <p class="viewmore__text">view more</p>
                    <div class="viewmore__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="sec-container-wrapper">
            <div class="sec-container-wrapper-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec2-pop.png" alt="" class="sec-container-wrapper-image__pop effect" data-class="zoomIn">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec2-icon.png" alt="" class="sec-container-wrapper-image__icon fadein_bottom_50 effect" data-class="bottom_in_active">
              <p class="sec-container-wrapper-image__number fadein_bottom effect" data-class="bottom_in_active">02</p>
            </div>
            <div class="sec-container-wrapper-box">
              <div class="contents">
                <div class="contents-wrapper">
                  <div class="title">
                    <h3 class="title__text title__text--en js-textillate js-sec2">Data for S.E.C</h3>
                    <h3 class="title__text title__text--ja js-textillate js-sec2">数字で見るS.E.C</h3>
                  </div>
                  <p class="contents-wrapper__text">S.E.Cを形づくる様々な数字。<br>
                    当社の状況をデータでご確認いただくことで、<br>
                    より、S.E.Cの「今」がわかるはずです。</p>
                  <a class="viewmore" href="<?php echo esc_url(home_url('/data')); ?>">
                    <p class="viewmore__text">view more</p>
                    <div class="viewmore__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="sec-container-wrapper__arrow"></div>
          </section>
          <section class="sec-container-wrapper">
            <div class="sec-container-wrapper-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec3-pop.png" alt="" class="sec-container-wrapper-image__pop effect" data-class="zoomIn">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/sec3-icon.png" alt="" class="sec-container-wrapper-image__icon fadein_bottom_50 effect" data-class="bottom_in_active">
              <p class="sec-container-wrapper-image__number fadein_bottom effect" data-class="bottom_in_active">03</p>
            </div>
            <div class="sec-container-wrapper-box">
              <div class="contents">
                <div class="contents-wrapper">
                  <div class="title">
                    <h3 class="title__text title__text--en js-textillate js-sec3">Join us</h3>
                    <h3 class="title__text title__text--ja js-textillate js-sec3">採用情報</h3>
                  </div>
                  <p class="contents-wrapper__text">S.E.Cのこれからを共に創り上げてくれる仲間を募集しています。<br>
                    私たちは徹底的に人にこだわり、<br class="forPc">成長を共にできる仲間と歩んでいきたいと考えます。<br>
                    様々な個性を持った、新たな仲間と出会えることを楽しみにしています。</p>
                  <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="viewmore" >
                    <p class="viewmore__text">view more</p>
                    <div class="viewmore__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="sec-container-wrapper__arrow"></div>
          </section>
        </div>
        <div class="sec-bg forSp">
          <div class="sec-bg__bg sec-bg__bg--color1"></div>
          <div class="sec-bg__bg sec-bg__bg--color2"></div>
        </div>
      </section>

      <section class="sc service">
        <div class="sc-container">
          <div class="contents">
            <div class="contents-wrapper">
              <div class="title">
                <h3 class="title__text title__text--en js-textillate js-sec4">Service</h3>
                <h3 class="title__text title__text--ja js-textillate js-sec4">事業概要</h3>
              </div>
              <p class="contents-wrapper__text">お客様のビジネスを、<br class="forSp">ご要望に合わせて<br class="forPc">デジタルテクノロジーの力で様々な方面からサポートしています。</p>
              <a class="viewmore" href="<?php echo esc_url(home_url('/service')); ?>" > 
                <p class="viewmore__text">view more</p>
                <div class="viewmore__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                </div>
              </a>
            </div>
          </div>
          <div class="sc-container-image">
            <div class="sc-container-image__bg fadein_right effect" data-class="right_in_active"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/service-icon1.png" alt="" class="sc-container-image__image sc-container-image__image--1 effect" data-class="zoomIn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/service-icon2.png" alt="" class="sc-container-image__image sc-container-image__image--2 effect" data-class="zoomIn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/service-icon3.png" alt="" class="sc-container-image__image sc-container-image__image--3 effect" data-class="zoomIn">
          </div>
        </div>
      </section>

      <section class="sc company">
        <div class="sc-container">
          <div class="contents">
            <div class="contents-wrapper">
              <div class="title">
                <h3 class="title__text title__text--en js-textillate js-sec5">Company</h3>
                <h3 class="title__text title__text--ja js-textillate js-sec5">会社情報</h3>
              </div>
              <p class="contents-wrapper__text">ITのプロフェッショナル集団としてお客様のビジネス成長へ貢献するとともに、<br>
                テクノロジーの力で新たな価値の創出を目指している組織です。</p>
              <a href="<?php echo esc_url(home_url('/company')); ?>" class="viewmore" >
                <p class="viewmore__text">view more</p>
                <div class="viewmore__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                </div>
              </a>
            </div>
          </div>
          <div class="sc-container-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/item.jpg" alt="" class="sc-container-image__image effect" data-class="zoomIn">
            <div class="sc-container-image__bg fadein_left effect" data-class="left_in_active"></div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="contact-container">
          <div class="contents">
            <div class="contents-wrapper">
              <div class="title">
                <h3 class="title__text title__text--en js-textillate js-sec6">Contact</h3>
                <h3 class="title__text title__text--ja js-textillate js-sec6">お問い合わせ</h3>
              </div>
              <p class="contents-wrapper__text">当社へのお問い合わせはこちらより受け付けております。<br>
                まずは、お気軽にお問い合わせください。</p>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="viewmore">
                <p class="viewmore__text">view more</p>
                <div class="viewmore__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                </div>
              </a>
            </div>
          </div>

          <div class="contact-container-image fadein_bottom_5 effect" data-class="bottom_in_active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/contact.png" alt="" class="contact-container-image__image">
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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
