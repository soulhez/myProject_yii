<?php

	$database_name = 'userManage';
	$server_ip = "localhost";
	$root_name = "phpmyadmin";
	$root_password = "root";
	//连接数据库认证
	$link = mysqli_connect($server_ip,$root_name,$root_password);
	if (!$link) {
		echo "连接失败<br/>";
		echo "错误编号:".mysqli_connect_errno()."<br/>";
		echo "错误信息:".mysqli_connect_error()."<br/>";
	}
	executeSQL("use $database_name");
	executeSQL('set names utf8');

	function executeSQL($sql){
		global $link;
		$result = mysqli_query($link,$sql);
		if (!$result) {
			echo $sql."<br />";
			echo "执行SQL语句错误<br />";
			echo "错误编号:".mysqli_errno()."<br/>";
			echo "错误信息:".mysqli_error()."<br/>";
			exit;
		}
		return $result;
	}
	// function linkToDatabase($databaseName){
	// 	$server_ip = "localhost";
	// 	$root_name = "phpmyadmin";
	// 	$root_password = "root";
	// 	//连接数据库认证
	// 	$link = @mysqli_connect($server_ip,$root_name,$root_password);
	// 	if (!$link) {
	// 		echo "连接失败<br/>";
	// 		echo "错误编号:".mysqli_connect_errno()."<br/>";
	// 		echo "错误信息:".mysqli_connect_error()."<br/>";
	// 	}
	// 	executeSQL("use $databaseName");
	// 	executeSQL('set names utf8');
	// }
	// //连接数据库
	// linkToDatabase($database_name);
?>
