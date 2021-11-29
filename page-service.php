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
    <main id="service">
      <section class="top">
        <div class="container">
          <!--使い回しカード-->
          <div class="card">
            <div class="card-container">
              <div class="card-contents">
                <div class="card-contents-wrapper">
                  <div class="card-title">
                    <h3 class="card-title__text card-title__text--en js-textillate js-sec1">Service</h3>
                    <h3 class="card-title__text card-title__text--ja js-textillate js-sec1">事業内容</h3>
                  </div>
                  <!-- <p class="card-contents-wrapper__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p> -->
                </div>
              </div>
              <div class="card-image-wrapper card-image-wrapper--bc-red">
                <div class="card-image effect fadein_bottom_5" data-class="bottom_in_active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/service-card.png" alt="" class="card-image__image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="hp_bcc-white-scale hp_pb200">
        <section class="service">
          <div class="title02">
            <div class="title02__main title02__main--service js-sec4 js-textillate">Service</div>
            <div class="title02__sub title02__sub--service js-sec4 js-textillate">事業内容</div>
          </div>
          <h3 class="service__txt">S.E.Cのバリュー<br class="forSp">「技術と人間性の両立」 </h3>
          <div class="service__box">
            <p class="service__box-txt">
              私たちはIT企業です。IT企業といえば技術力で勝負するというのがスタンダード。もちろん我々も技術力は重要視し、クライアントの皆様から求められる技術に対する期待に応えるべく、日々スタッフの技術水準の向上に努めております。それと同時にテクニカルスキルだけでなく、私たちはビジネスパーソン力の向上にも注力しています。どんなに力があっても、それを扱う人間力が適切に育っていなければその力は正しく発揮されることはありません。裏を返せば、人間力はその人の持つ技術の力を110％、120％、時に200％にすることすらできると私たちは信じています。その人の持つ個性を、その人の強みを最大限発揮できるようにするためにもビジネスパーソンとしての人間力の育成には特に注力をしています。そして、これこそが顧客に対する真の満足と価値の提供につながると私たちは考えています。
            </p>
          </div>
          <h3 class="service__txt service__txt--2">事業特性「５つのPOINT」 </h3>
          <div class="service__box service-point">
            <div class="service-point__row">
              <h4 class="service-point__ttl">Webアプリケーション開発、フロント・モバイル関連技術</h4>
              <p class="service-point__txt">
                日常的に使用するITの世界と様々なユーザをつなげることを目的として、Java、PHP、C#、JavaScriptなどを用いてWeb系フロント開発、モバイル関連事業に注力をしています。
              </p>
            </div>
            <div class="service-point__row">
              <h4 class="service-point__ttl">パッケージシステム</h4>
              <p class="service-point__txt">
                S.E.Cでは Microsoft365、Kintoneなどのビジネスソリューションシステムの導入支援やERPやCRMといった各種パッケージソフト開発支援を行っています。
              </p>
            </div>
            <div class="service-point__row">
              <h4 class="service-point__ttl">先進技術開発</h4>
              <p class="service-point__txt">
                世の中のニーズに積極的に応えるべく、先進的な技術を追いかけ、新たな事業特性分野として拡大することに対し挑戦を続けることもS.E.Cの事業特性の一つです。AI、ディープラーニング、RPAなどといった先進性のある技術分野に対しても積極的に対応しています。
              </p>
            </div>
            <div class="service-point__row">
              <h4 class="service-point__ttl">クラウドソリューション</h4>
              <p class="service-point__txt">
                AWS、GCP、Azureなど現在では当たり前となったクラウド技術を用いて、社内インフラ利便性向上の支援や、プライベートクラウドの構築・導入支援、各種クラウドの開発支援などを行っています。
              </p>
            </div>
            <div class="service-point__row">
              <h4 class="service-point__ttl">システムソリューション</h4>
              <p class="service-point__txt">
                現行システムに対し、コンサルティングを通して改善提案・システムの開発・技術支援など様々なニーズに対応をしております。ITでのお悩みやトラブルに対して、柔軟性をもちつつ、的確なターゲットシューティングを実施。様々なソリューション提案を行い、支援を行っています。
              </p>
            </div>
          </div>
        </section>
        <section class="sc sc--ses" id="ses">
          <div class="sc-container">
            <div class="contents">
              <div class="contents-wrapper">
                <div class="title">
                  <h3 class="title__text title__text--en js-sec2 js-textillate">SES</h3>
                  <h3 class="title__text title__text--ja js-sec2 js-textillate">SES事業</h3>
                </div>
                <p class="contents-wrapper__text">
                  クライアントが求める技術リクエストに対し、的確なリソースを迅速にご用意いたします。その上で、ただのマッチングビジネススタイルではなく、弊社の掲げる「共創」の理念を背景に、お客様目線に立ったスタンスでの新しいSESのカタチを模索しながらサービス提供をさせていただいております。業務を生み出すその場所から我々の支援は始まります。
                </p>
              </div>
            </div>
            <div class="sc-container-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/solution-circle.png" alt="" class="sc-container-image__image effect" data-class="zoomIn">
              <div class="sc-container-image__bg fadein_left effect" data-class="left_in_active"></div>
            </div>
          </div>
        </section>
        <section class="sc sc--si" id="si">
          <div class="sc-container">
            <div class="contents">
              <div class="contents-wrapper">
                <div class="title">
                  <h3 class="title__text title__text--en js-sec3 js-textillate">SI business</h3>
                  <h3 class="title__text title__text--ja js-sec3 js-textillate">ワンストップソリューション事業（SI事業）</h3>
                </div>
                <p class="contents-wrapper__text">
                  DX化や業務の効率化など、お客様からITにまつわるご要望や課題をしっかりと伺い、最適な技術をもって、問題解決のための提案、設計・開発から評価・検証、運用・保守に至るまでワンストップで対応。事業規模、内容に応じて求められたニーズに対し的確に対応し、どんな些細な内容であっても誠意をもって必ずお応えすることをお約束いたします。
                </p>
              </div>
            </div>
            <div class="sc-container-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/si-circle.png" alt="" class="sc-container-image__image effect" data-class="zoomIn">
              <div class="sc-container-image__bg fadein_right effect" data-class="right_in_active"></div>
            </div>
          </div>
        </section>
        <section class="sc sc--dev" id="dev">
          <div class="sc-container">
            <div class="contents">
              <div class="contents-wrapper">
                <div class="title">
                  <h3 class="title__text title__text--en js-sec5 js-textillate">Human</h3>
                  <h3 class="title__text title__text--en js-sec5 js-textillate">resource</h3>
                  <h3 class="title__text title__text--en js-sec5 js-textillate br-last">development</h3>
                  <h3 class="title__text title__text--ja js-sec5 js-textillate">人材育成支援</h3>
                </div>
                <p class="contents-wrapper__text">
                  育てることがむつかしいと言われるITエンジニア育成ですが、弊社では創業以来長きにわたって未経験者を広く受け入れ、育成を行い、お客様のリクエストに対して適切に対応できるエンジニアを多数輩出し、世に送りだしてきました。そこで得たナレッジ、ノウハウをもとに各企業様のニーズにあった人材育成制度の確立支援や実際に新人エンジニアの育成を請け負うことなど、育成面でも対応をしています。技術だけでなく「人」に注力したS.E.Cだからこその人材育成支援を行います。
                </p>
              </div>
            </div>
            <div class="sc-container-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/human-circle.png" alt="" class="sc-container-image__image effect" data-class="zoomIn">
              <div class="sc-container-image__bg fadein_left effect" data-class="left_in_active"></div>
            </div>
          </div>
        </section>
        <h3 class="service__txt service__txt--3">私たちの「目指すところ」と、<br class="forSp">これからのS.E.C</h3>
        <div class="service__box service__box--3">
          <p class="service__box-txt">
            我々がこれからの先に見据える未来には、クライアント様から求められる期待に応えていくことはもちろんのこと、それと同時に「S.E.Cでなければならない理由」を作っていくことが大切であると考えています。<br>「強固なアライアンス関係」<br>言葉で見るとありきたりですが、単なるビジネスパートナーではなく「相手の目線」に立ち、技術貢献だけにとどまらず、一緒に考え、一緒に悩み、一緒に笑顔になることができること。本当の意味で必要なものを提供できる組織であることが求められ、その場所にたどり着くのは決して簡単ではないと思います。<br>「S.E.Cでよかった」「S.E.Cじゃなきゃダメだ」その一言のためにも、さらなる企業成長が急務であると考えています。<br>2020年現在、おおよそ60名という体制の現在の企業規模を2025年には100名体制に、そして事業特性として「5つ強み」を確立し明確な企業ビジョンをもって次のステージへと進んでまいります。これからのS.E.Cにご期待いただきたいと思います。そして我々はその期待にしっかりと応えていきたいと思っています。
          </p>
          <div class="service__box-img-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/girl.png" alt="" class=""></div>
          <div class="service__box-img-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/men.png" alt="" class=""></div>
        </div>
      </div>
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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/service.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
