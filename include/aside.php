<section class="bl_category bl_aside_item">
  <h2 class="bl_category_ttl"><i class="fa-solid fa-list"></i>カテゴリ</h2>
  <ul class="bl_category_list">
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
      $category_link = get_category_link($category);
      echo '<li class="bl_category_item"><a href="' . esc_url( $category_link ) . '">'.esc_html($category->name).'</a></li>';
    }
    ?>
    <li class="bl_category_item"><a href="<?php echo esc_url( home_url('/')); ?>">すべてのカテゴリ</a></li>
  </ul>
</section>
<!-- /.bl_category -->

<section class="bl_profile bl_aside_item">
  <figure class="bl_profile_imgWrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/profile_img.jpg" width="150" height="150" alt="">
  </figure>
  <h2 class="bl_profile_ttl">プロフィール</h2>
  <p class="bl_profile_txt">都内のWeb制作会社で、コーディングやWordPressテーマ構築などを行っております。<br>現在Laravelを勉強中です。</p>
</section>
<!-- /.bl_profile -->
