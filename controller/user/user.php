<?php function edit() {
	   if( isset( $_POST['u_email'] ) && isset( $_POST['u_password'] ) && isset( $_POST['u_c_password'] ) && isset( $_POST['u_f_name'] ) && isset( $_POST['u_l_name'] ) && isset( $_POST['u_c_no'] )  && isset( $_POST['u_p_name'] ) && isset( $_POST['u_postcode'] ) && isset( $_POST['u_state'] )  )  	  {
	    if( isset( $_FILES["inputimage"]["name"] ) && $_FILES["inputimage"]["name"]!=""){
		
	 	$sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_suburb" => "'".$_POST['u_sub']."'","user_postcode" =>"'".$_POST['u_postcode']."'","user_state" => "'".$_POST['u_state']."'","user_p_photo" =>"'".$_FILES["inputimage"]["name"]."'");
		
	}
	else {
	$sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_suburb" => "'".$_POST['u_sub']."'","user_postcode" =>"'".$_POST['u_postcode']."'","user_state" => "'".$_POST['u_state']."'");
	}
	 
	  }
	 }
	function add() {
	 echo "<pre>";
	 print_r($_POST);
	  if( isset( $_POST['u_email'] ) && isset( $_POST['u_password'] ) && isset( $_POST['u_c_password'] ) && isset( $_POST['u_f_name'] ) && isset( $_POST['u_l_name'] ) && isset( $_POST['u_c_no'] )  && isset( $_POST['u_p_name'] ) && isset( $_POST['u_postcode'] ) && isset( $_POST['u_state'] )  )  	  {
	     echo "gddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddrdeeeeeeeeeeeredddddddd";
	  $sva = array("user_email" =>"'".$_POST['u_email']."'", "user_password" => "'".$_POST['u_password']."'","user_f_name" => "'". $_POST['u_f_name']."'","user_l_name" => "'".$_POST['u_l_name']."'","user_c_no" => "'".$_POST['u_c_no']."'","user_profile_name" =>"'".$_POST['u_p_name']."'","user_suburb" => "'".$_POST['u_sub']."'","user_postcode" =>"'".$_POST['u_postcode']."'","user_state" => "'".$_POST['u_state']."'","user_p_photo" =>"'".$_FILES["inputimage"]["name"]."'");
	 $total = runquery("SELECT","*","users","","where user_email='".$_POST['u_email']."'","num_rows");
	 if( $total > 0) {
	 }
	 else {	
		runquery("INSERT","","users",$sva);
		}
	}
	}
   add();	
?>	
