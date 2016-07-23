<?php
session_start();

//使用プログラムの呼び出し
require_once './links/config.php';
require_once './links/util.php';

if(isset($_GET["article_id"])){
	$article_get_id = $_GET["article_id"];
	$sql = "SELECT  `article_id` ,  `article_title` ,  `article_date` ,  `article_view`  ,  `article_css` ,  `article_genre` ,  `article_content`
	FROM article WHERE `article_id` = ".$article_get_id."  LIMIT 0 , 30";
			if (($article = get_db_data($sql)) === false) {
				$err_code = '1011';
				require_once './links/error.php';
				exit;
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


require_once 'tpl/article.php';
