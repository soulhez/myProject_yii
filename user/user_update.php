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

	$userId = $_GET['userId'];

	include_once "dataBase_link.php";
	//更新数据
	$sql = "update userTable set userId='$userId',userName='$userName',sex='$sex',age='$age',place='$place',tel='$tel',email='$e_mail',hobby='$hobby',description='$description',salary='$salary',position='$position' where userId = '$userId'";
	// $sql = "insert into userTable (userName, sex, age, place, tel, email, hobby, description, salary, position) values('$userName','$sex','$age','$place','$tel','$e_mail','$hobby','$description','$salary','$position')";
	executeSQL($sql);
?>
