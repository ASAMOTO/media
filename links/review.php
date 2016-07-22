<?php
session_start();

//使用プログラムの呼び出し
require_once 'config.php';
require_once 'util.php';

//フォームをSubmitした時に実行
if (isset($_POST['drink_ease'])) {
	//POST→変数に格納
	$wine_name = $_POST['wine_name'];	//ワイン名
	$country = $_POST['country'];	//生産国
	$score = $_POST['score'];	//総合評価
	$drink_ease = $_POST['drink_ease'];	//飲みやすさ
	$sweet      = $_POST['sweet'];	//甘さ
	$fruity    = $_POST['fruity'];	//果実味
	$acidity    = $_POST['acidity'];	//酸味
	$price      = $_POST['price'];	//価格
	$shop_info  = $_POST['shop_info'];	//購入店
	$memo       = $_POST['memo'];	//メモ
	$open_close = $_POST['open_close'];	//公開設定

	$sql = "SELECT id FROM review ORDER BY id DESC LIMIT 0,1";
		if (($id = get_db_data($sql)) === false) {
			$err_code = '1011';
			require_once './links/error.php';
			exit;
		}
	$new_id=$id[0]['id']+1;

	//空白チェック
	if($wine_name == ""){
		$err = 1;
	}
	if ($price == "") {
		$err = 1;
	}
	if ($shop_info == "") {
		$err = 1;
	}

	//画像保存関連
	$file_size = $_FILES['photo']['size'] / 1024;
    if($file_size >0){
    	$file_pre_save = $_FILES['photo']['tmp_name'];
        $file_error = $_FILES['photo']['error'];
        $img_size = getimagesize($_FILES['photo']['tmp_name']);

        if ($img_size[2] == 1) {
            $type = "gif";
        } else if ($img_size[2] == 2) {
            $type = "jpg";
        } else if ($img_size[2] == 3) {
            $type = "png";
        } else {
            $type = "";
        }

        $_SESSION['review_img_tag']=$type;

        //保存先フォルダの存在チェック
        //if (!file_exists('../images/user/thumb')) {
        //    mkdir('../images/user/thumb', 0755, true);	//フォルダがない場合は生成
        //}

        if(!$img_size==false) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../images/user/' . $new_id . '.' . $type);
            $file_name = ('../images/user/' . $new_id . "." . $type);

            if ($img_size[2] == 3) //◎画像ファイルのコピーおよび画像ファイルの縮小拡大（png）
            {
                $img_in = imagecreatefrompng($file_name);    //元画像をメモリに生成
                $resize = resize($img_size);
                $img_out = ImageCreateTruecolor($resize[0], $resize[1]);    //背景の黒い新しい画像ファイルを作成（width,height）
                imageAlphaBlending($img_out, false);    //アルファブレンディングをoffにする
                imageSaveAlpha($img_out, true);    //完全なアルファチャネル情報を保存するフラグをonにする
                //メモリ上で画像のサイズを変更して新しい画像にコピーする（コピー先,コピー元,コピー先のx座標,コピー先のy座標,コピー元のx座標,コピー元のy座標,拡大縮小後の幅,拡大縮小後の高さ,コピー元の幅,コピー元の高さ）
                ImageCopyResampled($img_out, $img_in, 0, 0, 0, 0, $resize[0], $resize[1], $img_size[0], $img_size[1]);
                Imagepng($img_out, '../images/user/thumb/thumb_' . $new_id . '.png');    //画像ファイルの書き出し
            } 
            else if ($img_size[2] == 2) 	//◎画像ファイルのコピー及び画像ファイルの縮小拡大（jpg）
            {
                $img_in = imagecreatefromjpeg($file_name);
                $resize = resize($img_size);
                $img_out = ImageCreateTruecolor($resize[0], $resize[1]);
                ImageCopyResampled($img_out, $img_in, 0, 0, 0, 0, $resize[0], $resize[1], $img_size[0], $img_size[1]);
                $img_out = imagerotate($img_out, 270, 0);
                Imagejpeg($img_out, '../images/user/thumb/thumb_' . $new_id . '.jpg');
            } 
            else if ($img_size[2] == 1)	//◎画像ファイルのコピー及び画像ファイルの縮小拡大（gif）
            {
                $img_in = imagecreatefromgif($file_name);
                $resize = resize($img_size);
                $img_out = ImageCreateTruecolor($resize[0], $resize[1]);
                ImageCopyResampled($img_out, $img_in, 0, 0, 0, 0, $resize[0], $resize[1], $img_size[0], $img_size[1]);
                Imagegif($img_out, '../images/user/thumb/thumb_' . $new_id . '.gif');
	        }
	        else
	        {
	            $err = 1;
	            $err_image = "「gif」、「jpg」、「png」のみ対応しています。";
	        }

	        if (isset($img_in)) {
	        	//画像加工を行った後、メモリを開放。
	            ImageDestroy($img_in);
	            ImageDestroy($img_out);
        	}
	    }
        
		//エラーがなければ確認画面へ移動
		if (!isset($err)) {
			//SESSION格納
			$_SESSION['review_id'] = $new_id;
			$_SESSION['review_wine_name'] = $wine_name;
			$_SESSION['review_country'] = $country;
			$_SESSION['review_score'] = $score;
			$_SESSION['review_drink_ease'] = $drink_ease;
			$_SESSION['review_sweet']      = $sweet;
			$_SESSION['review_acidity']    = $acidity;
			$_SESSION['review_fruity']    = $fruity;
			$_SESSION['review_price']      = $price;
			$_SESSION['review_shop_info']  = $shop_info;
			$_SESSION['review_memo']       = $memo;
			$_SESSION['review_open_close'] = $open_close;
			$_SESSION['review_img_size'] = $img_size;
            $_SESSION['review_image_name'] = $file_name;
            header("Location: ./review_ck.php");
		}
	}
}
else if (isset($_SESSION['review_drink_ease']))//SESSIONに値がある場合に実行
{
	$wine_name = $_SESSION['review_wine_name'];
	$country = $_SESSION['review_country'];
	$total_score = $_SESSION['review_score'];
	$drink_ease = $_SESSION['review_drink_ease'];
	$sweet      = $_SESSION['review_sweet'];
	$acidity    = $_SESSION['review_acidity'];
	$price      = $_SESSION['review_price'];
	$shop_info  = $_SESSION['review_shop_info'];
	$memo       = $_SESSION['review_memo'];
	$open_close = $_SESSION['review_open_close'];
}

require_once 'tpl/review.php';