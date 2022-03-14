<?php get_header(); ?>

<div class="bl_mv"></div>

<!-- main -->
<main>
<article>

<?php if( have_posts() ): ?>

<!-- contents -->
<section class="ly_post">
<div class="ly_cont_inner">

<?php while( have_posts() ): the_post(); ?>
<article class="bl_post">

<div class="bl_post_head">
<time class="bl_post_time" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
<ul class="bl_post_catLabel">
<li>カテゴリ</li>
</ul>
</div>
<!-- /.bl_post_head -->

<h2 class="bl_post_ttl"><?php the_title(); ?></h2>

<div class="bl_post_conts">
  <?php the_content(); ?>
</div>
<!-- /.bl_post_conts -->



</article>
<!-- /.bl_post -->
<?php endwhile; ?>

</div>
<!-- /.ly_cont_inner -->
</section>
<!-- /.bl_post -->
<?php endif; ?>

</article>
</main>

<?php get_footer(); ?>
