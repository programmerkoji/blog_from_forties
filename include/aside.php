<section class="bl_category bl_aside_item">
  <h2 class="bl_category_ttl"><i class="fa-solid fa-list"></i>カテゴリ</h2>
  <ul class="bl_category_list">
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
      $category_link = get_category_link($category);
      echo '<li class="bl_category_item"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
    }
    ?>
    <li class="bl_category_item"><a href="<?php echo esc_url(home_url('/')); ?>">すべてのカテゴリ</a></li>
  </ul>
</section>
<!-- /.bl_category -->

<section class="bl_tag bl_aside_item">
  <h2 class="bl_tag_ttl"><i class="fa-solid fa-list"></i>タグ</h2>
  <ul class="bl_tag_list">
    <?php
    $tags = get_tags();
    if ($tags) :
      foreach ($tags as $tag) {
        $tag_link = get_tag_link($tag);
        echo '<li class="el_tagLabel"><a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></li>';
      }
    ?>
      <li class="el_tagLabel all"><a href="<?php echo esc_url(home_url('/')); ?>">すべてのタグ</a></li>
    <?php else : ?>
      <li>タグがありません。</li>
    <?php endif; ?>
  </ul>
</section>
<!-- /.bl_tag -->

<section class="bl_profile bl_aside_item">
  <figure class="bl_profile_imgWrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/profile_img.jpg" width="150" height="150" alt="">
  </figure>
  <h2 class="bl_profile_ttl">プロフィール</h2>
  <p class="bl_profile_txt">
    バックエンドエンジニアをやってます。<br>
    異業種から39歳でWeb制作会社でコーダー<br>
    →41歳でエンジニアに。<br>
    Web制作ではマークアップとWordPressテーマ構築<br>
    現在はLaravelで主に開発しています。<br>
    Reactも少し経験あり。
  </p>
</section>
<!-- /.bl_profile -->