<?php
//TITLE：エラー表示用プログラム
//NAME：ASAMOTO YUKI
//DATE：2014/06/05 NEW

$err_msg=array();
$err_msg['1011']='不正なエラーです。もう一度最初からお試しください。';
$err_msg['1012']='内部でエラーが発生いたしました。もう一度最初からお試しください。';

/*if(!isset($err_code) || isset($err_msg[$err_code])){
	$err_code='1011';
}*/
	
?>
<!doctype html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<title>DBサンプル</title>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" media="screen" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>
<p>エラーコード：<?php echo $err_code;?></p>
<p>エラーメッセージ：<?php echo $err_msg[$err_code];?></p>
</body>
</html>