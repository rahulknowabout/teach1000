<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
function block() {
	if( isset( $_GET['bid'] )) {
			   $whe = "WHERE user_id = ".$_GET['ubid']."";
		       if( $_GET['bid'] == 0) {
			   	$sva = array("status"=>"1");
			   	runquery('UPDATE','','users',$sva,$whe);
			   } 
			   else {
			   		$sva = array("status"=>"0");
			   		runquery('UPDATE','','users',$sva,$whe);
				}    
		 
		}
      } 
	 function delete() {
	  $whe = "WHERE user_id = ".$_GET['uid']."";
	  runquery('DELETE','','users','',$whe);
	 } 
	 
	 function edit() {
	 
	   if( isset( $_POST['u_email'] ) && isset( $_POST['u_password'] ) && isset( $_POST['u_c_password'] ) && isset( $_POST['u_f_name'] ) && isset( $_POST['u_l_name'] ) && isset( $_POST['u_c_no'] )  && isset( $_POST['u_p_name'] ) && isset( $_POST['u_postcode'] )  && isset( $_POST['city'] )  )  	  {
	   
	    if( isset( $_FILES["inputimage"]["name"] ) && $_FILES["inputimage"]["name"]!=""){
		
	 	$sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_postcode" =>"'".$_POST['u_postcode']."'","city" =>"'".$_POST['city']."'","user_p_photo" =>"'".$_FILES["inputimage"]["name"]."'");
		
	 }
	else {
	
	$sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_postcode" =>"'".$_POST['u_postcode']."'","city" =>"'".$_POST['city']."'");
	
	}
		
   $total = runquery("SELECT","*","users","","where user_email='".$_POST['u_email']."' and id <> ".$_REQUEST['uid']." ","num_rows");
	 
	 if( $total > 0) {
	 
	 	$_SESSION['emsg'] = 'This email is already exist';
	 }
	 else {
			runquery("UPDATE","","users",$sva,"where user_id = ".$_REQUEST['uid']."");
	 }
	}
}
	function add() {
	  if( isset( $_POST['u_email'] ) && isset( $_POST['u_password'] ) && isset( $_POST['u_c_password'] ) && isset( $_POST['u_f_name'] ) && isset( $_POST['u_l_name'] ) && isset( $_POST['u_c_no'] )  && isset( $_POST['u_p_name'] ) && isset( $_POST['u_postcode'] )  && isset( $_POST['city'] ))  	  {
	  $sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_postcode" =>"'".$_POST['u_postcode']."'","city" =>"'".$_POST['city']."'","user_p_photo" =>"'".$_FILES["inputimage"]["name"]."'");
	   $total = runquery("SELECT","*","users","","where user_email='".$_POST['u_email']."'","num_rows");
	 if( $total > 0) {
	 	$_SESSION['emsg'] = 'This email is already exist';
	 }
	 else {
		runquery("INSERT","","users",$sva);
	}
	}
}	
if( isset( $_GET['bid'] )) {
	block();
	header('location:/teach1000/admin/index.php?f=user&t=users');
}
if( isset( $_GET['uid'] ) && isset( $_GET['del'] )  ) {
	delete();
	$_SESSION['smsg'] = "User Deleted Successfully!";
	header('location:/teach1000/admin/index.php?f=user&t=users');
}
if( isset( $_POST['uid'] ) ) { 
	if( isset( $_GET['edi'] ) &&  isset($_POST['uid'] ) &&  $_POST['uid']!=""  ){
	edit();
	
	if( isset( $_SESSION['emsg'] ) && $_SESSION['emsg'] != "" ) { }
		
	else {
	      $_SESSION['smsg'] = "User Record Updated Successfully!";
	}	  
    header('location:/teach1000/admin/index.php?f=user&t=users');
	}
	else {
 	add();
	 if( isset( $_SESSION['emsg'] ) && $_SESSION['emsg'] != "" ) { }
	 else {
		$_SESSION['smsg'] = "User Added Successfully!";
	}	
		
	header('location:/teach1000/admin/index.php?f=user&t=users');
	}
}	
?>
</body>
</html>
