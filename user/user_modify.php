<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改用户</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>
	<iframe  name="post_frame" style="display:none;"> </iframe>
	<?php include_once 'load_user.php' ?>
	<form action="user_update.php?userId=<?php echo $userId ?>" method="POST" target="post_frame">
		<span>姓名</span>
		<input type="text" name="userName" value="<?php echo $array['userName'] ?>">
		<span>性别</span>
		<input type="text" name="sex" value="<?php echo $array['sex'] ?>">
		<span>年龄</span>
		<input type="text" name="age" value="<?php echo $array['age'] ?>">
		<span>籍贯</span>
		<input type="text" name="place" value="<?php echo $array['place'] ?>">
		<span>电话</span>
		<input type="text" name="tel" value="<?php echo $array['tel'] ?>">
		<span>邮箱</span>
		<input type="text" name="e-mail" value="<?php echo $array['email'] ?>">
		<span>爱好</span>
		<input type="text" name="hobby" value="<?php echo $array['hobby'] ?>">
		<span>个人简介</span>
		<input type="text" name="description" value="<?php echo $array['description'] ?>">
		<span>入职日期</span>
		<input type="text" name="joinDate">
		<span>薪资</span>
		<input type="text" name="salary" value="<?php echo $array['salary'] ?>">
		<span>岗位</span>
		<input type="text" name="position" value="<?php echo $array['position'] ?>">
		<input id="upload_btn" type="submit" value="上传" name="" onclick="showUserList()">
	</form>
<script type="text/javascript">
	function showUserList(){
		window.location.href = "./user_manage.php";
	}
</script>
</body>
</html>