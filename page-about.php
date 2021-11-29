<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="about">
      <section class="top">
        <div class="top-box">
          <h3 class="top__slogan">What’s S.E.C</h3>
          <h4 class="top__subslogan">S.E.Cについて</h4>
        </div>
        <div class="top-icons">
          <div class="top-icons__icon top-icons__icon--01" data-id="bounce-animation-target01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people01.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--02" data-id="bounce-animation-target02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people02.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--03 forPc" data-id="bounce-animation-target03"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people03.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--04" data-id="bounce-animation-target04"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people04.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--05 forPc" data-id="bounce-animation-target05"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people05.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--06 forPc" data-id="bounce-animation-target06"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people06.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--07" data-id="bounce-animation-target07"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people07.png" alt=""></div>
          <div class="top-icons__icon top-icons__icon--08" data-id="bounce-animation-target08"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/people08.png" alt=""></div>
        </div>
      </section>
      <section class="futures" id="futures">
        <div class="futures-wrapper">
          <div class="futures-obj" id="js-scroll-obj"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/question_circle.png" alt=""></div>
          <ul class="futures-lists">
            <li class="futures-list" id="js-scroll-first-list">
              <h3 class="futures-list__title">Futures</h3>
              <h4 class="futures-list__subtitle">S.E.Cのこれまで</h4>
              <div class="futures-list__txtbox">
                <h4 class="futures-list__txtbox__title">「笑顔の為のモノづくり」</h4>
                <p class="futures-list__txtbox__txt">
                  「技術を駆使し創造することで世の中に貢献したい」<br>そんな想いから生まれた当社。<br>2004年の設立依頼、社名の由来にもなっている<br class="forPc">「貢献（Service）」「技術（Engineering）」「創造（Creation）」というキーワードを軸に、単なるモノづくりではなく、お客様や社員を笑顔にする為のモノづくりを続けてきました。
                </p>
              </div>
            </li>
            <li class="futures-list">
              <h3 class="futures-list__title">Futures</h3>
              <h4 class="futures-list__subtitle">S.E.Cのいま</h4>
              <div class="futures-list__txtbox">
                <h4 class="futures-list__txtbox__title">「共創」</h4>
                <p class="futures-list__txtbox__txt">
                  当社には「共創」という考え方があります。<br>ITを用いてできることは、ソリューションとイノベーション。今あることを良くするのも、新しいものを生み出すのも、相手がいるから成立します。だからこそ、常に誰よりも深く相手のことを考え抜き、やり遂げる。真の意味で相手を思いやるからこそ生まれる信頼関係、つまり「共創」の精神を常に意識しながら活動の幅を広げてきました。
                </p>
              </div>
            </li>
            <li class="futures-list" id="js-scroll-last-list">
              <h3 class="futures-list__title">Futures</h3>
              <h4 class="futures-list__subtitle">S.E.Cの未来</h4>
              <div class="futures-list__txtbox">
                <h4 class="futures-list__txtbox__title">「新たな可能性に向けて」</h4>
                <p class="futures-list__txtbox__txt">
                  今より会社・社員が成長していくために、<br class="forPc">向かうべき未来は見えています。<br>単純なマッチングとしてのSESを脱却し、仕事を生み出すところから一緒に手掛けていく事業展開や、業務範囲の拡大に伴うSIerへの進化など、たくさんのワクワクに向けて成長中です。<br>「明るく」「楽しく」「温かみ」のある会社として、さらに多くの笑顔を生み出せる会社を目指しています。
                </p>
              </div>
            </li>
          </ul>
        </div><!--wrapper-->
      </section>
      <div class="wrapper">
        <section class="member" id="member">
          <div class="container">
            <div class="container-inner">
              <div class="container-inner__inner">
                <div class="member-head">
                  <div class="member-head__box">
                    <h3 class="member-title">Our member</h3>
                    <h4 class="member-subtitle">S.E.Cを創るひと</h4>
                  </div>
                </div>
                <div class="member-wrapper">
                    <div class="member-cards">
                      <div class="member-card member-card--3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/card-people01.png" alt=""></div>
                      <div class="member-card member-card--2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/card-people02.png" alt=""></div>
                      <div class="member-card member-card--1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/card-people03.png" alt=""></div>
                    </div>
                    <div class="member-boxes">
                      <div class="member-box member-box--3">
                        <span class="member-box__num">01</span>
                        <div class="member-box__meta">
                          <span class="member-box__name">丸山さん</span>
                          <span class="member-box__job">採用教育担当</span>
                        </div>
                        <p class="member-box__txt">
                          S.E.Cの特徴の一つとして、社員同士の仲が良い点が挙げられます。多分「弊社の良い所とは？」と聞くと、大半の人はそう答えると思います。<br>私自身は、人見知りであまり人と接することは得意ではありません。なので、社内で行われるレクリエーションや飲み会など、最初は正直参加をするのが不安でした。<br><br>ですが、初めて参加した社内の飲み会で、勝手がわからず佇んでいた私に、一人の先輩が話しかけてくれました。<br>その先輩は社内のことについてお話をしてくださったのはもちろんのこと、私の話もたくさん聞いてくださいました。自分から話しかけることが苦手な私は、それだけでとても心が軽くなったのを今でも覚えています。<br><br>S.E.Cは、一人一人に真摯に向き合ってくれる人ばかりが集まった会社です。転職してこの会社に入社してきた私ですが、この会社にしてよかったなーと感じています。
                        </p>
                      </div>
                      <div class="member-box member-box--2">
                        <span class="member-box__num">02</span>
                        <div class="member-box__meta">
                          <span class="member-box__name">若杉先生</span>
                          <span class="member-box__job">顧問税理士</span>
                        </div>
                        <p class="member-box__txt">
                          S.E.Cを一言で言い表すと「人」です。<br>「人」を大切にする会社です。人財教育に力を入れており、社内的には、未経験者でも働きやすい教育環境を作り、経験者にとってはスキルアップができる環境を構築しています。<br>社内の人が育てば、自ずと業務品質の維持向上ができるため、クライアントの満足度アップに繋がります。<br>また人財教育の中でも、特にコミュニケーション能力を重要視しています。<br>技術力があるのは当たり前で、それを相手にきちんと伝えることができて初めて仕事は成り立ちます。<br><br>とにかく人にこだわり、社会に貢献できる人を育てている。<br class="forPc">S.E.Cとはそんな会社です。
                        </p>
                      </div>
                      <div class="member-box member-box--1">
                        <span class="member-box__num">03</span>
                        <div class="member-box__meta">
                          <span class="member-box__name">鴫原さん</span>
                          <span class="member-box__job">一番の古株エンジニア</span>
                        </div>
                        <p class="member-box__txt">
                          皆さん初めまして。鴫原といいます。<br>この会社に入社してかれこれ15年以上たちます。<br>そんな私から、S.E.Cという会社について少しお話をしたいと思います。<br>この会社では決して短くない時間を過ごしていますが、この会社の好きなところを考えてみると、「チャレンジさせてくれるところ」だと思います。<br>以前、岡田社長が「失敗を恐れないでチャレンジして欲しい」と言っていたことを思いだします。<br>業務の都合上、業務知識やノウハウ、お客さまと築き上げた信頼関係などは、業務が切り替わると次の機会にそのまま活かせないこともあります。もちろん、時には失敗することも。<br>そんな時でも怒られることはなく、反省会を開いてくれ「うまくいかないとき、そこから何を得るか。そのことが大切だ」と背中を押してくれました。<br>また、社内業務や行事の運営役に手を挙げることで、普段なかなか携われないお仕事に携われることもあったりします。本当にいろいろな経験ができて、楽しい会社だなと感じる日々です。<br><br>そんなS.E.Cを一言で表すなら、敢えて漢字一文字だと「支」ですかね。<br>「支える」の「支」。<br>お客様を支援する<br>上司、先輩は後輩を支える<br>エンジニア一人一人は会社に支えられてチャレンジできるということが頭に浮かびました！<br><br>初めてのことにもチャレンジして経験させてくれるところは、この会社のとても好きなところです。毎日いろんなことを経験して成長していけるこの風土を、これからも続けていけるよう、頑張っていきたいと思っています。
                        </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="features" id="features">
          <div class="container container--features">
            <h3 class="features-title">Features</h3>
            <h4 class="features-subtitle">S.E.Cの特徴</h4>
            <ul class="features-items">
              <li class="features-item features-item--1 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/candy.png" alt="" class="features-circle__img --candy">
                    <span class="features-circle__txt">オフィスの置き菓子・<br>ドリンクサービスの充実</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  契約している置きお菓子やドリンクはもちろんのこと、社員のために選んだ駄菓子も常備しています。
                </p>
              </li>
              <li class="features-item features-item--2 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/event.png" alt="" class="features-circle__img --event">
                    <span class="features-circle__txt">社内イベントの充実</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  イベントが多いため社員間の結束が強く、とても仲が良い会社です。<br>近年はリモートでのイベントにも力を入れています。
                </p>
              </li>
              <li class="features-item features-item--3 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/challenge.png" alt="" class="features-circle__img --challenge">
                    <span class="features-circle__txt features-circle__txt--3">チャレンジできる<br>風土に自信あり</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  若手でも挑戦できる環境があります。過去には若手がいきなりリーダーに抜擢されたり、新制度を立ち上げた先輩もいます。
                </p>
              </li>
              <li class="features-item features-item--4 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/edu.png" alt="" class="features-circle__img --edu">
                    <span class="features-circle__txt">研修制度の充実</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  未経験者・経験者問わず研修制度に自信があります。
                </p>
              </li>
              <li class="features-item features-item--5 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/ceo.png" alt="" class="features-circle__img --ceo">
                    <span class="features-circle__txt">社長・役員との距離感が近い</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  本社では、社長と社員が同じ空間で仕事をしています。<br>お昼ご飯は一緒に食べたりと、とても距離感が近いです。
                </p>
              </li>
              <li class="features-item features-item--6 effect fadein_bottom_fast" data-class="zoomIn7">
                <figure class="features-circle">
                  <div class="features-circle__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About/sales.png" alt="" class="features-circle__img --sales">
                    <span class="features-circle__txt">とにかく絡みたがりの営業</span>
                  </div>
                </figure>
                <p class="features-txt">  
                  たとえ現場に出てもほったらかしにはしません。<br>面倒見の良い営業があなたをサポートします。
                </p>
              </li>
            </ul>
          </div>
        </section>
      </div>
      <section class="middle-nav --about">
        <ul class="middle-nav-lists">
          <li class="middle-nav-list">
            <a href="<?php echo esc_url(home_url('/about')); ?>"  class="middle-nav-link is-active">
              What's S.E.C ?
              <span class="middle-nav-link__arrow--sec forMiddleNavPc">＞</span>
              <span class="middle-nav-link__sp-arrow --sec forSp">⌵</span>
            </a>
          </li>
          <li class="middle-nav-list middle-nav-list--data">
            <a href="<?php echo esc_url(home_url('/data')); ?>" class="middle-nav-link" >Data for S.E.C
              <span class="middle-nav-link__arrow--data forMiddleNavPc">＞</span>
              <span class="middle-nav-link__sp-arrow --data forSp">⌵</span>
            </a>
          </li> 
          <li class="middle-nav-list middle-nav-list--join">
            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="middle-nav-link middle-nav-link--join" >Join us</a>
          </li>
        </ul>


      <section class="pageTop pageTop--about">
        <div class="pageTop-box">
          <p class="pageTop-box__text">Page top</p>
          <div class="pageTop-box__vertical"></div>
        </div>
      </section>
    </main>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>

    <!--各ページ固有のjsを読み込む-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/about.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
