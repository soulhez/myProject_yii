function changeView(pa){
	if (pa.id == 'add') {
		window.location.href = "./user/user_add.php";
	}else if(pa.id == 'delete'){
		window.location.href = "./user/user_delete.php";
	}else if(pa.id == 'modify'){
		window.location.href = "./user/user_manage.php";
	}else if(pa.id == 'check'){
		window.location.href = "./user/user_manage.php";
	}
}