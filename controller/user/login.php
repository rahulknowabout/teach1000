<?php session_start();
//echo "<pre>";
//print_r($_POST);
function login() {
 if( isset( $_POST['emaillog'] ) && isset( $_POST['passlog'] ) ) {
   if( $_POST['emaillog'] != "" && $_POST['passlog'] != "" ) {
 		$total = runquery("SELECT","*","users","","where user_email = '".$_POST['emaillog']."' and user_password = '".$_POST['passlog']."'","num_rows");     
    }
  }	
  if( $total > 0) {
             $rowl = runquery("SELECT","*","users","","where user_email = '".$_POST['emaillog']."' and user_password = '".$_POST['passlog']."'");
            $_SESSION['log'] = "Login Successfully,Hello ".$rowl[0]['user_profile_name'];
  }
  else {
        $_SESSION['log'] = "Your email or password wrong!";
  }

}

if( isset( $_POST['login'] ) && $_POST['login'] == "Login" ) {
	login();
	header("location:index.php?f=user&t=login");
}

?>