<?php

//使用プログラムの呼び出し
require_once 'config.php';
require_once 'util.php';

$id=$_GET['id'];
$sql = "SELECT good FROM review WHERE id=".$id;
		if (($good = get_db_data($sql)) === false) {
			$err_code = '1011';
			require_once 'error.php';
			exit;
		}

$new_good = $good[0]['good']+1;

$sql = "UPDATE review SET good = ".$new_good." WHERE id =".$id.";";

if(!update_data($sql)){
	$err_code='1011';
	require_once 'error.php';
	exit;
}

header("Location: ../index.php");