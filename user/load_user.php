<?php
	$userId = $_GET['userId'];
	include_once 'dataBase_link.php';
	$sql = "select * from userTable where userId = $userId";
	$result = executeSQL($sql);
	$array = mysqli_fetch_assoc($result);

?>
