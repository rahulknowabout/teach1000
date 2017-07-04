<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teach1000</title>

    <!-- Css Files -->

    <link href="Umeed_files/bootstrap.css" rel="stylesheet">
    <link href="Umeed_files/font-awesome.css" rel="stylesheet">
    <link href="Umeed_files/themetypo.css" rel="stylesheet">
    <link href="Umeed_files/style.css" rel="stylesheet">
    <link href="Umeed_files/widget.css" rel="stylesheet">
    <link href="Umeed_files/color.css" rel="stylesheet">
    <link href="Umeed_files/flexslider.css" rel="stylesheet">
    <link href="Umeed_files/owl.css" rel="stylesheet">
    <link href="Umeed_files/countdown.css" rel="stylesheet">
    <link href="Umeed_files/responsive.css" rel="stylesheet">
    
    
    <!--- clock  -->

<link rel="stylesheet" href="css/clock/clockstyles.css" type="text/css" media="all" />
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="css/clock/jquery.downCount.js"></script> 


 <!---                photo zoom

-->
	<link rel="stylesheet" href="css/photozoom/smoothzoom.css">
	<!-- Demo CSS (don't use) -->
    <script>
	function submitacymailingform(str)
	{
	if(  str.length <= 2 )
	{
		document.getElementById('tradeout').style.display="none";
		alert("Please Enter Email");
		return;
	}
	var JCQuery = jQuery.noConflict();
	var root =document.getElementById("root").value;
		//var root = location.protocol + '//' + location.host;
		var page=root+"ajax/formsubmit.php?email="+str;
		JCQuery.ajax({
		type: "POST",
		url: page,
		  success: function( msg ){
			document.getElementById("tradeout").style.display="block";  
			document.getElementById("tradeout").innerHTML = msg;
		  }
		});
	
	
	}
	
	function lost(str)
	{
	
	if(str=="")
	{
	alert("Please fill email address");
	return;
	
	}
	else
	{
	var JCQuery = jQuery.noConflict();
	var root =document.getElementById("root").value;
		//var root = location.protocol + '//' + location.host;
		var page=root+"ajax/formsubmit.php?lost="+str;
		JCQuery.ajax({
		type: "POST",
		url: page,
		  success: function( msg ){
			alert(msg);
		  }
		});
	
	
	
	}
	
	}
</script>
	

<script>

jQuery(document).ready(function(){
    jQuery("#flip").click(function(){
       jQuery("#panel").slideToggle("slow");
    });
});

jQuery(document).ready(function(){
    jQuery("#flipreg").click(function(){
	
       jQuery("#panelreg").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
   
    background-color: #FFFFFF;
    border: solid 1px #c3c3c3;
	    
}

#panel {
    padding: 50px;
    display: none;
}

#panelreg, #flipreg {
    padding: 5px;
    
    background-color: #FFFFFF;
    border: solid 1px #c3c3c3;
	    
}
#panelreg,#logout {
    padding: 5px;
    
    background-color: #FFFFFF;
    border: solid 1px #c3c3c3;
	color:#333333;
	    
}

#panelreg {
    padding: 50px;
    display: none;
}
#logout {
    padding: 50px;
	dispaly:none;
	color:#333333;
	}
    
</style>
  </head>
  <body>

    <?php $rowm = menu(); ?>
    <!--// Wrapper //-->
    <div class="kode-wrapper">

      <header id="mainheader" class="kode-header-absolute">

        <!--// Kode TopBaar //-->
        <div class="kode-topbar">
          <div class="container">
            <div class="row">
            <?php
			if(isset($_SESSION['regular']))
			{
			
			 
			}else{
			  $admindetial=runquery("SELECT","*","settinga",""," WHERE id=1");
			  	$_SESSION['regular']['emailid']=$admindetial[0]['email'];
						$_SESSION['regular']['phnno']=$admindetial[0]['phone'];
							$_SESSION['regular']['fax']=$admindetial[0]['fax'];
						$_SESSION['regular']['flink']=$admindetial[0]['flink'];
							$_SESSION['regular']['glink']=$admindetial[0]['glink'];
							$_SESSION['regular']['tlink']=$admindetial[0]['tlink'];
						$_SESSION['regular']['lin_link']=$admindetial[0]['lin_link'];
			
			
			}
			
		
			
			  ?>
              <div class="col-md-3"><span class="kode-barinfo"><i class="fa fa-phone"></i> <?php echo $_SESSION['regular']['phnno'] ?></span></div>
              <div class="col-md-9">
                <a href="#" class="kode-email"><i class="fa fa-envelope"></i> <?php echo $_SESSION['regular']['emailid'] ?></a>
               <span> <?php if( isset( $_SESSION['lmessage'] ) && $_SESSION['lmessage'] != "" ) {
			                echo $_SESSION['lmessage'];
			                unset($_SESSION['lmessage']);
						}	
						if( isset( $_SESSION['rmessage'] ) && $_SESSION['rmessage'] != "" ) {
			                echo $_SESSION['rmessage'];
			                unset($_SESSION['rmessage']);
						}	
						if( isset( $_SESSION['update'] ) && $_SESSION['update'] != "" ) {
			                echo $_SESSION['update'];
			                unset($_SESSION['update']);
						}	
			   
			    ?> </span>
		
                <ul class="kode-team-network" >
				<li id="flip"> <?php if( isset( $_SESSION['login'] ) ) { echo "Hi,".$_SESSION['login']['fname']; } else { echo "LogIn"; } ?>	</li>
					
					 <div id="panel" style="z-index: 99; position: absolute;margin-top: 38px;"><div id="koderespond">
					 		
					 <form  class="comments-form" name="loginform" action = "index.php" method="post">
                    	<?php if( isset( $_SESSION['login'] ) ) { ?> <p class="kd-button"> <input type="submit" value="LogOut"></p>
																<input type = "hidden" name = "actout"  id = "actout" value="logout"/>	
                                                                					 <?php } else {?>
						
                     <p style="width:auto"><i class="fa fa-users"></i>
                     <input type="hidden" value="<?php echo buildurl(); ?>" id="root" /><input  type="text" id="email" name="email" value="" placeholder="Email *" required></p>
			         <p style="width:auto"><i class="fa fa-lock" ></i><input type="password" id="password" name="password" placeholder="Password *" style = "border-radius: 60px;height: 40px; padding: 9px 20px; width: 100%;" required></p>
						                   <input type = "hidden" name = "act"  id = "act" value="login"/>
											
                 	 <p class="kd-button"> <input type="submit" value="LogIn"><br>
<span style="font-size:10px"><a href="#" onClick="lost(email.value)" > * Lost Your password</a> </span></p> <?php } ?>
                     
                  </form></div></div>
			
				<!--<li id="logout"><?php //if( isset( $_SESSION['login'] ) ) { echo '<a href = "loginuser.php">LogOut</a>' ;} else { echo "or" ;}?></li>-->
				
				<li id="flipreg"><?php if( isset($_SESSION['login'] ) ) { echo "Profile"; } else { echo "Register"; } ?></li>
					 <div id="panelreg" style="z-index: 99; position: absolute;margin-top: 38px;"><div id="koderespond">
					 	<form  class="comments-form" name="regform" action = "index.php" method="post" >
                    
                     
                     <p style="width:auto;"><i class="fa fa-envelope"></i><input type="text" id="email" name="email" placeholder="Email *" value = "<?php if( isset( $_SESSION['login']['email'] ) ) { echo $_SESSION['login']['email']; }?>"/></p>
					 
			         <p style="width:auto;"><i class="fa fa-lock" ></i><input type="password" id="password" name="password" placeholder="Password *" style = "border-radius: 60px;height: 40px; padding: 9px 20px; width: 100%;"></p>
					
					 <p style="width:auto;"><i class="fa fa-users"></i><input type="text" id="f_name" name="f_name" placeholder="First Name *" value = "<?php if( isset( $_SESSION['login']['fname'] ) ) { echo $_SESSION['login']['fname']; }?>"/></p>
					 
					 <p style="width:auto;"><i class="fa fa-users"></i><input type="text" id="l_name" name="l_name" placeholder="Last Name *"value = "<?php if( isset( $_SESSION['login']['lname'] ) ) { echo $_SESSION['login']['lname']; }?>"/></p>
					 
					 <p style="width:auto;"><i class="fa fa-phone"></i><input type="text" id="contactno" name="contactno" placeholder="Contact Number *" value = "<?php if( isset( $_SESSION['login']['lname'] ) ) { echo $_SESSION['login']['contactno']; }?>"/>
					 </p>
					<?php if( isset( $_SESSION['login']['id'] ) ) { ?>
					 <input type = "hidden" name = "actur"  id = "actur" value="<?php echo $_SESSION['login']['id']; ?>"/>
					 
					 <?php } ?>
		     <input type = "hidden" name = "act"  id = "act" value="register"/>
					
                 	 <p class="kd-button"> <input type="submit" value="<?php if( isset( $_SESSION['login'] ) ) { echo "Update Profile"; }else {echo "Register"; }?>"></p>
                  </form></div></div>
				
                  <li><a href="<?php echo $_SESSION['regular']['flink'] ?>" class="thbg-colorhover fa fa-facebook"></a></li>
                  <li><a href="<?php echo $_SESSION['regular']['tlink'] ?>" class="thbg-colorhover fa fa-twitter"></a></li>
                  <li><a href="<?php echo $_SESSION['regular']['glink'] ?>" class="thbg-colorhover fa fa-google-plus"></a></li>
                  <li><a href="<?php echo $_SESSION['regular']['lin_link'] ?>" class="thbg-colorhover fa fa-linkedin"></a></li>
                </ul>
				
              </div>
				
				
            </div>
          </div>
        </div>
        <!--// Kode TopBaar //-->
        <div class="clearfix"></div>

        <!--// Kode HeaderBaar //-->
        <div class="container">
          <div class="kode-headbar">
            <div class="row">
              <div class="col-md-3"><a href="#" class="logo"><img src="Umeed_files/logo.png" alt=""></a></div>
              <div class="col-md-9">

                <div class="kode-rightsection">
                  <nav class="navbar navbar-default">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                      <ul class="nav navbar-nav">
					   <?php foreach( $rowm as $row ) {
					   
					  if( $row['title']=="Donate" ) {
					 			 $_SESSION['donate'] = "index.php?mid=".$row['id'];
					  }else {
					  
					   if($row['title']=="HOME")
					   {
					   
					   ?>
                        <li><a href="<?php echo buildurl("index.php"); ?>"><?php echo $row['title']; ?></a></li>
                       <?php
					   }else
					   {
					   if($row['parent_id']==0 )
					   {
					   ?>
                        <li><a href="<?php echo buildurl("index.php?mid=".$row['id']); ?>"><?php echo $row['title']; ?></a><?php }
						
						 $s="select * from menu where parent_id='".$row['id']."'";
						$res=mysql_query($s);
						if(mysql_num_rows($res)>0)
						{ ?> <ul class="children"><?php
						while($rowaas =mysql_fetch_assoc($res))
						//print_r($rowaas);
					  {
						//echo $value;
					   
					   ?><li><a href="<?php echo buildurl("index.php?mid=".$rowaas['id']); ?>"><?php echo $rowaas['title']; ?></a></li><?php
					               
					   }
					   
					    ?></ul><?php }else { echo "</li>";  } 
						
						 ?></li>
                        
                        <?php
						
						}?>
                        
                      
                       <?php } 
					   
					   }
					  
					   ?>
                       
                       
                       
                      </ul>
                    </div>
                  </nav>
                  <a href="<?php echo  $_SESSION['donate'];  ?>" class="kode-donate-btn thbg-color">Donate</a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!--// Kode HeaderBaar //-->

      </header>
