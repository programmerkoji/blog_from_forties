<?php get_header(); ?>

<?php echo get_template_part('include/portfolio/header'); ?>

<main class="ly_main">
	<section class="bl_contact">
		<div class="ly_cont_inner">
			<h2 class="bl_contact_ttl">内容確認</h2>
			<!-- mwformのキーは本番のキーでpushすること -->
			<?php echo do_shortcode('[mwform_formkey key="176"]'); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>