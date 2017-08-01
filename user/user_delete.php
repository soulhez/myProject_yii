<?php 
	header("Content-type: text/html; charset=utf-8");
	include_once "dataBase_link.php";
	$id = $_GET['userId'];
	$sql = "delete from userTable where userId = '$id'";
	executeSQL($sql);
?>