<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <!-- style sheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_template_part('includes/header'); ?>
    <main id="job-desc">
      <div class="top">
        <div class="top-meta">
          <?php if(wp_is_mobile()) : ?>
            <div class="top-title"><?php the_field('job-name-en-sp'); ?></div>
          <?php else : ?>
            <div class="top-title"><?php the_field('job-name-en-pc'); ?></div>
          <?php endif; ?>  
          <div class="top-subtitle"><?php the_field('job-name-ja');?></div>
        </div>
      </div>
      <div class="job-wrapper" id="js-bg">
        <section class="job" id="js-target">
          <div class="job__head">
            <h3 class="job__ttl"><?php the_field('job-name-ja');?></h3>
            <?php 
              $parent_term = wp_get_post_terms(get_the_ID(), 'method', [
                'orderby' => 'description',
              ]);
              foreach($parent_term as $child_term) : 
            ?>
            <?php if($child_term->name == '新卒採用') : ?>
            <span class="job__label job__label--yellow"><?php echo esc_html($child_term->name); ?></span>
            <?php endif; ?>
            <?php if($child_term->name == '中途採用') : ?>
            <span class="job__label job__label--green"><?php echo esc_html($child_term->name);?></span>
            <?php endif; ?>
            <?php if($child_term->name == 'その他') : ?>
            <span class="job__label job__label--blue"><?php echo esc_html($child_term->name);?></span>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <p class="job__desc">
            <?php the_field('description');?>
          </p>
          <div class="job-data">
            <?php for($i = 1; $i <= 15; $i++) : ?>
            <?php if(!empty(get_field("item{$i}")['title'])) : ?>
              <dl class="job-data__row">
                <dt class="job-data__dt">
                  <?php echo get_field("item{$i}")['title']; ?>
                </dt>
                <dd class="job-data__dd"><?php echo get_field("item{$i}")['content']; ?></dd>
              </dl>
            <?php endif; ?>
            <?php endfor; ?>
          </div>
        </section>
      </div>
      <?php if(get_field('item1')['content'] !== '') : ?>
      <section class="entry" id="entry">
        <div class="hp_tac">
          <div class="title3">
            <div class="title3__text title3__text--en">Entry form</div>
            <div class="title3__text title3__text--ja">応募フォーム</div>
          </div>
        </div>
        <p class="entry__desc">以下の応募フォームを入力ください。<br>入力をいただいた内容を基に書類選考をさせていただきます。</p>
        <span class="entry__must hp_orange">すべて必須項目です。</span>
        <?php echo do_shortcode('[mwform_formkey key="563"]'); ?>
        <?php endif; ?>
        <a class="entry__link-to-top" href="<?php echo esc_url(home_url('/')); ?>/recruit#desc">募集職種一覧へ戻る ></a>
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
    <!--各ページ固有のjsを読み込む-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/job-desc.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
