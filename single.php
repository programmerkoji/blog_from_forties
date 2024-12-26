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

        <!-- contents -->
        <section class="ly_post">

          <?php while( have_posts() ): the_post(); ?>
          <article class="bl_post">

            <div class="bl_post_head">
              <time class="bl_post_time" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
              <ul class="bl_post_catLabel">
                <?php
                  $tags = get_the_tags();
                  foreach ($tags as $tag) {
                    echo '<li class="el_tagLabel">' . $tag->name . '</li>';
                  }
                ?>
              </ul>
            </div>
            <!-- /.bl_post_head -->

          <h1 class="bl_post_ttl"><?php the_title(); ?></h1>

          <div class="bl_post_conts">
            <?php the_content(); ?>
          </div>
          <!-- /.bl_post_conts -->

          <div class="bl_pager">
            <ul class="bl_pager_inner">
              <li class="bl_pager_link bl_pager_prev"><?php previous_post_link('%link', '← 前の記事へ'); ?></li>
              <li class="bl_pager_link bl_pager_next"><?php next_post_link('%link', '次の記事へ →'); ?></li>
            </ul>
          </div>
          <!-- /.bl_pager -->

          </article>
          <!-- /.bl_post -->
          <?php endwhile; ?>

        </section>
        <!-- /.bl_post -->
        <?php endif; ?>

      </article>
    </main>

    <!-- aside -->
    <aside class="ly_aside">
      <?php echo get_template_part('include/aside'); ?>
    </aside>

  </div>
  <!-- ly_cont_inner -->
</div>
<!-- /.ly_cont -->

<?php get_footer(); ?>
