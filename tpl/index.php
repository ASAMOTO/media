<?php
//DEBUG_SPACE
//var_dump($article);
//print $article[0]["article_title"];
 ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ASAMOTO YUKI | Webデザインを届けるメディア</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="https://use.fontawesome.com/48251f48b6.js"></script>
    <meta name="description" content="ポートフォリオサイトとWebデザインのメディアの両方をやっています。制作のご依頼も受け付けています。情報を見ていくだけも大歓迎！">
    <meta name="Keywords" content="アサモト,アサモト ユウキ,ASAMOTO,Y.ASAMOTO,浅本 侑樹,ポートフォリオ,Webデザイン,ウェブデザイン,制作">

    <meta property="og:title" content="タイトル">
    <meta property="og:site_name" content="サイト名">
    <meta property="og:url" content="サイトURL">
    <meta property="og:description" content="説明がここに入ります。説明がここに入ります。">
    <meta property="fb:app_id" content="[FB_APP_ID]">
    <meta property="og:type" content="website">
    <meta property="og:image" content="OGP画像パス">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@username">
    <meta name="twitter:title" content="タイトル">
    <meta name="twitter:description" content="説明がここに入ります。説明がここに入ります。">
    <meta name="twitter:image:src" content="OGP画像パス">
  </head>
  <body>
    <a href="#main_nav" class="shortcut_btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <header>
      <h1>ASAMOTO YUKI</h1>
      <h2>Webデザインで世の中の問題解決をする</h2>
      <a href="./index.html" class="go_portfolio"><i class="fa fa-angle-right" aria-hidden="true"></i> アサモト ユウキについて</a>
    </header>
    <section id="search">
        <div class="inner_box">
            <h3>何かお悩みですか？<span>検索してみましょう。</span></h3>
            <form action="./result.php" method="post">
            <input type="text" name="search_article" placeholder="例) チェックボックス デザイン">
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
    <div id="container">
        <div class="inner_box">
            <section id="latest_article">
              <?php foreach ($article as $key => $value):
                list($yy,$mm,$dd,$time) = preg_split('/[- ]/', $article[$key]["article_date"]);
                if(!$key==0){
              ?>
                <div class="article_box">
                    <div class="image_box_<?=$article[$key]["article_css"]?>"><a href="./article.php?article_id=<?=$article[$key]["article_id"]?>"><?= $article[$key]["article_genre"] ?></a></div>
                    <div class="text_box"><h2><a href="./article.php?article_id=<?=$article[$key]["article_id"]?>"><?= $article[$key]["article_title"] ?></a></h2>
                    <p><?=$article[$key]["article_short"]?></p>
                    <small><span class="date"><?= $yy ?>.<?= $mm ?>.<?= $dd ?></span><span class="view"><?= $article[$key]["article_view"] ?>view</span></small>
                    </div>
                </div>
              <?php }else{ ?>
                <div class="article_box_big">
                    <div class="image_box_<?=$article[$key]["article_css"]?>"><a href="./article.php?article_id=<?=$article[$key]["article_id"]?>"><?= $article[$key]["article_genre"] ?></a></div>
                    <div class="text_box"><h2><a href="./article.php?article_id=<?=$article[$key]["article_id"]?>"><?= $article[$key]["article_title"] ?></a></h2>
                    <p><?=$article[$key]["article_short"]?></p>
                    <small><span class="date"><?= $yy ?>.<?= $mm ?>.<?= $dd ?></span><span class="view"><?= $article[$key]["article_view"] ?>view</span></small>
                    </div>
                </div>
              <?php } ?>
              <?php endforeach; ?>

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
                    <?php
                      foreach ($favorite_article as $key => $value):
                     ?>
                    <div class="article_box">
                        <div class="image_box_<?= $favorite_article[$key]["article_css"]?>"><?= $favorite_article[$key]["article_genre"]?></div>
                        <div class="text_box">
                            <small><span class="date">
                              <?php list($yy,$mm,$dd,$time) = preg_split('/[- ]/', $favorite_article[$key]["article_date"]); ?>
                              <?=$yy?>.<?=$mm?>.<?=$dd?>
                            </span>
                            <span class="view"><?=$favorite_article[$key]["article_view"]?>view</span></small>
                            <h2><a href="./article.php?article_id=<?=$favorite_article[$key]["article_id"]?>"><?=$favorite_article[$key]["article_title"]?></a></h2>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
            <h1><span class="a1">A</span><span class="a2">S</span><span class="a3">A</span><span class="a4">M</span><span class="a5">O</span><span class="a6">T</span><span class="a7">O</span><span class="a8"> Y</span><span class="a9">U</span><span class="a10">K</span><span class="a11">I</span></h1>
            <nav>
              <ul>
                <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i> ホーム</a></li>
                <li><a href="./article_list.php?genre=1"><i class="fa fa-angle-right" aria-hidden="true"></i> Webデザイン</a></li>
                <li><a href="./article_list.php?genre=2"><i class="fa fa-angle-right" aria-hidden="true"></i> HTML</a></li>
                <li><a href="./article_list.php?genre=3"><i class="fa fa-angle-right" aria-hidden="true"></i> CSS</a></li>
                <li><a href="./article_list.php?genre=4"><i class="fa fa-angle-right" aria-hidden="true"></i> jQuery</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a></li>
              </ul>
            </nav>
            <small>Copyright &copy; 2016 ASAMOTO YUKI. <span>All Rights Reserved.</span></small>
        </div>
    </footer>
  </body>
</html>
