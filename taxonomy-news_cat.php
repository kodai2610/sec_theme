
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
    <main id="news">
      <section class="top">
        <div class="container">
          <!--使い回しカード-->
          <div class="card">
            <div class="card-container">
              <div class="card-contents">
                <div class="card-contents-wrapper">
                  <div class="card-title">
                    <h3 class="card-title__text card-title__text--en js-textillate js-sec6">News</h3>
                    <h3 class="card-title__text card-title__text--ja js-textillate js-sec6">お知らせ</h3>
                  </div>
                  <!-- <p class="card-contents-wrapper__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p> -->
                </div>
              </div>
              <div class="card-image-wrapper">
                <div class="card-image effect fadein_bottom_5" data-class="bottom_in_active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/news-card.png" alt="" class="card-image__image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="news" id="lists">
        <div class="title02">
          <div class="title02__main">News</div>
          <div class="title02__sub">お知らせ一覧</div>
        </div>
        <div class="container">
          <ul class="news-header">
            <li class="news-header-list">
              <a href="<?php echo home_url();?>/news#lists" class="news-header-link">すべて
                <div class="viewmore__icon viewmore__icon--news-sm">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image--sm">
                </div>
              </a>
            </li>
            <li class="news-header-list">
              <a href="<?php echo home_url();?>/news-newly#lists" class="news-header-link">新着情報
                <div class="viewmore__icon viewmore__icon--news-sm">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image--sm">
                </div>
              </a>
            </li>
            <?php
              $url = $_SERVER['REQUEST_URI'];
              $categories = get_terms('news_cat', array('hide_empty'=>false));
              foreach ($categories as $category) :
            ?>
            <li class="news-header-list">
              <?php
                  $class = '';
                  if(strpos($url, "/news_cat/". $category->slug) !== false) {
                    $class = 'is-active';
                  }
                  // if ($url === '/news_cat/' . $category->slug . '/') {
                  //   $class = 'is-active';
                  // }
              ?>
              <a href="<?php echo get_category_link($category->term_id);?>/#lists" class="news-header-link <?php echo $class;?>"><?php echo $category->name; ?>
                <div class="viewmore__icon viewmore__icon--news-sm">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image--sm">
                </div>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="news-contents">
            <ul class="news-lists">
              <?php
                $term = wp_get_object_terms($post->ID, 'news_cat');
                $args = array(
                  'post_type'    => 'news',
                  'tax_query'    => array(
                    array(
                      'taxonomy'  => 'news_cat',
                      'field'    => 'slug',
                      'terms'    => $term[0]->slug
                    )
                  ),
                );
                $custom_query = new WP_Query($args);
                if ($custom_query->have_posts()) :
                  while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                ?>
              <li class="news-list">
                <a href="<?php the_permalink();?>" class="news-link">
                  <div class="news-link-meta">
                    <span class="news-link-meta__date"><?php echo get_the_date('Y.m.d'); ?></span>
                    <span class="category-label">
                      <?php
                        echo $term[0]->name;
                      ?>
                    </span>
                  </div>
                  <p class="news-link-text">
                    <?php 
                      $title = get_the_title($custom_query->ID);
                      $top_title = mb_substr($title,0,14,'UTF-8');
                      $bottom_title = mb_substr($title,14,null,'UTF-8');
                    ?>
                    <?php echo $top_title; ?><br class="forSp"><?php echo $bottom_title; ?>
                  </p>
                  <div class="viewmore__icon viewmore__icon--news forPc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/viewmore-arrow.png" alt="" class="viewmore__icon__image">
                  </div>
                </a>
              </li>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
          </div>
          <?php if(paginate_links()) : ?>
          <div class="pagination">
            <?php
            echo 
            paginate_links([
              'end_size' => 1,
              'mid_size' => 1,
              'prev_next' => true,
              'prev_text' => '＜',  
              'next_text' => '＞',
            ])
            ?>
            <!-- <span class="pagenumbers prev">＜</span>
            <span class="pagenumbers current --num">1</span>
            <span class="pagenumbers --num">2</span>
            <span class="pagenumbers --num">3</span>
            <span class="pagenumbers next">＞</span> -->
          </div>
          <?php endif; ?>
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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/card.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
