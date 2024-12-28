<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $title ="";
if(is_home() || is_front_page()) {
}elseif(is_page()) {
  $title  = trim(wp_title('', false))." | ";
}elseif(is_single()) {
  $title  = get_the_title() . " | ";
}elseif(is_post_type_archive() || is_singular() || is_tax()) {
  $title  = esc_html(get_post_type_object(get_post_type())->label )." | ";
}?>

<?php if(is_page('portfolio')): ?>
  <title>サトウコウジ ポートフォリオ</title>
<?php elseif(is_page('about')): ?>
  <title>私について | サトウコウジ ポートフォリオ</title>
<?php else: ?>
  <title><?php echo $title; bloginfo('name'); ?></title>
<?php endif; ?>

<?php if(is_page('portfolio') || is_page('about')): ?>
  <meta name="description" content="WebアプリやWebサイトの作品集のサイトです。">
<?php else: ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>

<meta name="format-detection" content="telephone=no">

<?php wp_head(); ?>
</head>

<body class="portfolio_body">
