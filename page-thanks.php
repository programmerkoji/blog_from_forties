<?php get_header(); ?>

<?php echo get_template_part('include/portfolio/header'); ?>

<main class="ly_main">
	<section class="bl_contact bl_thanks">
		<div class="ly_cont_inner">
			<h2 class="bl_contact_ttl">お問い合わせありがとうございます。</h2>
			<p>
				お送り頂きました内容を確認の上、折り返しご連絡させて頂きます。<br>
				また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。
			</p>
			<p>
				しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。<br>
				お手数ですがもう一度フォームよりお問い合わせ頂きますようお願い申し上げます。<br>
			</p>
			<p>また、ドメイン指定をされている場合は、「@from-forties.net」からのメールが受信できるようあらかじめ設定をお願いいたします。</p>
			<p>※お問い合わせ内容によってはご連絡いたしかねる場合もございますので、ご了承ください。</p>
			<div class="bl_thanks_btnWrapper">
				<a href="<?php echo esc_url( home_url('/portfolio')); ?>" class="bl_form_btn">ポートフォリオへ</a>
				<a href="<?php echo esc_url( home_url('/')); ?>" class="bl_form_btn">ブログTOPへ</a>
			</div>
			<!-- mwformのキーは本番のキーでpushすること -->
			<?php echo do_shortcode('[mwform_formkey key="176"]'); 
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>