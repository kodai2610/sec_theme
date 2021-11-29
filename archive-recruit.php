<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>
  
  <body>
    <?php get_template_part('includes/header'); ?>
    <div id="loader-bg" class="loader"></div>
    <main id="joinus">
      <div id="m-content-work--ses" class="m-content-work">
        <button  class="m-close"></button>
        <div class="m-content-work__box">
          <h3 class="m-content-work__ttl">SES</h3>
          <h4 class="m-content-work__subttl">SES事業</h4>
          <p class="m-content-work__txt">クライアントが求める技術リクエストに対し、<br class="forPc">的確なリソースを迅速にご用意いたします。<br class="forPc">その上で、ただのマッチングビジネススタイルではなく、<br class="forPc">弊社の掲げる「共創」の理念を背景に、お客様目線に立った<br class="forPc">スタンスでの新しいSESのカタチを模索しながらサービス提供をさせていただいております。<br class="forPc">業務を生み出すその場所から我々の支援は始まります。</p>
        </div>
      </div>
      <div id="m-content-work--si" class="m-content-work">
        <button  class="m-close"></button>
        <div class="m-content-work__box">
          <h3 class="m-content-work__ttl">SI business</h3>
          <h4 class="m-content-work__subttl">ワンストップ<br class="forSp">ソリューション事業（SI事業）</h4>
          <p class="m-content-work__txt">DX化や業務の効率化など、お客様からITにまつわるご要望や課題をしっかりと伺い、<br class="forPc">最適な技術をもって、問題解決のための提案、設計・開発から<br class="forPc">評価・検証、運用・保守に至るまでワンストップで対応。<br class="forPc">事業規模、内容に応じて求められたニーズに対し的確に対応<br class="forPc">し、どんな些細な内容であっても誠意をもって必ずお応えする<br class="forPc">ことをお約束いたします。</p>
        </div>
      </div>
      <div id="m-content-work--human" class="m-content-work --human">
        <button  class="m-close"></button>
        <div class="m-content-work__box">
          <h3 class="m-content-work__ttl">Human resource<br>development</h3>
          <h4 class="m-content-work__subttl">人材育成支援</h4>
          <p class="m-content-work__txt">育てることが難しいと言われるITエンジニア育成ですが、弊社では創業以来長きにわたって未経験者を広く受け入れ、育成を行い、お客様のリクエストに対して適切に対応できるエンジニアを多数輩出し、世に送り出してきました。<br>そこで得たナレッジ、ノウハウをもとに各企業様のニーズにあった人材育成制度の確立支援や実際に新人エンジニアの育成を請け負うことなど、育成面でも対応をしています。<br>技術だけでなく「人」に注力したS.E.Cだからこその人材育成支援を行います。</p>
        </div>
      </div>
      <?php
        $args = array(
          'post_type'   => 'interview',
          'post_status' => 'publish',
          'posts_per_page' =>  3,
        );
        $the_query = new WP_Query($args);
        $k = 1;
        while($the_query->have_posts()) :
          $the_query->the_post();
      ?>
      <div id="m-content-iv--<?php echo $k; ?>" class="m-content-iv">
        <button  class="m-close"></button>
        <div class="m-content-iv__header">
          <div class="m-content-iv__prof">
            <?php 
                  $modal_image = get_field('modal-img');
                  if($modal_image) {
                    $src = wp_get_attachment_image_src($modal_image, 'full');
                    echo '<img src="'.$src[0].'">';
                  }
            ?>
          </div>
          <div class="m-content-iv__meta">
            <div class="m-content-iv__name">
              <span class="m-content-iv__name--ja">
                <?php 
                  $name = get_field('name');
                  echo $name;
                ?>
              </span>
            </div>
            <div class="m-content-iv__job">
              <?php 
                $job = get_field('job');
                echo $job;
              ?>
            </div>
          </div>
        </div>
        <?php for($j = 1; $j <= 15; $j++) :?>
          <?php if(!empty(get_field("interview{$j}")['question'])) : ?>
            <div class="m-content-iv__box">
              <div class="m-content-iv__ttl">
                <?php 
                  $q = get_field("interview{$j}")['question'];
                  echo $q;
                ?>
              </div>
              <div class="m-content-iv__txt">
                <?php 
                  $a = get_field("interview{$j}")['answer'];
                  echo $a;
                ?>
              </div>
            </div>
          <?php endif; ?>  
        <?php endfor; ?>
      </div>
      <?php $k++; endwhile; ?>
      <?php wp_reset_query(); ?>
      <div id="overlay"></div>
      <a class="entry" href="#desc"><i class="far fa-file-alt"></i>Entry</a>
      <section class="top">
        <div class="top-box">
          <h3 class="top__slogan">Join us</h3>
          <h4 class="top__subslogan">採用情報</h4>
        </div>
        <div id="slider" class="slider">
          <!-- Slides -->
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-img01.png" alt=""></div>
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-text-orange.png" alt=""></div>
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-img02.png" alt=""></div>
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-text-pink.png" alt=""></div>
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-img03.png" alt=""></div>
          <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/slide-text-blue.png" alt=""></div>
        </div>
        <div id="entry-border"></div>
        <div class="top-contents">
          <div class="big-container top-contents__container">
            <div class="top-circle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/txt-circle.png" alt="" class="top-txt-circle__circle">
              <p class="top-circle__txt">
                どこよりも、明るく、<br>楽しく、温かみのある<br>会社を目指しています。
              </p>
            </div>
            <div class="top-contents__img">
              <div class="top-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/top-love.png" alt="">
              </div>
            </div>
            <p class="top-txt">
              お客様との『共創』を掲げ、確かな信頼関係を築いてきました。そんな当社に今、求められているのは更なる拡大です。将来はチームの中心となって活躍したい、チームづくりから挑戦したいなど、共に成長し、共に会社を大きくしていってくれる方をお待ちしています！
            </p>
          </div>
        </div>
      </section>
      <div class="hp_bcc-white-scale">
        <section class="work" id="work">
          <div class="sm-container">
            <h3 class="sec-ttl">Our work</h3>
            <h4 class="sec-subttl">事業内容</h4>
          </div>
          <div class="work-cat">
            <a class="split-card --ses open"  data-id="m-content-work--ses">
              <div class="split-card__box --ses">
                <div class="split-card__ttl">SES</div>
                <div class="split-card__subttl">SES事業</div>
              </div>
              <!--矢印を作る-->
              <div class="down-arrow down-arrow--work" data-id="m-content-work--ses"></div>
              <!-- <div class="down-arrow down-arrow--work"><i class="fas fa-arrow-down"></i></div> -->
            </a>
            <a class="split-card --si open"  data-id="m-content-work--si">
              <div class="split-card__box --si">
                <div class="split-card__ttl">SI business</div>
                <div class="split-card__subttl">ワンストップソリューション事業（SI事業）</div>
              </div>
              <div class="down-arrow down-arrow--work"></div>
            </a>
            <a class="split-card --human open" data-id="m-content-work--human">
              <div class="split-card__box --human">
                <div class="split-card__ttl">Human<br>resource<br>development</div>
                <div class="split-card__subttl">人材育成支援</div>
              </div>
              <div class="down-arrow down-arrow--work"></div>
            </a>
          </div>
        </section>
        <section class="point" id="point">
          <div class="sm-container">
            <h3 class="sec-ttl">Point</h3>
            <h4 class="sec-subttl">働くポイント</h4>
          </div>
          <div class="point-cards">
            <div class="point-card point-card--1 fadein_bottom_point1" data-class="bottom_active_point1">
              <div class="point-card__ttl"><div class="point-card__ttl-txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/Point1-txt.png" alt=""></div></div>
              <figure class="point-card__img-wrapper point-card__img-wrapper--1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/point1.png" alt=""></figure>
              <p class="point-card__txt">
                <span class="point-card__txt--ttl">安心して長く働ける環境</span>定着率は約90%ながら、10期以上連続黒字経営を続けています。
                社員が長く働ける環境を整備しているからこその結果です。
              </p>
            </div>
            <div class="point-card point-card--2 fadein_bottom_point2" data-class="bottom_in_active">
              <div class="point-card__ttl"><div class="point-card__ttl-txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/Point2-txt.png" alt=""></div></div>
              <figure class="point-card__img-wrapper point-card__img-wrapper--2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/point2.png" alt=""></figure>
              <p class="point-card__txt">
                <span class="point-card__txt--ttl">多様なスキルを持ち合わせた仲間</span>お客様との「共創」はもちろん、社内でも職種や年齢、スキルや性別の垣根を超えて、全員が協力し合う風土があります。
              </p>
            </div>
            <div class="point-card point-card--3 fadein_bottom_point3" data-class="bottom_active_point3">
              <div class="point-card__ttl"><div class="point-card__ttl-txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/Point3-txt.png" alt=""></div></div>
              <figure class="point-card__img-wrapper point-card__img-wrapper--3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/point3.png" alt=""></figure>
              <p class="point-card__txt">
                <span class="point-card__txt--ttl">希望を叶える豊富な案件数</span>有名企業向けの案件を多数保有しています。業界・業種も様々なため、希望に合わせた配属が可能です。
              </p>
            </div>
          </div>
        </section>
        <section class="view" id="view">
          <div class="sm-container">
            <h3 class="sec-ttl">Interview</h3>
            <h4 class="sec-subttl">社員インタビュー</h4>
          </div>
          <?php
            $args = array(
              'post_type'   => 'interview',
              'post_status' => 'publish',
              'posts_per_page' =>  3,
            );
            $the_query = new WP_Query($args);
          ?>
          <div class="view-cards">
            <?php 
              $i = 1;
              while($the_query->have_posts()) :
                $the_query->the_post();
            ?>
            <div class="view-card view-card--<?php echo $i;?> open"  data-id="m-content-iv--<?php echo $i;?>">
              <div class="view-card__comment">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/comments.png" alt="">
                <p class="view-card__comment__txt">
                  <?php 
                     $comment = get_field('comments');
                     if($comment) {
                        echo $comment;
                     };
                  ?>
                </p>
              </div>
              <div class="view-card__img-wrapper view-card__img-wrapper--0<?php echo $i;?>">
                <?php 
                  $archive_image = get_field('archive-img');
                  if($archive_image) {
                    $src = wp_get_attachment_image_src($archive_image, 'full');
                    echo '<img src="'.$src[0].'">';
                  }
                ?>
              </div>
              <div class="view-card__data">
                <div class="view-card__name">
                  <span class="view-card__name--ja">
                    <?php 
                      $name = get_field('name');
                      echo $name;
                    ?>
                  </span><!--<span class="view-card__name--en">Taro Yamada</span>--></div>
                <div class="view-card__job">
                  <?php 
                    $job = get_field('job');
                    echo $job;
                  ?>
                </div>
              </div>
            </div>
            <?php $i++; endwhile; ?>
          </div>
          <?php wp_reset_query(); ?>
        </section>
        <div class="loop-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/joinus_slide.png" alt="" class="loop-wrap__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/joinus/joinus_slide.png" alt="" class="loop-wrap__img">
        </div>
        <div id="desc"></div>
        <section class="desc">
          <div class="sm-container">
            <h3 class="sec-ttl">Job description</h3>
            <h4 class="sec-subttl">採用情報</h4>
            <?php 
              $args = [
                'posts_per_page'  => 10,
                'post_type'       => 'recruit',
              ];
              $posts = get_posts( $args );
            ?>
            <?php if($posts) : ?>
            <div class="desc-items">
              <?php foreach($posts as $post) : setup_postdata( $post ); ?>
              <a class="desc-item" href="<?php the_permalink(); ?>">
                <?php if(wp_is_mobile()) : ?>
                <p class="desc-item__ttl"><?php the_field('archive-title-sp'); ?></p>
                <?php else : ?>
                <p class="desc-item__ttl"><?php the_field('archive-title'); ?></p>
                <?php endif; ?>
                <div class="down-arrow down-arrow--desc"></div>
              </a>
              <?php endforeach;?>
            </div>
            <?php endif;wp_reset_postdata();  ?>
          </div>
        </section>
        <section class="middle-nav --join">
          <ul class="middle-nav-lists">
            <li class="middle-nav-list">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="middle-nav-link" >
                What's S.E.C ?
                <span class="middle-nav-link__arrow--sec forMiddleNavPc">＞</span>
                <span class="middle-nav-link__sp-arrow --sec forSp">⌵</span>
              </a>
            </li>
            <li class="middle-nav-list middle-nav-list--data">
              <a href="<?php echo esc_url(home_url('/data')); ?>" class="middle-nav-link">Data for S.E.C
                <span class="middle-nav-link__arrow--data forMiddleNavPc">＞</span>
                <span class="middle-nav-link__sp-arrow --data forSp">⌵</span>
              </a>
            </li> 
            <li class="middle-nav-list middle-nav-list--join is-active">
              <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="middle-nav-link middle-nav-link--join is-active">Join us</a>
            </li>
          </ul>
        </section>
      </div>
      <section class="pageTop pageTop--about">
        <div class="pageTop-box">
          <p class="pageTop-box__text">Page top</p>
          <div class="pageTop-box__vertical"></div>
        </div>
      </section>
    </main>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
    <!-- slick CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--各ページ固有のjsを読み込む-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/joinus.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
