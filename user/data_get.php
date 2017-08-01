<?php
	include_once "dataBase_link.php";
	//删除 userId 列表
	$delete_id_sql = "alter table userTable drop userId";
	executeSQL($delete_id_sql);
	//重新添加 id 列 设为主键 自增长
	$add_id_sql= "Alter table userTable add COLUMN userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY first";
	executeSQL($add_id_sql);

	
	$sql = "select userId,userName,sex,age,place,tel,email,hobby,description,salary,position from userTable";
	$result =  executeSQL($sql);
	//解析结果
 	$articles = array();
 	while ($row = mysqli_fetch_assoc($result)) {
 		$articles[] = $row;
 	}
 	$articles = array_reverse($articles);
?>
