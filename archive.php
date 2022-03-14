<?php get_header(); ?>

<!-- contents -->
<div class="ly_cont">
<div class="ly_cont_inner ly_cont__col">

<!-- main -->
<main class="ly_cont_main">
<article>

<!-- card -->
<ul class="bl_cardUnit">

<?php
if( have_posts() ):
while( have_posts() ): the_post();
?>
<li class="bl_card">
<a href="<?php the_permalink(); ?>">
<figure class="bl_card_imgWrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_620*348.png" alt=""></figure>
<div class="bl_card_body">
<div class="bl_card_bodyHead">
<time class="el_date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time>
<span class="el_catLabel">CSS関連</span>
</div>
<h3 class="bl_card_ttl"><?php the_title(); ?></h3>
</div>
</a>
</li>
<?php
endwhile;
else:
?>
<p>記事がありません。</p>
<?php
endif;
?>

</ul>

</article>
</main>

<!-- aside -->
<aside class="ly_aside">

</aside>

</div>
</div>

<?php get_footer(); ?>
