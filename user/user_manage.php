<!DOCTYPE html>
<html>
<head>
	<title>用户列表</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.content{
			width: 80%;
			min-width: 880px;
			margin:  0 auto;
		}
		table{
			width: 100%;
			margin-bottom: 30px;
		}
		.id,.time{
			width: 8%;
			text-align: center;
		}
		tr{
			height: 50px;
		}
		tr:nth-child(odd){
			background: #f8f8f8;
		}
		p{
			text-align: center;
			padding: 60px 0 0;
			font-size: 32px;
			color: #333333;
			letter-spacing: 0;
		}
		a:link,a:visited,a:active {
			color: green
		}	
		a{
			color:green;
			padding: 0 5px;
			text-decoration:none;
		}
		#add_user{
			font-size: 21px;
			display: inline-block;
			padding: 5px 0;
		}
	</style>
</head>
<body>
	<div class="content">
		<iframe  name="post_frame" style="display:none;"> </iframe>
		<p>人员管理</p>
		<div style="text-align: right;"><a id="add_user" href="user_add.php">添加员工</a></div>
		
		<table>
			<tr>
				<td class="id">序号</td>
				<td class="time">姓名</td>
				<td class="time">性别</td>
				<td class="time">年龄</td>
				<td class="time">籍贯</td>
				<td class="time">电话</td>
				<td class="time">邮箱</td>
				<td class="time">爱好</td>
				<td class="time">个人简介</td>
				<td class="time">薪资</td>
				<td class="time">岗位</td>	
				<td class="time">操作</td>				
			</tr>
			<?php include_once "data_get.php" ?>
			<?php $index = 1; ?>
			<?php foreach ($articles as $key => $value):?>
				<tr>
					<td class="id"><?php echo $index++; ?></td>
					<td class="time"><?php echo $value['userName']; ?></td>
					<td class="time"><?php echo $value['sex']; ?></td>
					<td class="time"><?php echo $value['age']; ?></td>
					<td class="time"><?php echo $value['place']; ?></td>
					<td class="time"><?php echo $value['tel']; ?></td>
					<td class="time"><?php echo $value['email']; ?></td>
					<td class="time"><?php echo $value['hobby']; ?></td>
					<td class="time"><?php echo $value['description']; ?></td>
					<td class="time"><?php echo $value['salary']; ?></td>
					<td class="time"><?php echo $value['position']; ?></td>
					<td><a href="user_modify.php?userId=<?php echo $value['userId']; ?>">编辑</a><a id="delete_article" href="user_delete.php?userId=<?php echo $value['userId']; ?>" target="post_frame" onclick = "reload()">删除</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>

<script type="text/javascript">
	function reload(){
		location.reload(true);
		alert("人员已经删除");
	}
</script>
</body>
</html>