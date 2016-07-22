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
<script>
$(function(){
		var elem = document.querySelector('input[type="range"]');
        var rangeValue = function(){
        var newValue = elem.value;
        var target = document.querySelector('.value');
        target.innerHTML = newValue;
        }
        elem.addEventListener("input", rangeValue);
});
</script>

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
<form action="./review_ck.php" method="post">
    <section id="review_ck_page">
        <div class="sub_title">
            <h3>ラベル撮影</h3>
            <p>STEP1 TAKE PHOTO</p>
        </div>
        <div class="photo_select_view">
            <img src="../images/user/thumb/thumb_<?php echo $id;?>.jpg">
        </div>
        <div class="sub_title">
            <h3>ワイン情報</h3>
            <p>STEP2 WINE INFORMATION</p>
        </div>
        <div class="price">
            <div class="review_price">
                <div>
                    <p class="label"><span>ワイン名</span></p>
                    <p><?php echo $wine_name; ?></p>
                </div>
                <div>
                    <p class="label"><span>生産国</span></p>
                    <p><?php echo $country_text; ?></p>
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>総合評価</h3>
            <p>STEP3 WINE TOTAL REVIEW</p>
        </div>
        <div class="price">
            <div class="review_price">
                <div>
                    <p><?php echo $score_text; ?></p>
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>傾向の評価</h3>
            <p>STEP4 WINE REVIEW</p>
        </div>
        <div class="review_score">
            <div>
                <p class="label"><span>飲みやすさ</span></p>
                <?php
                if($drink_ease==1){
                ?>
                    <p>飲みづらい</p>
                <?php
                }
                else if($drink_ease==2)
                {
                ?>
                    <p>まあまあ飲みやすい</p>
                <?php
                }
                else
                {
                ?>
                    <p>飲みやすい</p>
                <?php
                }
                ?>
            </div>
            <div>
                <p class="label"><span>甘さ</span></p>
                 <?php
                if($sweet==1){
                ?>
                    <p>甘くない</p>
                <?php
                }
                else if($sweet==2)
                {
                ?>
                    <p>まあまあ甘い</p>
                <?php
                }
                else
                {
                ?>
                    <p>甘い</p>
                <?php
                }
                ?>
            </div>
            <div>
                <p class="label"><span>酸味の強さ</span></p>
                <?php
                if($acidity==1){
                ?>
                    <p>酸味は弱い</p>
                <?php
                }
                else if($acidity==2)
                {
                ?>
                    <p>まあまあ酸味がある</p>
                <?php
                }
                else
                {
                ?>
                    <p>酸味は強い</p>
                <?php
                }
                ?>
            </div>
            <div>
                <p class="label"><span>フルーティーさ</span></p>
                <?php
                if($fruity==1){
                ?>
                    <p>フルーティーでない</p>
                <?php
                }
                else if($fruity==2)
                {
                ?>
                    <p>まあまあフルーティー</p>
                <?php
                }
                else
                {
                ?>
                    <p>フルーティー</p>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="sub_title">
            <h3>購入価格とお店</h3>
            <p>STEP5 WINE PRICE & SHOP</p>
        </div>
        <div class="price">
            <div class="review_price">
                <div>
                    <p class="label"><span>価格</span></p>
                    <p><?php echo $price; ?>円</p>
                </div>
                <div>
                    <p class="label"><span>購入店</span></p>
                    <p><?php echo $shop_info; ?></p>
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>メモはお好みで</h3>
            <p>STEP6 WINE MEMO</p>
        </div>
        <div class="memo">
            <p><?php echo $memo;?></p>
        </div>
        <div class="sub_title">
            <h3>公開設定</h3>
            <p>STEP7 WINE SHARE AREA</p>
        </div>
        <div class="share_area">
            <div class="open_close">
            <?php
            if($open_close==1){
            ?>
                <p>公開</p>
            <?php
            }
            else
            {
            ?>
                <p>非公開</p>
            <?php
            }
            ?>
            </div>
        </div>

        <input type="hidden" name="chk" value="1">

        <div class="next_btn">
            <p><input type="submit" value="評価を投稿する"></p>
        </div>
    </section>
    </form>
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
