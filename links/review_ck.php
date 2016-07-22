<?php
session_start();

//使用プログラムの呼び出し
require_once 'config.php';
require_once 'util.php';

//フォームをSubmitしない時に実行
if (isset($_SESSION['review_drink_ease'])) {
	//POST→変数に格納
	$id = $_SESSION['review_id'];
	$wine_name = $_SESSION['review_wine_name'];
	$country = $_SESSION['review_country'];
	$score = $_SESSION['review_score'];
	$drink_ease = $_SESSION['review_drink_ease'];
	$sweet      = $_SESSION['review_sweet'];
	$acidity    = $_SESSION['review_acidity'];
	$fruity    = $_SESSION['review_fruity'];
	$price      = $_SESSION['review_price'];
	$shop_info  = $_SESSION['review_shop_info'];
	$memo       = $_SESSION['review_memo'];
	$open_close = $_SESSION['review_open_close'];
	$img_size = $_SESSION['review_img_size'];
    $file_name = $_SESSION['review_image_name'];
    $img_tag = $_SESSION['review_img_tag'];
    $good = 0;

    //生産国　VALUE値を日本語表記に変換
    if($country=="France"){
    	$country_text = "フランス";
    }
    else if($country=="Italy"){
    	$country_text = "イタリア";
    }
    else if($country=="Spain"){
    	$country_text = "スペイン";
    }
    else if($country=="Germany"){
    	$country_text="ドイツ";
    }
    else if($country=="United-States-of-America"){
    	$country_text="アメリカ";
    }
    else if($country=="Chile"){
    	$country_text="チリ";
    }
    else if($country=="South-Africa"){
    	$country_text="南アフリカ";
    }
    else if($country=="Japan"){
    	$country_text="日本";
    }

    //総合評価　VALUE値を日本語表記に変換
    if($score==1){
    	$score_text = "好みじゃない";
    }
    else if($score==2){
    	$score_text = "あまり好みじゃない";
    }
    else if($score==3){
    	$score_text = "普通くらい";
    }
    else if($score==4){
    	$score_text = "なかなか好み";
    }
    else if($score==5){
    	$score_text = "好み";
    }
    
    //仮データ
    $member_id = 1;
    $year = "2014";
}

if(isset($_POST['chk'])){
	$tbl = 'review';//テーブル名定義
	//インサート処理の実行
	$data = array('member_id' => array('data' => $member_id, 'type' => 'string'),
	 'wine_name' => array('data' => $wine_name, 'type' => 'string'),
	  'country' => array('data' => $country, 'type' => 'string'),
	   'year' => array('data' => $year, 'type' => 'string'),
	    'img_tag' => array('data' => $img_tag, 'type' => 'string'),
	     'score' => array('data' => $score, 'type' => 'string'),
	      'drink_ease' => array('data' => $drink_ease, 'type' => 'string'),
	       'sweet' => array('data' => $sweet, 'type' => 'string'),
	        'acidity' => array('data' => $acidity, 'type' => 'string'),
	         'fruity' => array('data' => $fruity, 'type' => 'string'),
	          'price' => array('data' => $price, 'type' => 'string'),
	           'shop_info' => array('data' => $shop_info, 'type' => 'string'),
	            'memo' => array('data' => $memo, 'type' => 'string'),
	             'open_close' => array('data' => $open_close, 'type' => 'string'),
	              'good' => array('data' => $good, 'type' => 'string'));

	$sql = get_insert_str($tbl, $data);
	if (!update_data($sql)) 
	{
		$err_code = '1011';
		require_once 'error.php';
		exit;
	} 
	else 
	{
		header("Location: ./review_ok.php");
	}
}

require_once 'tpl/review_ck.php';