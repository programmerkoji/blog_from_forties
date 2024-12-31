<?php get_header(); ?>

<?php echo get_template_part('include/portfolio/header'); ?>

<main class="ly_main">
  <section class="bl_works" id="works">
    <div class="ly_cont_inner">
      <h2 class="bl_works_ttl">Works</h2>
      <?php
      $current_page_id = get_the_ID();
      $args = array(
        'post_type'      => 'page',          // 固定ページを対象
        'posts_per_page' => -1,              // すべての子ページを取得
        'post_parent'    => $current_page_id, // 親ページを指定
        'orderby'        => 'menu_order',    // 表示順でソート
        'order'          => 'ASC'            // 昇順で表示
      );
      $child_pages = new WP_Query($args);
      if ($child_pages->have_posts()) : ?>
        <ul class="bl_cardUnit">
        <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
        <li class="bl_card">
          <a href="<?php the_permalink(); ?>" class="bl_card_link">
            <figure class="bl_card_imgWrapper">
              <img src="<?php echo the_field('image01'); ?>" alt="<?php the_title(); ?>">
            </figure>
            <div class="bl_card_body">
              <h3 class="bl_card_ttl"><?php the_title(); ?></h3>
              <p>- <?php the_field('サービス種類'); ?> -</p>
              <p><?php the_field('使用言語、フレームワーク'); ?></p>
              <div class="bl_card_linkTextWrapper">
                <span class="bl_card_linkText">詳細はこちら</span>
              </div>
            </div>
          </a>
        </li>
        <!-- /.bl_card -->
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
        </ul>
      <?php endif; ?>
    </div>
  </section>
  <section class="bl_blog">
    <div class="ly_cont_inner">
      <div class="bl_blog_inner">
        <h2 class="bl_blog_ttl">Blog</h2>
        <ul class="bl_archive">
          <?php
          // クエリを設定
          $args = array(
            'post_type'      => 'post',   // 投稿タイプを指定（通常の投稿なら 'post'）
            'posts_per_page' => 3,       // 表示する投稿数
            'orderby'        => 'date',  // 並び替え基準（ここでは投稿日）
            'order'          => 'DESC'   // 降順（新しい投稿から表示）
          );
          // クエリの実行
          $query = new WP_Query($args);
          // 投稿がある場合のループ
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
          ?>
              <li class="bl_archive_item">
                <a href="<?php the_permalink(); ?>" class="bl_archive_link" target="_blank">
                  <div class="bl_archive_head">
                    <time class="bl_archive_time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
                    <ul class="bl_tagWrapper">
                      <?php
                      $tags = get_the_tags();
                      foreach ($tags as $tag) {
                        echo '<li class="el_tagLabel">' . $tag->name . '</li>';
                      }
                      ?>
                    </ul>
                  </div>
                  <h3 class="bl_archive_ttl"><?php the_title(); ?></h3>
                </a>
              </li>
          <?php
            endwhile;
            echo '</div>';
          else :
            echo '<p>投稿がありません。</p>';
          endif;
          // クエリのリセット
          wp_reset_postdata();
          ?>
        </ul>
        <div class="bl_btnWrapper">
          <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="el_btn">ブログTOPへ</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bl_cta">
    <div class="ly_cont_inner">
      <h2 class="bl_cta_ttl">Contact</h2>
      <p class="bl_cta_text">
        お仕事のご依頼、ご相談、その他の問い合わせなど、<br class="sp_only">お気軽にご連絡ください。
      </p>
      <div class="bl_btnWrapper">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="el_btn">お問い合わせ</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>