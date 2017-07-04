<?php ob_start();
session_start();
error_reporting(0);
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/models/con_db.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/models/functiondb.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/functions.php');
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/kfun.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/controller/function.php');
DEFINE('HTTP_ROOT', $_SERVER['HTTP_HOST']);


/*if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){
	if( $_GET['f'] == "ajax" && $_GET['t'] == "ajaxmenu" )	{
	   
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
		 die();
	}
	}
*/
      $rowm = runquery("SELECT","*","menu","","where title = 'HOME' ");
	  //echo $rowm['0']['art_id'];
	  
	  
	  
	  $rowasd = runquery("SELECT","*","artical","","where id in ( ".$rowm['0']['art_id']." )");
	// echo "<pre>";
	// print_r($rowasd);
	 
	// die(); 
	// echo "<pre>"; */ print_r($rowa);
	 //foreach($rowa as $row ) {
	 //echo stripslashes($row['text_atr']);
	//}
	//die();
	  
	  
	  
	  //echo "<pre>"; print_r($_POST); echo "</pre>"; die(); 


?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Teach 1000 | Home</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- For Gallery -->
    
    
<!--<link rel="stylesheet" type="text/css" href="css/gallery/bootstrap.max.css">-->
<link rel="stylesheet" href="css/gallery/mainmax.css">

    
    
    <!-- Bootstrap 3.3.2 -->
    
    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="skin-blue">
	<div class="wrapper">
	<script>
	var jQuery=$.noConflict();
jQuery(document).ready(function() {

    // Get the form.
    var form = jQuery('#contactform');
	var form4=jQuery('#ajax-contact');

    // Get the messages div.
   // var formMessages = $('#form-messages');
	jQuery(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
	

   var formData = jQuery(form).serialize();
   jQuery.ajax({
    type: 'POST',
    url: jQuery(form).attr('action'),
    data: formData
}).done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
  //  jQuery(formMessages).removeClass('error');
    jQuery(formMessages).addClass('success');

    // Set the message text.
	   jQuery(formMessages).text(response);

  //  jQuery(formMessages).text("Thank You For Contact Us");

    // Clear the form.
    
})
});

jQuery(form4).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
	

   var formData2 = jQuery(form4).serialize();
   jQuery.ajax({
    type: 'POST',
    url: jQuery(form4).attr('action'),
    data: formData2
}).done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
  //  jQuery(formMessages).removeClass('error');
    jQuery(formMessagess).addClass('successon');

    // Set the message text.
	   jQuery(formMessagess).text(response);

  //  jQuery(formMessages).text("Thank You For Contact Us");

    // Clear the form.
    
})
});



    // TODO: The rest of the code will go here...
});
</script>
	<?php   //echo "<pre>";
			//print_r($_POST);
			//die();
	?> 

	<?php include("header.php");
	
		  //include("lefti.php");
		 if(isset($_GET['mid']) && $_GET['mid']>0)
		 {
		 
	include('content.php');

		}else if(isset($_GET['aid']) && $_GET['aid']>0)
		{
		include('artical.php');
		
		}
		else
		{
		  include('mainbanner.php');
		//  include('pagecontent0.php');
		 include('events.php');
		 
		include('pagecontent1.php');
		  include('pagecontent2.php');
		  include('pagecontent3.php');
		  include('pagecontent4.php'); 
		   
		  include('pagecontent5.php');
		  	include('pagecontent0.php');			
		  }
		 
		if( isset( $_POST['act']) && $_POST['act'] == "login" ) {
		
				
				$total = runquery("SELECT","*","users","","where user_email = '".$_POST['email']."' and user_password = '".$_POST['password']."'","num_rows");
				if( $total>0) {
				$row = runquery("SELECT","*","users","","where user_email = '".$_POST['email']."' and user_password = '".$_POST['password']."'");
					$_SESSION['lmessage']  = "Login Successfull";
					$_SESSION['login']['fname'] =  $row['0']['user_f_name'];
					$_SESSION['login']['lname'] =  $row['0']['user_l_name'];
					$_SESSION['login']['email'] =  $row['0']['user_email'];
				    $_SESSION['login']['contactno'] = $row['0']['user_c_no'];
					 $_SESSION['login']['id'] = $row['0']['user_id'];
					
					header('location:index.php');
				}
				else {
					$_SESSION['lmessage']  = "Password or Email are incorrect";
					 header('location:index.php');
				}
		}
		 if( isset( $_POST['actout'] ) && $_POST['actout'] == "logout") {
		 		unset( $_SESSION['login'] );
				header('location:index.php');
			}
	
		  if( isset( $_POST['act']) && $_POST['act'] == "register" ) {
		
		       $sva = array("user_email" => "'".$_POST['email']."'","user_password" => "'".$_POST['password']."'","user_f_name" => "'".$_POST['f_name']."'","user_l_name"=>"'".$_POST['l_name']."'","user_c_no" => "".$_POST['contactno']."");
			   
			    if( isset($_POST['actur'] ) ) {
				
				$find = runquery("SELECT","*","users","","where user_email='".$_POST['email']."' AND user_id <> '".$_POST['actur']."'");
				if($find>0)
				{
				
				$_SESSION['rmessage'] = "Email already taken";
				}
				else
				{
				
						 $result = runquery("UPDATE","","users",$sva,"where user_id = ".$_POST['actur']."");
						 
						 unset( $_SESSION['login'] );
						 $row = runquery("SELECT","*","users","","where user_id = '".$_POST['actur']."'");
						 $_SESSION['login']['fname'] =  $row['0']['user_f_name'];
					$_SESSION['login']['lname'] =  $row['0']['user_l_name'];
					$_SESSION['login']['email'] =  $row['0']['user_email'];
				    $_SESSION['login']['contactno'] = $row['0']['user_c_no'];
					 $_SESSION['login']['id'] = $row['0']['user_id'];
						 $_SESSION['update'] = "Profile Updated Successfully";
				         header('location:index.php');
						 }
			}
			else {	
			   $total = runquery("SELECT","*","users","","where user_email = '".$_POST['email']."'","num_rows");
			   if( $total > 0 ) {
			     $_SESSION['rmessage'] = "This user alredy registered";
				 header('location:index.php');
			   }
			   else {
				 $result = runquery("INSERT","","users",$sva);
	              if( $result == TRUE) {
				    
					  
					  $rowm = runquery("SELECT","*","mailsetting","","where id = 3");
					  
					  
					$fromemail="info@teach1000.com";

					$headers = 'From: Teach1000 <' . $fromemail . ">\r\n" .
								'Content-type: text/html; charset=iso-8859-1' . '\r\n'.
								'Reply-To:' . $fromemail . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
								$sub = $rowm['0']['mail_subject'];
								$des = str_replace('$name',"".$_POST['f_name']."",$rowm['0']['mail_format'] );
								mail($row['email'],$sub,$des,$headers);
								$_SESSION['rmessage'] = "You are Successfully Registered";
					  			header('location:index.php');
				  }
				  else {
				          $_SESSION['rmessage'] =  "please fill complete data";
						  header('location:index.php');
				  }
				}
			}	
		}
		 // include('pagecontent6.php'); 
	?>
</div>

<?php
 if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){
    if( !isset ( $_GET['act'] ) ) {
		if( $_GET['f'] == 'user' && $_GET['t'] == "login") {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
		if( $_GET['f'] == 'user' && $_GET['t'] == "signup") {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
	}	
    if( isset ( $_GET['act'] ) ) {
		if( $_GET['f'] == "user" && $_GET['t'] == "user" )	{
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
		if( $_GET['f'] == "user" && $_GET['t'] == "login" )	{
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
	}
}		
       //include("view/user/signup.php");
	/*if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){

	if( isset( $_GET['f'] ) && $_GET['f'] == 'user' && isset( $_GET['t'] ) && $_GET['t'] == "usergroup") {
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}

	if( $_GET['f'] == "user" && $_GET['t'] == "usergroupadd" && !isset(  $_GET['up'] ) ) {   
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}

	if( $_GET['f'] == "user" && $_GET['t'] == "usergroupadd" && isset( $_GET['up'] ) ) {
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}

	

	if( $_GET['f'] == "user" && $_GET['t'] == "users" && !isset( $_GET['del'] )  && !isset( $_GET['bid'] ) && !isset( $_GET['edi'] ) && !isset( $_GET['uid'] ) && !isset( $_GET['a'] ))	{
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	
	if( $_GET['f'] == "user" && $_GET['t'] == "useraddedit" && isset( $_GET['uid'] )  && isset( $_GET['edi'] ) && !isset( $_GET['a'] ))	{
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "user" && $_GET['t'] == "useraddedit" && !isset( $_GET['uid'] )  && !isset( $_GET['edi'] ))  {
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	
	if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat" && !isset ( $_GET['act'] ) )	{
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	
	if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat_list")	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "content" && $_GET['t'] == "artical_list")	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "content" && $_GET['t'] == "artical" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "menu" && $_GET['t'] == "menu" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "banner" && $_GET['t'] == "banner" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "newsletter" && $_GET['t'] == "newsletter" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "carrer" && $_GET['t'] == "carrer" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "setting" && $_GET['t'] == "setting" && !isset ( $_GET['act'] ) )	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	
	
}
if( isset ( $_GET['act'] ) ) {
		if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['edi'] ) )	{
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
		if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['bid'] )  )  {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		}
		if( isset( $_GET['del'] ) && $_GET['del'] != "" && $_GET['f'] == "user" && $_GET['t'] == "ugb") {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	     }
		if( $_GET['f'] == "user" && $_GET['t'] == "ugb") {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	    }
	 if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['del'] ) )  {
			include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	 }
	if( $_GET['f'] == "content" && $_GET['t'] == "artical")	{
	    //die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat")	{
		//die("sssdsdsdddddds");
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
	if( $_GET['f'] == "menu" && $_GET['t'] == "menuac")	{
		
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		//die("sssdsdsdddddds");
	}
	if( $_GET['f'] == "banner" && $_GET['t'] == "bannerac")	{
		
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		//die("sssdsdsdddddds");
	}
	if( $_GET['f'] == "newsletter" && $_GET['t'] == "newsletter")	{
		
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		//die("sssdsdsdddddds");
	}
	if( $_GET['f'] == "carrer" && $_GET['t'] == "carrer")	{
		
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
		//die("sssdsdsdddddds");
	}
}
*/ ?>

<?php include("footer.php")
	?>


<script src="js/gallery/bootstrap.min.js"></script> 
<script src="js/gallery/jquery.easing-1.3.pack.js"></script> 
<script src="js/gallery/jquery.sticky.js"></script> 
<script src="js/gallery/jquery.inview.js"></script> 
<script src="js/gallery/jquery.flexslider-min.js"></script> 
<script src="js/gallery/masonry.pkgd.min.js"></script>
<script src="js/gallery/jquery.mixitup.min.js"></script> 
<script src="js/gallery/jquery.carouFredSel-6.2.1-packed.js"></script> 


<script src="js/gallery/jquery.waitforimages.js"></script>
<script src="js/gallery/main.js"></script> 

</body>
</html>