<?php
session_start();

//使用プログラムの呼び出し
require_once './links/config.php';
require_once './links/util.php';

if(isset($_GET["genre"])){
	$article_genre = $_GET["genre"];
	if($article_genre == 1){
		$article_genre = "Web Design";
	}
	else if($article_genre == 2){
		$article_genre = "HTML";
	}
	else if($article_genre == 3){
		$article_genre = "CSS";
	}
	else if($article_genre == 4){
		$article_genre = "jQuery";
	}

	$sql = "SELECT  `article_id` ,  `article_title` ,  `article_date` ,  `article_view`  ,  `article_css` ,  `article_genre` ,  `article_content` , `article_short`
	FROM article WHERE `article_genre` = '".$article_genre."' ORDER BY `article_date` ASC LIMIT 0 , 30";
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

	$sql = "UPDATE  `asamone_media`.`article` SET  `article_view` = `article_view`+1 WHERE  `article_genre` = '".$article_genre."'";
	    	if ((update_data($sql)) === false) {
	    		$err_code = '1011';
	    		require_once './links/error.php';
	    		exit;
	    	}
}
else {
	header('Location: ./index.php');
}

require_once 'tpl/article_list.php';
