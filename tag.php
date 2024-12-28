<?php get_header(); ?>

<?php echo get_template_part('include/header'); ?>

<div class="bl_mv"></div>

<!-- contents -->
<div class="ly_cont">
  <div class="ly_cont_inner ly_cont__col">

    <!-- main -->
    <main class="ly_cont_main">
      <article>

        <?php if( have_posts() ): ?>
        <ul class="bl_archive">
          <?php while( have_posts() ): the_post(); ?>
          <li class="bl_archive_item">
            <a href="<?php the_permalink(); ?>" class="bl_archive_link">
              <div class="bl_archive_head">
                <time class="bl_archive_time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time>
                <ul class="bl_tagWrapper">
                  <?php
                    $tags = get_the_tags();
                    foreach ($tags as $tag) {
                      echo '<li class="el_tagLabel">' . $tag->name . '</li>';
                    }
                  ?>
                </ul>
              </div>
              <!-- /.bl_archive_head -->
              <h3 class="bl_archive_ttl"><?php the_title(); ?></h3>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php else: ?>
        <p>記事がありません。</p>
        <?php endif; ?>

      <?php wp_pagenavi(); ?>

      </article>
    </main>

    <!-- aside -->
    <aside class="ly_aside">
      <div class="ly_aside_inner bl_aside">
        <?php echo get_template_part('include/aside'); ?>
      </div>
      <!-- /.ly_aside_inner -->
    </aside>

  </div>
  <!-- /.ly_cont_inner -->
</div>
<!-- /.ly_cont -->

<?php get_footer(); ?>
