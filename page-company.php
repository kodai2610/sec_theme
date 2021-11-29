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
    
    <main id="company">
      <section class="top">
        <div class="container">
          <!--使い回しカード-->
          <div class="card">
            <div class="card-container">
              <div class="card-contents">
                <div class="card-contents-wrapper">
                  <div class="card-title">
                    <h3 class="card-title__text card-title__text--en js-textillate js-sec1">Company</h3>
                    <h3 class="card-title__text card-title__text--ja js-textillate js-sec1">会社概要</h3>
                  </div>
                </div>
              </div>
              <div class="card-image-wrapper card-image-wrapper--bc-orange">
                <div class="card-image effect fadein_bottom_5" data-class="bottom_in_active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company-card.png" alt="" class="card-image__image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="vision" id="vision">
        <div class="title02">
          <div class="title02__main title02__main--social js-sec2 js-textillate">Social Vision</div>
          <div class="title02__sub title02__sub--social js-sec2 js-textillate">企業理念</div>
        </div>
        <!---->
        <p class="vision__txt">どこよりも「明るく」「楽しく」<br class="forSp">「温かみ」のある会社にしよう</p>
        <div class="vision__content vision-ex">
          <div class="vision-ex__circle vision-circle forPc effect" data-class="zoomIn3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/vision-circle.png" alt="">
          </div>
          <div class="vision-ex__circle-sp forSp effect" data-class="zoomIn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/sp-circle.png" alt="">
          </div>
          <ul class="vision-ex__lists">
            <li class="vision-ex__list --list1">
              <span class="vision-ex__num">01</span>
              <h3 class="vision-ex__ttl">明るく</h3>
              <p class="vision-ex__txt">
                この言葉には会社の雰囲気を<br>表す想いが込められています。<br>常に会社の空気を「明るく」<br>元気いっぱいのスタッフがたくさんいる。<br>そんな社風を目指しています。
              </p>
            </li>
            <li class="vision-ex__list --list2">
              <span class="vision-ex__num">02</span>
              <h3 class="vision-ex__ttl">楽しく</h3>
              <p class="vision-ex__txt">
                個性を尊重する社風。<br>そしてどんな時でも目の前にあることを<br>楽しく、前向きにとらえるポジティブな<br>考え方を持てる人材になってほしいという<br>思いが込められた一言です。
              </p>
            </li>
            <li class="vision-ex__list --list3">
              <span class="vision-ex__num">03</span>
              <h3 class="vision-ex__ttl">温かみ</h3>
              <p class="vision-ex__txt">
                この言葉は「相手に感じてもらう」もの<br>だと考えています。<br>自分本位ではなく、相手のために、<br>会社のために、お客様のために。<br>本気で汗をかける人たちがチームとなって<br>一つのことを成し遂げていく姿を<br>イメージした一言です。
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="message" >
        <div class="container message__container">
          <div class="message-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/message-circle.png" alt=""></div>
          <div class="message-box">
            <h3 class="message-box__ttl js-textillate js-sec3">Top message</h3>
            <h4 class="message-box__subttl js-textillate js-sec3">代表メッセージ</h4>
            <div class="message-box__text">
              <p class="message-box__text-ttl">【共創】楽しい未来を共に創る。</p>
              <p class="message-box__text-text">私たちは2004年にIT企業としてサービスを開始しました。</p>
              <p class="message-box__text-text">
                私たちの「モノづくり」のサービスの特徴は、<br> ITのデジタル技術と人の心の温かみ（アナログ）の融合にあります。<br>それは単に「作るモノ」に対しての貢献ではなく、「お客様が笑顔になる」為のモノづくりです。
              </p>
              <p class="message-box__text-text">
                その為、社員教育にはとても力を入れています。技術力はもちろんの事、人間性を重視したビジネススキルやホスピタリティーの精神をもって温かみあるサービスを心がけています。
              </p>
              <p class="message-box__text-text">
                私たちは、モノづくりを通じて、人と人との笑顔を繋げるココロのメッセンジャーとして、<br>「SECで良かった」「SECとまた一緒に仕事がしたい」と言って貰えるような<br>お客様にとって心の拠り所になるような存在を目指しています。
              </p>
              <p class="message-box__text-text">
                お客様一人一人と同じ目線で物事を考え、悩み、寄り添い、協力し合う事で、<br>次につながる楽しい未来を共に創っていく。
              </p>
              <p class="message-box__text-text">その強い想いを持って、これからも日々精進していく所存です。</p>
              <p class="message-box__text-text">今後とも皆様のご支援とご愛顧を賜りますようよろしくお願い致します</p>
              <p class="message-box__text-text">代表取締役　岡田 充弘</p>
            </div>
          </div>
        </div>
      </section>
      <section class="view" id="view">
        <div class="container view__container">
          <h3 class="sec-ttl js-textillate js-sec4">Overview</h3>
          <h4 class="sec-subttl js-textillate js-sec4">会社概要</h4>
          <div class="data">
            <dl class="data__row">
              <dt class="data__dt">社名</dt>
              <dd class="data__dd">株式会社Ｓ.Ｅ.Ｃ</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">設立日</dt>
              <dd class="data__dd">2004年4月</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">所在地</dt>
              <dd class="data__dd">〒101-0031 東京都千代田区東神田1-9-8 THE WAVES AKIHABARA（旧：ミユキビル） 5F</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">TEL</dt>
              <dd class="data__dd">03-5825-4612</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">FAX</dt>
              <dd class="data__dd">03-5825-4712</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">URL</dt>
              <dd class="data__dd">http://www.sec-service.co.jp/</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">事業内容</dt>
              <dd class="data__dd">
                ITソリューション事業<br>
                ITマネジメント事業<br>
                アウトソーシング事業<br>
                ソフトウェア開発<br>
                人材育成・能力開発<br>
                コンピュータ関連ビジネスの企画開発<br>
                カスタマーサポート事業
              </dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">資本金</dt>
              <dd class="data__dd">14,000,000円</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">代表者</dt>
              <dd class="data__dd">岡田　充弘</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">従業員数</dt>
              <dd class="data__dd">約60名</dd>
            </dl>
            <dl class="data__row">
              <dt class="data__dt">取引銀行</dt>
              <dd class="data__dd data__dd--br">
                三菱東京ＵＦＪ銀行 木場深川支店<br>
                東日本銀行 深川支店<br>
                東京東信用金庫 深川支店
              </dd>
            </dl>
          </div>
        </div>
      </section>
      <section class="map" id="map">
          <div class="container">
            <h3 class="sec-ttl js-textillate js-sec5">Map</h3>
            <h4 class="sec-subttl js-textillate js-sec5">アクセスマップ</h4>
          </div>
          <!-- <div id="g-map"></div> -->
          <div class="map-g-map">
            <div class="iframe-wrap">
              <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.2807229171826!2d139.77757446568447!3d35.69470893019114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188eac465e4bb1%3A0xecdb6121f1c5632b!2z44Of44Om44Kt44OT44Or!5e0!3m2!1sja!2sjp!4v1632722996982!5m2!1sja!2sjp" width="910" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="map-detail">
            <p class="map-detail__add">〒101-0031 東京都千代田区東神田1-9-8 THE WAVES AKIHABARA（旧：ミユキビル） 5F</p>
            <a href="//goo.gl/maps/qid3xfaQM6QcCpR77" class="map-detail__link" target="_blank">Google map<i class="fas fa-map-pin"></i></a>
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
    <!-- <script src="./assets/js/fadeIn.js"></script> -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8IvgyaM2FcWkPNoEVseRjI5k08VFhoIQ&callback=initMap"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/company.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
