<?php
//DBでSQLを実行する関数である。エラーが発生した場合にはerror.phpを表示する。
function errlog($err_code){
	$fname = 'log.csv';	//ファイル名定義
	
	$date=date('Y年m月d日H時i分s秒');	//エラーの発生日時（現在）を読み込む
	
	$err_msg=array();
	$err_msg['1011']='DBを利用することが出来ませんでした。';
	$err_msg['1012']='SQL文の実行が出来ませんでした。';
	
	//CSVデータの作成
	$log_data =$date.','.$err_code.','.$err_msg[$err_code]."\r\n";
		
	//ファイルの書き込み
	$fpt=@fopen($fname,"a");
	fputs($fpt,$log_data);
	fclose($fpt);
	return;
}