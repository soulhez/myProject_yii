<?php
	header("Content-type: text/html; charset=utf-8");

	$userName = $_POST['userName'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$place = $_POST['place'];
	$tel = $_POST['tel'];
	$e_mail = $_POST['e-mail'];
	$hobby = $_POST['hobby'];
	$description = $_POST['description'];
	$joindate = $_POST['joindate'];
	$salary = $_POST['salary'];
	$position = $_POST['position'];

	include_once "dataBase_link.php";
	//插入数据
	$sql = "insert into userTable (userName, sex, age, place, tel, email, hobby, description, salary, position) values('$userName','$sex','$age','$place','$tel','$e_mail','$hobby','$description','$salary','$position')";
	executeSQL($sql);
?>
