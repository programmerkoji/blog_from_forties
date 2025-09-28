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
<li class="bl_sns_item x_logo"><a href="https://x.com/from_forties" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/x_logo.png" alt="x"></a></li>
<li class="bl_sns_item github"><a href="https://github.com/programmerkoji" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/github.png" alt="github"></a></li>
</ul>
<!-- /.bl_sns -->

</div>
</header>
