<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加用户</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>
	<iframe  name="post_frame" style="display:none;"> </iframe>
	<form action="user_insert.php" method="POST" target="post_frame">
		<span>姓名</span>
		<input type="text" name="userName">
		<span>性别</span>
		<input type="text" name="sex">
		<span>年龄</span>
		<input type="text" name="age">
		<span>籍贯</span>
		<input type="text" name="place">
		<span>电话</span>
		<input type="text" name="tel">
		<span>邮箱</span>
		<input type="text" name="e-mail">
		<span>爱好</span>
		<input type="text" name="hobby">
		<span>个人简介</span>
		<input type="text" name="description">
		<span>入职日期</span>
		<input type="text" name="joinDate">
		<span>薪资</span>
		<input type="text" name="salary">
		<span>岗位</span>
		<input type="text" name="position">
		<input id="upload_btn" type="submit" value="上传" name="" onclick="showUserList()">
	</form>
<script type="text/javascript">
	function showUserList(){
		window.location.href = "./user_manage.php";
	}
</script>
</body>
</html>