<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ここに記事のタイトルが入ります。 | ASAMOTO YUKI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="https://use.fontawesome.com/48251f48b6.js"></script>
    <meta name="description" content="ポートフォリオサイトとWebデザインのメディアの両方をやっています。制作のご依頼も受け付けています。情報を見ていくだけも大歓迎！">
    <meta name="Keywords" content="アサモト,アサモト ユウキ,ASAMOTO,Y.ASAMOTO,浅本 侑樹,ポートフォリオ,Webデザイン,ウェブデザイン,制作">

    <!--  ここに記事のOGP(Facebook)  -->
    <meta property="og:title" content="タイトル">
    <meta property="og:site_name" content="サイト名">
    <meta property="og:url" content="サイトURL">
    <meta property="og:description" content="説明がここに入ります。説明がここに入ります。">
    <meta property="fb:app_id" content="[FB_APP_ID]">
    <meta property="og:type" content="website">
    <meta property="og:image" content="OGP画像パス">
    <!--  ここに記事のOGP(Twitter)  -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@username">
    <meta name="twitter:title" content="タイトル">
    <meta name="twitter:description" content="説明がここに入ります。説明がここに入ります。">
    <meta name="twitter:image:src" content="OGP画像パス">

    <script>
      /* DOMの読み込み完了後に処理 */
      if(window.addEventListener) {
      window.addEventListener( "load" , shareButtonReadSyncer, false );
      }else{
      window.attachEvent( "onload", shareButtonReadSyncer );
      }

      /* シェアボタンを読み込む関数 */
      function shareButtonReadSyncer(){

      // 遅延ロードする場合は次の行と、終わりの方にある行のコメント(//)を外す
      // setTimeout(function(){

      // Twitter (オリジナルボタンを使用するので、コメントアウトして無効化)
      // window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));

      // Facebook
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Google+
      var scriptTag = document.createElement("script");
      scriptTag.type = "text/javascript"
      scriptTag.src = "https://apis.google.com/js/platform.js";
      scriptTag.async = true;
      document.getElementsByTagName("head")[0].appendChild(scriptTag);

      // はてなブックマーク
      var scriptTag = document.createElement("script");
      scriptTag.type = "text/javascript"
      scriptTag.src = "https://b.st-hatena.com/js/bookmark_button.js";
      scriptTag.async = true;
      document.getElementsByTagName("head")[0].appendChild(scriptTag);

      // pocket
      (!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js"));

      //},5000);	//ページを開いて5秒後(5,000ミリ秒後)にシェアボタンを読み込む

      }
    </script>
  </head>
  <body>
    <a href="./index.php" class="home_shortcut_btn"><i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="#main_nav" class="shortcut_btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <header>
      <h1>ASAMOTO YUKI</h1>
      <h2>Webデザインで世の中の問題解決をする</h2>
      <a href="./index.html" class="go_portfolio"><i class="fa fa-angle-right" aria-hidden="true"></i> アサモト ユウキについて</a>
    </header>
    <section id="search">
        <div class="inner_box">
            <h3>何かお悩みですか？<span>検索してみましょう。</span></h3>
            <form action="#" method="get">
            <input type="text" placeholder="例) チェックボックス デザイン">
            <input type="submit" value="&#xf002; 検索する">
            </form>
        </div>
    </section>
    <nav id="main_nav">
      <ul>
          <li class="nav_home"><a href="./index.php#main_nav">ホーム</a></li>
          <li class="nav_web_design"><a href="./article_list.php?genre=1#main_nav">Webデザイン</a></li>
          <li class="nav_html"><a href="./article_list.php?genre=2#main_nav">HTML</a></li>
          <li class="nav_css"><a href="./article_list.php?genre=3#main_nav">CSS</a></li>
          <li class="nav_jquery"><a href="./article_list.php?genre=4#main_nav">jQuery</a></li>
      </ul>
    </nav>
    <div id="article_container">
        <div class="inner_box">
            <section id="article_area">
                <date>
                  <?php
                    list($yy,$mm,$dd,$time) = preg_split('/[- ]/', $article[0]["article_date"]);
                  ?>
                  <?=$yy?>.<?=$mm?>.<?=$dd?>
                </date>
                <h1><?=$article[0]["article_title"]?></h1>
                <div class="image_box_<?=$article[0]["article_css"]?>">
                    <?=$article[0]["article_genre"]?>
                </div>
                <?php
                	$share_url_syncer = "http://asamone.com/media";		//シェア対象のURLアドレスを指定する (HTML部分は変更不要)
                ?>
                <div class="social-area-syncer">
                	<ul class="social-button-syncer">
                		<!-- Twitter [Tweet]の部分を[ツイート]に変更することで日本語仕様になります。 -->
                		<li class="sc-tw"><a data-url="<?php echo $share_url_syncer ; ?>" href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-dnt="true" target="_blank"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill="#fff" fill-rule="nonzero"/></svg><span>Tweet</span></a></li>

                		<!-- Facebook -->
                		<li class="sc-fb"><div class="fb-like" data-href="<?php echo $share_url_syncer ; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div></li>

                		<!-- Google+ -->
                		<li><div data-href="<?php echo $share_url_syncer ; ?>" class="g-plusone" data-size="tall"></div></li>

                		<!-- はてなブックマーク -->
                		<li><a href="http://b.hatena.ne.jp/entry/<?php echo $share_url_syncer ; ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border:none;" /></a></li>

                		<!-- pocket -->
                		<li><a data-save-url="<?php echo $share_url_syncer ; ?>" data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a></li>

                		<!-- LINE [画像は公式ウェブサイトからダウンロードして下さい] -->
                		<li class="sc-li"><a href="http://line.me/R/msg/text/?<?php echo rawurlencode($share_url_syncer); ?>"><img src="./images/linebutton_36x60.png" width="36" height="60" alt="LINEに送る" class="sc-li-img"></a></li>
                	</ul>

                <!-- Facebook用 -->
                <div id="fb-root"></div>

                </div>
                <!-- シェアボタン [ここまでコピー] -->
                <?= $article[0]["article_content"]?>
            </section>
            <section id="right_column">
                <div id="side_ad1">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- ASAMOTO YUKI -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-5769155782042656"
                       data-ad-slot="9890490065"
                       data-ad-format="auto"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
                <div id="favorite_article">
                    <h3>人気の記事</h3>
                    <div class="article_box">
                        <div class="image_box_css">CSS</div>
                        <div class="text_box">
                            <small><span class="date">2016.06.28</span><span class="view">30view</span></small>
                            <h2><a href="#">CSSだけで実現するボタン10パターン</a></h2>
                        </div>
                    </div>
                    <div class="article_box">
                        <div class="image_box_html">HTML</div>
                        <div class="text_box">
                            <small><span class="date">2016.06.28</span><span class="view">30view</span></small>
                            <h2><a href="#">CSSだけで実現するボタン10パターン</a></h2>
                        </div>
                    </div>
                    <div class="article_box">
                        <div class="image_box_web">Web Design</div>
                        <div class="text_box">
                            <small><span class="date">2016.06.28</span><span class="view">30view</span></small>
                            <h2><a href="#">CSSだけで実現するボタン10パターン</a></h2>
                        </div>
                    </div>
                    <div class="article_box">
                        <div class="image_box_jquery">jQuery</div>
                        <div class="text_box">
                            <small><span class="date">2016.06.28</span><span class="view">30view</span></small>
                            <h2><a href="#">CSSだけで実現するボタン10パターン</a></h2>
                        </div>
                    </div>
                    <div class="article_box">
                        <div class="image_box_web">Web Design</div>
                        <div class="text_box">
                            <small><span class="date">2016.06.28</span><span class="view">30view</span></small>
                            <h2><a href="#">CSSだけで実現するボタン10パターン</a></h2>
                        </div>
                    </div>
                </div>
                <div id="side_ad2">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- ASAMOTO YUKI -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-5769155782042656"
                       data-ad-slot="9890490065"
                       data-ad-format="auto"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="inner_box">
            <h1>ASAMOTO YUKI</h1>
            <nav>
              <ul>
                <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i> ホーム</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Webデザイン</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> HTML</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> CSS</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> jQuery</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a></li>
              </ul>
            </nav>
            <small>Copyright &copy; 2016 ASAMOTO YUKI. <span>All Rights Reserved.</span></small>
        </div>
    </footer>
  </body>
</html>
