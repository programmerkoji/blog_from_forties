<?php
/*
Template Name: Works Template
*/
get_header();
?>

<?php echo get_template_part('include/portfolio/header'); ?>

<?php
$link_url = get_field('url');
$image_url01 = get_field('image01');
$figcaption01 = get_field('figcaption01');
$summary = get_field('アプリ概要');
$func_list01 = get_field('機能一覧01');
$use_tech = get_field('使用技術');
$other = get_field('その他');
?>

<main class="ly_main">
	<section class="bl_works">
		<div class="ly_cont_inner">

			<h2 class="el_mainTtl"><?php echo get_the_title(); ?></h2>

			<div class="bl_works_inner">
				<div class="bl_works_imgWrapper">
					<a href="<?php echo $link_url; ?>" target="_blank" class="bl_works_imgLink">
						<figure class="bl_works_img">
							<?php
							if ($image_url01) {
								echo '<img src="' . esc_url($image_url01) . '"  width="16" height="9" alt="">';
							}
							if ($figcaption01) {
								echo '<figcaption>' . $figcaption01 . '</figcaption>';
							}
							?>
						</figure>
					</a>
				</div>
				<!-- /.bl_works_imgWrapper -->
				<div class="bl_works_body bl_detail">
					<h3 class="bl_detail_ttl">サイトURL</h3>
					<p><a href="<?php echo $link_url; ?>" target="_blank"><?php echo $link_url; ?></a></p>

					<?php if ($summary) : ?>
						<h3 class="bl_detail_ttl">概要</h3>
						<p><?php echo $summary; ?></p>
					<?php endif; ?>
					<?php if ($func_list01) : ?>
						<h3 class="bl_detail_ttl">機能一覧</h3>
						<div class="bl_functionList">
							<div class="bl_functionList_tableWrapper">
								<table>
									<tbody>
										<tr>
											<td><?php echo $func_list01; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					<?php endif; ?>
					<?php if ($use_tech) : ?>
						<h3 class="bl_detail_ttl">使用技術</h3>
						<ul class="el_bulletList">
							<?php echo $use_tech; ?>
						</ul>
					<?php endif; ?>
					<?php if ($other) : ?>
						<h3 class="bl_detail_ttl">その他</h3>
						<p><?php echo $other; ?></p>
					<?php endif; ?>
					<?php
					$tag_name = get_field('タグ名');
					if (!empty($tag_name)) :
						$tag_slug = $tag_name;
						$args = [
							'tag' => $tag_slug,
							'posts_per_page' => 5,
							'tax_query' => array(
								array(
									'taxonomy' => 'post_tag', // タグのタクソノミー
									'operator' => 'EXISTS',  // タグが存在するもののみ取得
								),
							),
						];
						$query = new WP_Query($args);
						if ($query->have_posts()) :
					?>
							<div class="bl_worksBlog">
								<h3 class="bl_detail_ttl">関連するブログ記事</h3>
								<ul class="el_bulletList">
									<?php while ($query->have_posts()) : $query->the_post(); ?>
										<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?><i class="icon-blank"></i></a></li>
									<?php endwhile; ?>
								</ul>
								<?php if ($query->found_posts > 5) : ?>
									<div class="bl_blog_linkText_wrap">
										<a href="<?php echo get_tag_link(get_term_by('slug', $tag_slug, 'post_tag')->term_id); ?>" class="bl_blog_linkText" target="_blank">もっと見る</a>
									</div>
								<?php endif; ?>
							</div>
					<?php
						endif;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<!-- /.bl_works_body -->
			</div>
			<!-- /.bl_works_inner -->
		</div>
		<!-- /.ly_cont_inner -->
	</section>
</main>

<?php get_footer(); ?>