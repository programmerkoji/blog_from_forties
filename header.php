<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<?php $title ="";
if(is_home() || is_front_page()) {
}elseif(is_page()) {
  $title  = trim(wp_title('', false))." | ";
}elseif(is_single()) {
  $title  = get_the_title() . " | ";
}elseif(is_post_type_archive() || is_singular() || is_tax()) {
  $title  = esc_html(get_post_type_object(get_post_type())->label )." | ";
}?>
<title><?php echo $title; bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>

<body>

<!-- header -->
<header class="ly_head">
<div class="ly_cont_inner bl_head">

<?php if(is_home() || is_front_page()): ?>
<h1 class="bl_head_logo"><a href="<?php echo esc_url( home_url('/')); ?>" class="hp_opacity1"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" width="256" height="52" alt="40第からの挑戦"></a></h1>
<?php else: ?>
<p class="bl_head_logo"><a href="<?php echo esc_url( home_url('/')); ?>" class="hp_opacity1"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" width="256" height="52" alt="40第からの挑戦"></a></p>
<?php endif; ?>

<!-- SNS -->
<ul class="bl_sns">
<li class="bl_sns_item twitter"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/twitter.svg" alt="twitter"></a></li>
<li class="bl_sns_item facebook"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/facebook.png" alt="facebook"></a></li>
</ul>
<!-- /.bl_sns -->

</div>
</header>
