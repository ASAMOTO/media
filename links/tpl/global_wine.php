<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>GLOBAL WINE CIRCLE</title>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/css.css">
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/respond.min.js"></script>
<script type="text/javascript" src="../js/togle.js"></script>
<script type="text/javascript" src="../js/sp.js"></script>
<script type="text/javascript" src="../js/action.js"></script>
</head>

<body>
<header>
<h1><img src="../images/title.png" alt="GLOBAL WINE CIRCLE"></h1>
</header>
<nav>
    <div id="toggle"><a href="#">MENU</a></div>
    <div id="menu">
        <ul>
            <li><a href="../index.php">ホーム</a></li>
            <li><a href="./wine_information.html">ワインの情報コーナー</a></li>
            <li><a href="./global_wine.php">グローバルワインセラー</a></li>
            <li><a href="./my_wine.html">マイワインセラー</a></li>
            <li><a href="./mypage.html">マイページ</a></li>
        </ul>
    </div>
</nav>
<article>
    <section id="global_wine_page">
        <div class="sub_title">
            <h3>グローバルワインセラー</h3>
            <p>GLOBAL WINE CELLAR</p>
        </div>
        <?php
        foreach ($wine as $key => $value) {
        ?>
        <div class="box">
            <div class="photo_area">
                <img src="../images/user/thumb/thumb_<?php echo $wine[$key]['wine_id']; echo ".".$wine[$key]['wine_img_tag'];?>">
            </div>
            <div class="text_area">
                <div class="top">
                    <p><img src="../images/france.png" alt="フランス"></p>
                </div>
                <div class="top2">
                    <p><?php echo $wine[$key]['wine_name']?></p> 
                </div>
                <div class="bottom">
                    <div class="star">
                        <h4><span>総合評価</span></h4>
                        <hr>
                        <p>
                        <?php 
                            $i=0;
                            while($i<$wine[$key]['wine_score']){ 
                            echo "★";
                             $i++;
                            }
                            if($wine[$key]['wine_score']<5){
                                $non_star=5-$wine[$key]['wine_score'];
                                $i=0;
                                while($i<$non_star){
                                    echo "☆";
                                    $i++;
                                }
                            }
                        ?>
                        </p>
                    </div>
                    <div class="postman">
                        <h4><span>投稿者</span></h4>
                        <hr>
                        <p><?php echo $wine[$key]['member_name'];?></p>
                    </div>
                    <div class="details">
                        <a href="./wine_review.php?id=<?php echo $wine[$key]['wine_id'];?>"><span>＞　詳細はこちら</span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </section>
</article>
<footer>
    <div class="page_top"><a href="../index.php">GO TO TOP PAGE</a></div>
    <div class="footer_contents">
        <p><img src="../images/logo.png" alt="GLOBAL WINE CIRCLE"></p>
        <address>Copyright(C)2014 Y.ASAMOTO Allright Reserved.</address>
    </div>
</footer>
</body>
</html>
