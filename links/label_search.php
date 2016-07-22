<?php
session_start();

//使用プログラムの呼び出し
require_once 'config.php';
require_once 'util.php';

$sql = "SELECT review.id AS wine_id,
review.member_id,
review.wine_name,
review.country AS country,
review.year AS wine_year,
review.img_tag AS wine_img_tag,
review.score AS wine_score,
review.drink_ease,
review.sweet,
review.acidity,
review.fruity,
review.price,
review.shop_info,
review.memo,
review.open_close,
review.good,
member.id AS member_id,
member.name AS member_name,
member.image AS member_img_tag
 FROM review INNER JOIN member ON review.member_id=member.id WHERE review.open_close = 1;";
		if (($wine = get_db_data($sql)) === false) {
			$err_code = '1011';
			require_once 'error.php';
			exit;
		}

require_once 'tpl/label_search.php';