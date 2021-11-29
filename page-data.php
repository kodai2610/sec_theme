<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
  <!-- style sheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('includes/header'); ?>
  <main id="data">
    <div id="fullpage">
      <section class="top section">
        <div class="top__wrapper">
          <div class="top-box">
            <h3 class="top__slogan">Data for S.E.C</h3>
            <h4 class="top__subslogan">数字でみるS.E.C</h4>
          </div>
          <div class="top-icons">
            <div class="top-icons__icon top-icons__icon--01 bounce forPc" data-class="scroll_bounce01">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/people01.png" alt="" />
            </div>
            <div class="top-icons__icon top-icons__icon--02 bounce" data-class="scroll_bounce02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/people02.png" alt="" />
            </div>
            <div class="top-icons__icon top-icons__icon--03 bounce" data-class="scroll_bounce03">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/people03.png" alt="" />
            </div>
            <div class="top-icons__icon top-icons__icon--04 bounce forPc" data-class="scroll_bounce04">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/people04.png" alt="" />
            </div>
            <div class="top-icons__icon top-icons__icon--05 bounce" data-class="scroll_bounce05">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/people05.png" alt="" />
            </div>
            <div class="top-icons__circle top-icons__circle--01 data-effect" data-class="zoomIn2-delay4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle01.png" alt="" />
            </div>
            <div class="top-icons__circle top-icons__circle--02 data-effect" data-class="zoomIn2-delay1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle02.png" alt="" />
            </div>
            <div class="top-icons__circle top-icons__circle--03 data-effect" data-class="zoomIn2-delay5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle03.png" alt="" />
            </div>
            <div class="top-icons__circle top-icons__circle--04 data-effect" data-class="zoomIn2-delay2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle04.png" alt="" />
            </div>
            <div class="top-icons__circle top-icons__circle--05 data-effect" data-class="zoomIn2-delay3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle05.png" alt="" />
            </div>
            <div class="
                  top-icons__circle top-icons__circle--06
                  data-effect
                  forPc
                " data-class="zoomIn2-delay6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/circle06.png" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="data section">
          <div class="data__3">
            <div class="matter-left horn data-effect fadein_bottom_delay_half" data-class="bottom_in_active">案件数 / 年</div>
            <div class="matter-center bounce" data-class="scroll_bounce"><img src="./assets/img/data/matter.png" alt=""></div>
            <div class="matter-right data-effect fadein_bottom_delay_1s" data-class="bottom_in_active"><span class="data__num">150</span>件</div>
          </div>
        </section> -->
      <!--employee-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --employee data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            社員数
          </div>
          <div class="employee">
            <div class="employee-1 bounce" data-class="scroll_bounce">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/employee1.png" alt="" />
            </div>
            <div class="employee-2 bounce" data-class="scroll_bounce">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/employee2.png" alt="" />
            </div>
            <div class="employee-3 bounce" data-class="scroll_bounce">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/employee3.png" alt="" />
            </div>
            <div class="employee-4 bounce" data-class="scroll_bounce">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/employee4.png" alt="" />
            </div>
          </div>
          <div class="matter-right data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
            約<span class="data__num --one">60</span>名
          </div>
        </div>
      </section>
      <!--sex-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --sex data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            男女比
          </div>
          <div class="two-wrapper">
            <div class="two-center --sex">
              <div class="two-center__img --sex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/girl.png" alt="" class="bounce" data-class="scroll_bounce" />
              </div>
              <div class="data-ratio data-effect fadein_bottom_delay_1s --girl" data-class="bottom_in_active">
                <span class="job-ratio__ttl --girl">女</span><span class="job-ratio__data --percent"><span class="data__num data__num--job --double">40</span>%</span>
              </div>
            </div>
            <div class="two-right --sex">
              <div class="two-right__img --sex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/men.png" alt="" class="bounce" data-class="scroll_bounce" />
              </div>
              <div class="data-ratio data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
                <span class="job-ratio__ttl">男</span><span class="job-ratio__data"><span class="data__num data__num--job --double">60</span>%</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--gene-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --gene data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            キャリア別年代
          </div>
          <div class="gene-center">
            <div class="
                  data-ratio data-ratio--4-lt
                  data-effect
                  fadein_bottom_delay_1s
                " data-class="bottom_in_active">
              <span class="job-ratio__ttl --gene">2年以下</span><span class="job-ratio__data --gene"><span class="data__num data__num--job --gene">31.4</span>%</span>
            </div>
            <div class="
                  data-ratio data-ratio--4-rt
                  data-effect
                  fadein_bottom_delay_1s
                " data-class="bottom_in_active">
              <span class="job-ratio__ttl --gene">2~5年</span><span class="job-ratio__data --gene"><span class="data__num data__num--job --gene">27.7</span>%</span>
            </div>
            <div class="
                  data-ratio data-ratio--4-lb
                  data-effect
                  fadein_bottom_delay_1s
                " data-class="bottom_in_active">
              <span class="job-ratio__ttl --gene">6~10年</span><span class="job-ratio__data --gene"><span class="data__num data__num--job --gene">24.0</span>%</span>
            </div>
            <div class="
                  data-ratio data-ratio--4-rb
                  data-effect
                  fadein_bottom_delay_1s
                " data-class="bottom_in_active">
              <span class="job-ratio__ttl --gene">11年以上</span><span class="job-ratio__data --gene"><span class="data__num data__num--job --gene">16.6</span>%</span>
            </div>
            <div class="gene-center__img bounce" data-class="scroll_bounce_middle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/gene.png" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!--age-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --age data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            平均年齢
          </div>
          <div class="one --age">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/age.png" alt="" class="bounce" data-class="scroll_bounce" />
            <div class="data-ratio data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">28</span>歳</span>
            </div>
          </div>
        </div>
      </section>
      <!--over-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --overtime data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            平均残業時間
          </div>
          <div class="one --overtime">
            <div class="one__img --overtime">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/overtime.png" alt="" class="bounce" data-class="scroll_bounce" />
            </div>
            <div class="data-ratio --overtime data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one">約<span class="data__num data__num--job --one">15</span>時間</span>
            </div>
          </div>
        </div>
      </section>
      <!--dev-->
      <section class="data section">
        <div class="data__3">
          <div class="horn data-effect fadein_bottom_delay_half --dev" data-class="bottom_in_active">
            開発・インフラ
          </div>
          <div class="two-wrapper">
            <div class="two-center --dev">
              <div class="two-center__img --dev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/dev-01.png" alt="" class="bounce" data-class="scroll_bounce" />
              </div>
              <div class="data-ratio data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
                <span class="job-ratio__ttl">開発</span><span class="job-ratio__data"><span class="data__num data__num--job --double">85</span>%</span>
              </div>
            </div>
            <div class="two-right --dev">
              <div class="two-right__img --dev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/dev-02.png" alt="" class="bounce" data-class="scroll_bounce" />
              </div>
              <div class="data-ratio data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
                <span class="job-ratio__ttl">インフラ</span><span class="job-ratio__data"><span class="data__num data__num--job --double">15</span>%</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--max-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --max data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            過去最高<br />連続有給消化日数
          </div>
          <div class="one --max">
            <div class="one__img --max">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/max.png" alt="" class="bounce" data-class="scroll_bounce" />
            </div>
            <div class="data-ratio --max data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">20</span>日間</span>
            </div>
          </div>
        </div>
      </section>
      <!--tele-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --tele data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            リモート率
          </div>
          <div class="one --tele">
            <div class="one__img --tele">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/tele.png" alt="" class="bounce" data-class="scroll_bounce" />
            </div>
            <div class="data-ratio --tele data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">90</span>%以上</span>
            </div>
          </div>
        </div>
      </section>
      <!--marry-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --marry data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            既婚率
          </div>
          <div class="one --marry">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/marry.png" alt="" class="bounce" data-class="scroll_bounce" />
            <div class="data-ratio --marry data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">30</span>%</span>
            </div>
          </div>
        </div>
      </section>
      <!--born-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --born data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            育休・産休<br />取得率
          </div>
          <div class="one --born">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/born.png" alt="" class="bounce" data-class="scroll_bounce" />
            <div class="data-ratio --born data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">100</span>%</span>
            </div>
          </div>
        </div>
      </section>
      <!--holi-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --hori data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            年間休日日数
          </div>
          <div class="one --hori">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/hori.png" alt="" class="bounce" data-class="scroll_bounce" />
            <div class="data-ratio --hori data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">125</span>日</span>
            </div>
          </div>
        </div>
      </section>
      <!--cola-->
      <section class="data section">
        <div class="data__3">
          <div class="horn --cola data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            社長の1日の最高<br />コーラ消費量
          </div>
          <div class="one --cola">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/cola02.png" alt="" class="bounce" data-class="scroll_bounce" />
            <div class="data-ratio --cola data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --one"><span class="data__num data__num--job --one">4</span>ℓ</span>
            </div>
          </div>
        </div>
      </section>
      <!--snack-->
      <section class="data --last section">
        <div class="data__3 --snack">
          <div class="horn --snack data-effect fadein_bottom_delay_half" data-class="bottom_in_active">
            社長の1日の<br />最高駄菓子消費量
          </div>
          <div class="one --snack">
            <div class="one__img --snack">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/snack02.png" alt="" class="bounce" data-class="scroll_bounce" />
            </div>
            <div class="data-ratio --snack data-effect fadein_bottom_delay_1s" data-class="bottom_in_active">
              <span class="job-ratio__data --snack"><span class="data__num data__num--job --snack">7-8</span>個</span>
            </div>
          </div>
        </div>
        <div class="middle-nav middle-nav--data">
          <ul class="middle-nav-lists">
            <li class="middle-nav-list">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="middle-nav-link middle-nav-link--data">
                What's S.E.C ?
                <span class="middle-nav-link__arrow--sec forMiddleNavPc">＞</span>
                <span class="middle-nav-link__sp-arrow --sec forSp">⌵</span>
              </a>
            </li>
            <li class="middle-nav-list middle-nav-list--data is-active">
              <a href="<?php echo esc_url(home_url('/data')); ?>" class="middle-nav-link is-active middle-nav-link--data">
                Data for S.E.C
                <span class="middle-nav-link__arrow--data forMiddleNavPc">＞</span>
                <span class="middle-nav-link__sp-arrow --data forSp">⌵</span>
              </a>
            </li>
            <li class="middle-nav-list middle-nav-list--join">
              <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="middle-nav-link middle-nav-link--join-data">Join us</a>
            </li>
          </ul>
        </div>
        <section class="pageTop">
          <div class="pageTop-box">
            <p class="pageTop-box__text">Page top</p>
            <div class="pageTop-box__vertical"></div>
          </div>
        </section>
        <?php get_template_part('includes/footer'); ?>
      </section>
    </div>
  </main>
  
  <?php get_footer(); ?>

  <!-- fullPage js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js" integrity="sha512-bxzECOBohzcTcWocMAlNDE2kYs0QgwGs4eD8TlAN2vfovq13kfDfp95sJSZrNpt0VMkpP93ZxLC/+WN/7Trw2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/jquery.easings.min.js" integrity="sha512-rXZZDfRSa6rsBuT78nRTbh1ccwpXhTCspKUDqox3hUQNYdjB6KB6mSj6mXcB9/5F5wODAJnkztXPxzkTalp11w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js" integrity="sha512-FzESM/E7XJBqcJyrXa08gRcpp5rDHO661C0L3vH4NsZfUWUsjN4+t6Lg8h+e8TMR2aYijIrcT+CPGq7tSugRzA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--各ページ固有のjsを読み込む-->
  <script src="<?php echo get_template_directory_uri();?>/assets/js/data.js"></script>
  <?php wp_footer(); ?>
</body>

</html>