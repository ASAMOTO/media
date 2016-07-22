<?php
session_start();

//使用プログラムの呼び出し
require_once './links/config.php';
require_once './links/util.php';

if(isset($_POST['search_article'])){
	$search_article = $_POST['search_article'];
	if(strpos($search_article,' ') !== false){
	  //半角スペースが含まれている場合
		list($a,$b) = explode(' ',$search_article);
	}
	else if(strpos($search_article,'　') !== false){
		//全角スペースが含まれている場合
		list($a,$b) = explode('　',$search_article);
	}
	else{
		$single = $search_article;
	}

	if (isset($a)) {
		$sql = "SELECT  `article_id` ,  `article_title` ,  `article_date` ,  `article_view`  ,  `article_css` ,  `article_genre` ,  `article_content` , `article_short`
		FROM article WHERE (`article_title` LIKE '%".$a."%') AND (`article_title` LIKE '%".$b."%') ORDER BY `article_view` DESC LIMIT 0 , 30";
				if (($article = get_db_data($sql)) === false) {
					$err_code = '1011';
					require_once './links/error.php';
					exit;
				}
	}
	if(isset($single)){
		$sql = "SELECT  `article_id` ,  `article_title` ,  `article_date` ,  `article_view`  ,  `article_css` ,  `article_genre` ,  `article_content` , `article_short`
		FROM article WHERE `article_title` LIKE '%".$single."%' ORDER BY `article_view` DESC LIMIT 0 , 30";
				if (($article = get_db_data($sql)) === false) {
					$err_code = '1011';
					var_dump($sql);
					exit;
					require_once './links/error.php';
					exit;
				}
	}

	$sql = "SELECT  `article_id` ,  `article_title` ,  `article_date` ,  `article_view`  ,  `article_css` ,  `article_genre` ,  `article_content` FROM article  ORDER BY `article_view` DESC LIMIT 0 , 5";
	if (($favorite_article = get_db_data($sql)) === false) {
						$err_code = '1011';
						require_once './links/error.php';
						exit;
					}

	$sql = "UPDATE  `asamone_media`.`article` SET  `article_view` = `article_view`+1";
	    	if ((update_data($sql)) === false) {
	    		$err_code = '1011';
	    		require_once './links/error.php';
	    		exit;
	    	}
}
else {
	header('Location: ./index.php');
}



require_once 'tpl/result.php';
