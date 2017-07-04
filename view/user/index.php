<?php ob_start();
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/models/con_db.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/models/functiondb.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/kfun.php');
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/functions.php');
/*if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){
	if( $_GET['f'] == "ajax" && $_GET['t'] == "ajaxmenu" )	{
	   
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
		 die();
	}
	}
*/?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Urban Tradies | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/teach1000/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="/teach1000/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/teach1000/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/teach1000/admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="/teach1000/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/teach1000/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
	<!-- Date Picker -->
	<link href="/teach1000/admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
	<link href="/teach1000/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
    <link href="/teach1000/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<!-- DATA TABLES --><link href="/teach1000/admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
	
	<?php include("headeri.php");
		  include("lefti.php"); 
	?>
</div>

<?php
 if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){

	if( $_GET['f'] == 'user' && $_GET['t'] == "signup") {
	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	}
    if( isset ( $_GET['act'] ) ) {
		if( $_GET['f'] == "user" && $_GET['t'] == "user" )	{
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

</body>
</html>