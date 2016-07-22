<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>GLOBAL WINE CIRCLE</title>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css">
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="js/togle.js"></script>
<script type="text/javascript" src="js/sp.js"></script>
<script type="text/javascript" src="js/action.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
<script>
$(function(){
	$('#slider1').bxSlider({
		auto:true,
		speed:1000,
		pause:5000
	});
});
</script>
</head>

<body>
<header>
<h1><img src="images/title.png" alt="GLOBAL WINE CIRCLE"></h1>
</header>
<nav>
    <div id="toggle"><a href="#">MENU</a></div>
    <div id="menu">
        <ul>
            <li><a href="./index.php">ホーム</a></li>
            <li><a href="./links/wine_information.html">ワインの情報コーナー</a></li>
            <li><a href="./links/global_wine.php">グローバルワインセラー</a></li>
            <li><a href="./links/my_wine.html">マイワインセラー</a></li>
            <li><a href="./links/mypage.html">マイページ</a></li>
        </ul>
    </div>
</nav>
<article>
<section id="slider1">
            <div><img src="images/branding1.jpg"></div>
            <div><img src="images/branding2.jpg"></div>
            <div><img src="images/branding3.jpg"></div>
</section>
    <section id="shortcut_navi">
        <div id="shortcut_btn">
            <p><a href="links/search.html"><span>＞　ワインを検索する</span></a></p>
            <p><a href="links/review.php"><span>＞　ワインを評価する</span></a></p>
        </div>
    </section>
    <section id="global_wine_cellar">
        <div class="sub_title">
            <h3>グローバルワインセラー</h3>
            <p>GLOBAL WINE CELLAR</p>
        </div>
        <div class="box">
            <div class="photo_area">
            <img src="./images/user/thumb/thumb_<?php echo $global_wine[0]['wine_id']; echo ".".$global_wine[0]['wine_img_tag'];?>">
            </div>
            <div class="text_area">
            <div class="top">
                <p><img src="./images/flag/<?php echo $global_wine[0]['country'];?>.png" alt="<?php echo $global_wine[0]['country'];?>"></p>
            </div>
            <div class="top2">
                <p><?php echo $global_wine[0]['wine_name']?></p> 
            </div>
            <div class="bottom">
                <div class="star">
                    <h4><span>総合評価</span></h4>
                <hr>
                <p><?php 
            $i=0;
            while($i<$global_wine[0]['wine_score']){ 
                echo "★";
                $i++;
            }
            if($global_wine[0]['wine_score']<5){
                $non_star=5-$global_wine[0]['wine_score'];
                $i=0;
                while($i<$non_star){
                    echo "☆";
                    $i++;
                }
            }
            ?></p></div>
                    <div class="postman">
                        <h4><span>投稿者</span></h4>
                        <hr>
                        <p><?php echo $global_wine[0]['member_name'];?></p>
                    </div>
                    <div class="details">
                        <a href="./links/wine_review.php?id=<?php echo $global_wine[0]['wine_id'];?>"><span>＞　詳細はこちら</span></a>
                    </div>
            </div>
            </div>
        </div>
        
        <div class="next_btn">
            <p class="next_btn_l"><a href="./links/global_wine.php">＞</a></p>
            <p class="next_btn_r"><a href="./links/global_wine.php">グローバルワインセラーへ</a></p>
        </div>
    </section>
    <section id="wine_information">
        <div class="sub_title">
            <h3>ワインの情報コーナー</h3>
            <p>WINE INFORMATION</p>
        </div>
        <img src="images/ad01.jpg" alt="サンプル画像">
        <div class="next_btn">
            <p class="next_btn_l"><a href="./links/wine_information.html">＞</a></p>
            <p class="next_btn_r"><a href="./links/wine_information.html">ワインの特集コーナーへ</a></p>
        </div>
    </section>
    <section id="recommend_you">
        <div class="sub_title">
            <h3>あなたにオススメの1本</h3>
            <p>RECOMMEND FOR YOU</p>
        </div>
        <div class="box">
            <div class="photo_area">
            <img src="./images/user/thumb/thumb_<?php echo $wine[0]['wine_id']; echo ".".$wine[0]['wine_img_tag'];?>">
            </div>
            <div class="text_area">
            <div class="top">
                <p><img src="./images/flag/<?php echo $wine[0]['country'];?>.png" alt="<?php echo $wine[0]['country'];?>"></p>
            </div>
            <div class="top2">
                <p><?php echo $wine[0]['wine_name']?></p> 
            </div>
            <div class="bottom">
                <div class="star">
                    <h4><span>総合評価</span></h4>
                <hr>
                <p><?php 
            $i=0;
            while($i<$wine[0]['wine_score']){ 
                echo "★";
                $i++;
            }
            if($wine[0]['wine_score']<5){
                $non_star=5-$wine[0]['wine_score'];
                $i=0;
                while($i<$non_star){
                    echo "☆";
                    $i++;
                }
            }
            ?></p></div>
            <div class="postman">
                <h4><span>投稿者</span></h4>
                <hr>
                <p><?php echo $wine[0]['member_name'];?></p>
            </div>
            <div class="price">
                <h4><span>購入価格</span></h4>
                <hr>
                <p><?php echo $wine[0]['price'];?>円</p>
                <p>（<?php echo $wine[0]['shop_info'];?>）</p>
            </div>
            <div class="score_details">
                <h4><span>味の傾向</span></h4>
                <hr>
                <p>
                <canvas id="sample" width="250" height="250"></canvas>
                    <script>
                        var radarChartData = {
                        labels : ["飲みやすさ","甘さ","フルーティーさ","酸味"],
                        datasets : 
                        [
                            {
                                fillColor : "rgba(241,196,15,0.5)",
                                strokeColor : "rgba(241,196,15,1)",
                                pointColor : "rgba(241,196,15,1)",
                                pointStrokeColor : "#fff",
                                data : [<?php echo $wine[0]['drink_ease'];?>,<?php echo $wine[0]['sweet'];?>,<?php echo $wine[0]['acidity'];?>,<?php echo $wine[0]['fruity'];?>]
                            }
                        ]  
                        }

                        var options = {
                            scaleShowLabels : false,
                            pointLabelFontSize : 10,

                            // 以下の 3 オプションは scaleOverride: true の時に使用
                            // 値のステップ数
                            scaleSteps : 1,
                            // 値のステップする大きさ
                            scaleStepWidth : 3,
                            // 値の始まりの値
                            scaleStartValue : 0
                        }
                        var myRadar = new                               Chart(document.getElementById("sample").getContext("2d")).Radar(radarChartData, options);
                    </script>
                </p>
            </div>
            <div class="memo">
                <h4><span>コメント</span></h4>
                <hr>
                <p><?php echo $wine[0]['memo'];?></p>
            </div>
            <div class="good">
                <p><?php echo $wine[0]['good'];?>　GOOD！</p>
                <a href="./links/good_for_index.php?id=<?php echo $wine[0]['wine_id'];?>"><span>GOOD！</span></a>
            </div>
            </div>
            </div>
        </div>
        <div class="next_btn">
            <p class="next_btn_l"><a href="http://search.rakuten.co.jp/search/mall/<?php echo $wine[0]['wine_name'];?>/-/st.A?grp=product" target="_blank">＞</a></p>
            <p class="next_btn_r"><a href="http://search.rakuten.co.jp/search/mall/<?php echo $wine[0]['wine_name'];?>/-/st.A?grp=product" target="_blank">この商品を楽天で探す</a></p>
        </div>
    </section>
</article>
<footer>
    <div class="page_top"><a href="#">GO TO PAGE TOP</a></div>
    <div class="footer_contents">
        <p><img src="images/logo.png" alt="GLOBAL WINE CIRCLE"></p>
        <address>Copyright(C)2014 Y.ASAMOTO Allright Reserved.</address>
    </div>
</footer>
</body>
</html>
