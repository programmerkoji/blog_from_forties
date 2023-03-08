<?php get_header(); ?>

<!-- header -->
<header class="ly_head portfolio">
<div class="ly_cont_inner bl_head">

<h1 class="bl_head_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/logo.svg" width="383" height="36" alt="サトウコウジ portfolio"></h1>

<!-- SNS -->
<ul class="bl_sns">
<li class="bl_sns_item twitter"><a href="https://twitter.com/from_forties" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/twitter.svg" alt="twitter"></a></li>
<li class="bl_sns_item github"><a href="https://github.com/programmerkoji" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/github.png" alt="github"></a></li>
</ul>
<!-- /.bl_sns -->

</div>
</header>

<main class="ly_main">

<section class="bl_portfolio">
  <div class="ly_cont_inner">

    <h2 class="el_mainTtl">WEB人 / 求人サイト</h2>

    <div class="bl_media">
      <div class="bl_media_imgWrapper">
        <a href="https://webjin.from-forties.net/" target="_blank" class="bl_media_imgLink">
          <figure class="bl_media_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/webjin_user_img.png" width="16" height="9" alt="">
            <figcaption>ユーザー画面</figcaption>
          </figure>
        </a>
        <a href="https://webjin.from-forties.net/admin/login/" target="_blank" class="bl_media_imgLink">
          <figure class="bl_media_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/webjin_admin_img.png" width="16" height="9" alt="">
            <figcaption>管理者画面</figcaption>
          </figure>
        </a>
      </div>
      <!-- /.bl_media_imgWrapper -->
      <div class="bl_media_body bl_detail">
        <h3 class="bl_detail_ttl">サイトURL</h3>
        <p>ユーザー：<a href="https://webjin.from-forties.net/" target="_blank">https://webjin.from-forties.net/</a></p>
        <p>管理者：<a href="https://webjin.from-forties.net/admin/login/" target="_blank">https://webjin.from-forties.net/admin/login/</a></p>
        <h3 class="bl_detail_ttl">アプリ概要</h3>
        <p>Web制作の仕事専門の求人サイト。</p>
        <h3 class="bl_detail_ttl">なぜ作成したのか</h3>
        <p>
          マルチログイン機能を使用したサイトをイチから実装したいと思ったのがきっかけです。<br>
          その中でも求人サイトを作成した理由については、以前に求人サイトの営業をしていた経験があり、管理画面を使用したことがあったので作成のイメージがしやすかったためです。
        </p>
        <h3 class="bl_detail_ttl">機能一覧</h3>
        <dl class="bl_functionList">
          <div>
            <dt class="bl_functionList_dttl">・ユーザー側</dt>
            <dd class="bl_functionList_ddata">
              <table>
                <tbody>
                  <tr>
                    <th>一般ユーザー</th>
                    <td>求人一覧画面、求人詳細画面</td>
                  </tr>
                  <tr>
                    <th>ログインユーザー</th>
                    <td>お気に入り機能、応募フォーム（確認画面有り）</td>
                  </tr>
                  <tr>
                    <th>その他</th>
                    <td>マルチログイン機能、絞り込み検索、フリーワード検索、ページネーション</td>
                  </tr>
                </tbody>
              </table>
            </dd>
          </div>
          <div>
            <dt class="bl_functionList_dttl">・管理者側</dt>
            <dd class="bl_functionList_ddata">
              <table>
                <tbody>
                  <tr>
                    <th>求人管理</th>
                    <td>新規投稿、一覧表示、詳細表示、編集、削除</td>
                  </tr>
                  <tr>
                    <th>企業管理</th>
                    <td>新規投稿、一覧表示、詳細表示、編集、削除</td>
                  </tr>
                  <tr>
                    <th>画像管理</th>
                    <td>新規投稿、一覧表示、編集、削除</td>
                  </tr>
                  <tr>
                    <th>その他</th>
                    <td>マルチログイン機能、フリーワード検索、ページネーション、カレンダー表示</td>
                  </tr>
                </tbody>
              </table>
            </dd>
          </div>
        </dl>
        <h3 class="bl_detail_ttl">工夫したところ</h3>
        <ul class="el_bulletList">
          <li>EagerLoadingでN+1問題を解消</li>
          <li>ローカルスコープやクラスへの切り分けにより、Controllerの肥大化を防止</li>
        </ul>
        <h3 class="bl_detail_ttl">使用技術</h3>
        <ul class="el_bulletList">
          <li>Laravel 8</li>
          <li>Laravel Breeze</li>
          <li>Flatpickr</li>
          <li>toastr.js</li>
        </ul>
        <h3 class="bl_detail_ttl">その他</h3>
        <p>開発環境はMAMP、本番環境はさくらサーバーです。</p>
        <p class="mt-1em">
          その他の詳細についてはGitHubにてご確認をお願いします。<br>
          <a href="https://github.com/programmerkoji/laravel_recruit_site" target="_blank">GitHubはこちら</a>
        </p>
        
      </div>
      <!-- /.bl_media_body -->
    </div>
    <!-- /.bl_media -->
  </div>
  <!-- /.ly_cont_inner -->
</section>
<!-- /.bl_portfolio -->

<section class="bl_portfolio">
  <div class="ly_cont_inner">

    <h2 class="el_mainTtl">英単語管理アプリ</h2>

    <div class="bl_media">
      <div class="bl_media_imgWrapper">
        <a href="https://from-forties.net/english-words/login" target="_blank" class="bl_media_imgLink">
          <figure class="bl_media_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/english_word_img.png" width="16" height="9" alt="">
            <figcaption>ログイン後の画面</figcaption>
          </figure>
        </a>
      </div>
      <!-- /.bl_media_imgWrapper -->
      <div class="bl_media_body bl_detail">
        <h3 class="bl_detail_ttl">サイトURL</h3>
        <p>ユーザー：<a href="https://from-forties.net/english-words/login" target="_blank">https://from-forties.net/english-words/login</a></p>
        <h3 class="bl_detail_ttl">アプリ概要</h3>
        <p>英単語の記憶度を管理するアプリ</p>
        <h3 class="bl_detail_ttl">なぜ作成したのか</h3>
        <p>
          家族が英語の勉強をしているときに、英単語の記憶度を管理できるアプリがあると便利だというつぶやきからヒント得て作成しました。<br>
          
        </p>
        <h3 class="bl_detail_ttl">機能一覧</h3>
        <div class="bl_functionList">
          <div class="bl_functionList_tableWrapper">
            <table>
              <tbody>
                <tr>
                  <td>ログイン機能、絞り込み検索、並び替え機能、ページネーション、モーダル機能など</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h3 class="bl_detail_ttl">工夫したところ</h3>
        <ul class="el_bulletList">
          <li>別ユーザーが登録した単語の編集画面等に対し、URL直打ちでアクセスしたときに404を表示させる</li>
          <li>削除の際に、ポップアップで削除前の確認を表示させる</li>
        </ul>
        <h3 class="bl_detail_ttl">使用技術</h3>
        <ul class="el_bulletList">
          <li>Laravel 8</li>
          <li>Laravel Breeze</li>
          <li>Micromodal.js</li>
        </ul>
        <h3 class="bl_detail_ttl">その他</h3>
        <p>開発環境はMAMP、本番環境はさくらサーバーです。</p>
        <p class="mt-1em">
          その他の詳細についてはGitHubにてご確認をお願いします。<br>
          <a href="https://github.com/programmerkoji/english_words" target="_blank">GitHubはこちら</a>
        </p>
        
      </div>
      <!-- /.bl_media_body -->
    </div>
    <!-- /.bl_media -->
  </div>
  <!-- /.ly_cont_inner -->
</section>
<!-- /.bl_portfolio -->

</main>

<?php get_footer(); ?>
