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
    <section id="review_ok_page">
        <div class="sub_title">
            <h3>ワインを評価しました。</h3>
            <p>complete wine review</p>
        </div>
        <div class="link_btn">
            <p><a href="../index.php"><span>＞　トップに戻る</span></a></p>
        </div>
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
