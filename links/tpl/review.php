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
<form action="review.php" method="post" enctype="multipart/form-data">
    <section id="page_header">
            <div><img src="../images/wine_review_title.png"></div>
    </section>
    <section id="review_page">
        <div class="sub_title">
            <h3>ラベル撮影</h3>
            <p>STEP1 TAKE PHOTO</p>
        </div>
        <div class="photo_select">
            <div class="position">
                <div class="uploadButton">
                    写真を選択する
                    <input type="file" name="photo" onchange="uv.style.display='inline-block'; uv.value = this.value;" />
                    <input type="text" id="uv" class="uploadValue" disabled />
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>ワイン情報</h3>
            <p>STEP2 WINE INFORMATION</p>
        </div>
        <div class="information">
            <div class="wine_information">
                <div>
                    <p class="label"><span>ワイン名</span></p>
                    <input type="text" name="wine_name" placeholder="例）ドンペリニヨン 2011" required>
                </div>
                <div>
                    <p class="label"><span>生産国</span></p>
                    <select id="country" name="country">
                        <option value="France" selected>フランス</option>
                        <option value="Italy">イタリア</option>
                        <option value="Spain">スペイン</option>
                        <option value="Germany">ドイツ</option>
                        <option value="United-States-of-America">アメリカ</option>
                        <option value="Chile">チリ</option>
                        <option value="South-Africa">南アフリカ</option>
                        <option value="Japan">日本</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>総合評価</h3>
            <p>STEP3 TOTAL REVIEW</p>
        </div>
        <div class="total_score">
            <div class="review_total_score">
                <div>
                    <select id="score" name="score">
                        <option value="1">好みじゃない</option>
                        <option value="2">あまり好みじゃない</option>
                        <option value="3" selected>普通くらい</option>
                        <option value="4">なかなか好み</option>
                        <option value="5">好み</option>
                    </select>
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
                <select id="drink_ease" name="drink_ease">
                    <option value="1">飲みづらい</option>
                    <option value="2" selected>まあまあ飲みやすい</option>
                    <option value="3">飲みやすい</option>
                </select>
            </div>
            <div>
                <p class="label"><span>甘さ</span></p>
                <select id="sweet" name="sweet">
                        <option value="1">甘くない</option>
                        <option value="2" selected>まあまあ甘い</option>
                        <option value="3">甘い</option>
                </select>
            </div>
            <div>
                <p class="label"><span>酸味の強さ</span></p>
                <select id="acidity" name="acidity">
                        <option value="1">酸味は弱い</option>
                        <option value="2" selected>まあまあ酸味がある</option>
                        <option value="3">酸味は強い</option>
                </select>
            </div>
            <div>
                <p class="label"><span>フルーティーさ</span></p>
                <select id="fruity" name="fruity">
                            <option value="1">フルーティーでない</option>
                            <option value="2" selected>まあまあフルーティー</option>
                            <option value="3">フルーティー</option>
                </select>
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
                    <input type="number" name="price" placeholder="例）800" required>
                </div>
                <div>
                    <p class="label"><span>購入店</span></p>
                    <input type="text" name="shop_info" placeholder="例）あさもヨーカドー 梅田店" requiered>
                </div>
            </div>
        </div>
        <div class="sub_title">
            <h3>メモはお好みで</h3>
            <p>STEP6 WINE MEMO</p>
        </div>
        <div class="memo">
            <textarea rows="7" name="memo" placeholder="ご自由に入力いただけます。"></textarea>
        </div>
        <div class="sub_title">
            <h3>公開設定</h3>
            <p>STEP7 WINE SHARE AREA</p>
        </div>
        <div class="share_area">
            <div class="open_close">
                <input type="radio" name="open_close" id="open" value="1" checked="">
                <label for="open" class="switch-on">公開</label>
                <input type="radio" name="open_close" id="close" value="0">
                <label for="close" class="switch-off">非公開</label>
            </div>
        </div>

        <div class="next_btn">
            <p><input type="submit" value="＞　入力内容を確認する"></p>
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
