<?php 
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/usb.php'); 
if( isset( $_REQUEST['hidi'] ) && $_REQUEST['hidi'] != "") {
update();
header('location:usersetting.php');
}
else {
	if( isset( $_GET['ida'] ) && $_GET['ida'] != "") {
	block();
	header('location:usersetting.php');
	}
	else {
		if( isset( $_GET['del'] ) && $_GET['del'] != "") {
		delete();
		header('location:usersetting.php');
	}
		else {
			add();
			addf();
			//header('location:usersetting.php');
			}
	}
}
?>
