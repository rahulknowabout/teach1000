<?php include("header.php");   

$news	=	get_revert_mail(1);
$contact	=	get_revert_mail(2);
$reg	=	get_revert_mail(3);
$afterreg	=	get_revert_mail(4);
$addbuss	=	get_revert_mail(5);
$jobs	=	get_revert_mail(6);
$quote	=	get_revert_mail(7);
$payment	=	get_revert_mail(8);
?>

<style>
.contactgroup
{
}
</style>
<link rel="stylesheet" href="css/jQueryTab.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/animation.css" type="text/css" media="screen" />





  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Settings 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
          </ol>
        </section>
        <?php 
		
		//print_r($Rows);
		
	 ?>
          <section class="content">      
        
        
    <div class="row">
    
    
    <div class="tabs-7">
	<ul class="tabs">
        <li><a class="active" href="#tab25">Basic Settings</a></li>
        <li><a href="#tab26">Mail Settings</a></li>
        <li><a href="#tab27">Payment Settings</a></li>
        <li><a href="#tab28">Post Jobs Category</a></li>
    </ul>
	<section class="tab_content_wrapper">
        <article class="tab_content" id="tab25">
           <div class="box box-primary">
     <h4>Admin Email</h4>
         <form action="#" method="post">
                    
                    <div class="form-group" style="margin-left:20px; width:100%">
                    <?php getadminmail(); ?>
                    </div>
                    
                   
                    <input class="btn bg-olive margin" type="submit" value="Update" name="updte_adminmail" />
                  </form>
                 
                  </div>
        </article>
        <article class="tab_content" id="tab26"><p>
        
        
        <div class="box box-primary">
     <h4>Variable For use</h4>
     
            <span>      $name :- User name
                  </span><br />
     <span>$email:-User Email</span><br />
<span>$buss_name:- Business Name</span><br />
<span>$subject:-Email Subject</span>
<br />

<span>$message:-Message for send</span>             
        
                
                  </div>
        
            <div class="box box-primary">
     <h4>Revert Mail Tamplate For NewsLetter </h4>
     
         <form action="#" method="post">
                    
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="news_sub_revert" placeholder="Email Subject" value="<?php echo $news['mail_sub']; ?>" />
					</div>
					<div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="news_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $news['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update Newsletter" name="updte_newsrevert" />
                  </form>
                
                  </div>
                   
                   
                  
            <div class="box box-primary">
     <h4>Revert Mail Tamplate For Contact Us </h4>
         <form action="#" method="post">
                    
                     <div class="form-group" style="margin-left:20px">
						<input type="text" name="about_sub_revert" placeholder="Email Subject" value="<?php echo $contact['mail_sub']; ?>" />
					</div>
					<div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="about_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $contact['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update About Us" name="updte_about" />
                  </form>
                  
                  </div><div class="box box-primary">
     <h4>Revert Mail Tamplate For Registration On time </h4>
         <form action="#" method="post">
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="onreg_sub_revert" placeholder="Email Subject" value="<?php echo $reg['mail_sub']; ?>" />
					</div>
                    <div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="onreg_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $reg['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update Registration On time Mail" name="updte_ontime" />
                  </form>
                  
                  </div><div class="box box-primary">
     <h4>Revert Mail Tamplate For After Registration   </h4>
         <form action="#" method="post">
                    
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="afterreg_sub_revert" placeholder="Email Subject" value="<?php echo $afterreg['mail_sub']; ?>" />
					</div>
					<div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="afterreg_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $afterreg['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update After Registration Mail" name="updte_after" />
                  </form>
                  
                  </div><div class="box box-primary">
     <h4>Revert Mail Tamplate For Bussiness Added </h4>
         <form action="#" method="post">
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="addbuss_sub_revert" placeholder="Email Subject" value="<?php echo $addbuss['mail_sub']; ?>" />
					</div>
                    <div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="addbuss_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $addbuss['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update Bussiness Added Mail" name="updte_buss" />
                  </form>
                  
                  </div><div class="box box-primary">
     <h4>Revert Mail Tamplate For Job Apply </h4>
         <form action="#" method="post">
                    
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="jobs_sub_revert" placeholder="Email Subject" value="<?php echo $jobs['mail_sub']; ?>" />
					</div>
					<div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="jobs_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $jobs['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update Jobs Apply Mail" name="updte_jobs" />
                  </form>
                  
                  </div><div class="box box-primary">
     <h4>Quote Mail Tamplate For Job Apply </h4>
         <form action="#" method="post">
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="quote_sub_revert" placeholder="Email Subject" value="<?php echo $quote['mail_sub']; ?>" />
					</div>
                    <div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="quote_revert" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $quote['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update Quote  Mail" name="updte_quote" />
                  </form>
                  
                  </div></p>
        </article>
        <article class="tab_content" id="tab27">
            <?php if(isset($_POST['uppay']) && $_POST['uppay']!="")
			{
			
			$s="update paymentsetting set currency_code='".$_POST['currency_code']."',mode='".$_POST['mode']."' WHERE id='1'";
			$fr=mysql_query($s);
			
			} ?>
            
            <p><?php $s="select * from paymentsetting";
			$fr=mysql_query($s);
			$df=mysql_fetch_assoc($fr);
			
			 ?><form method="post" action="">
             Currency Code :-<input type="text" name="currency_code" value="<?php echo $df['currency_code']; ?>" /><br />

            Payment Mode:- <select name="mode">
             <option  <?php echo ( isset( $df['mode'] ) && $df['mode'] == "1" ) ? 'selected="selected"' : ''  ?>  value="1">Test Mode</option>
             <option <?php echo ( isset( $df['mode'] ) && $df['mode'] == "0" ) ? 'selected="selected"' : ''  ?> value="0">Real Mode</option>
             </select><br />

             <input type="submit" name="uppay" value="Update Setting" />
             </form></p>
            <p><div class="box box-primary">
     <h4>Thank You Mail Tamplate For Payment Confirmed </h4>
         <form action="#" method="post">
                    <div class="form-group" style="margin-left:20px">
						<input type="text" name="payment_sub_revert" placeholder="Email Subject" value="<?php echo $payment['mail_sub']; ?>" />
					</div>
                    <div class="form-group" style="margin-left:20px">
                     <textarea class="textarea" name="payment_mail" style="width: 550px; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $payment['mail_format']; ?></textarea>
                    </div>
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Update payment mail" name="updte_payment_mail" />
                  </form>
                  
                  </div></p>
        </article>
        <article class="tab_content" id="tab28">
        <div class="box box-primary">
     <h4>Add Job Category by Comma(,) seperated </h4>
         <form action="#" method="post">
                    
                    
                    <input  type="text" name="jobscat" value="<?php echo get_jobs_category(); ?>" placeholder="Like php Developer,Java Developer.."  />
                    
                    <div>
                    
                    </div>
                   
                    <input class="btn bg-olive margin" type="submit" value="Add Job Category" name="add_category" />
                  </form>
                  
                  </div>
            
            
        </article>
    </section>
</div>
<script src="css/js/jquery-1.9.0.min.js"></script>
<!-- jQueryTab.js --> 
<script src="css/js/jQueryTab.js"></script> 
<script type="text/javascript">
// initializing jQueryTab plugin 

$('.tabs-7').jQueryTab({
    initialTab: 2,
    tabInTransition: 'fadeIn',
    tabOutTransition: 'fadeOut',
    cookieName: 'active-tab-7'
    
});


</script>

    
    
            <!-- left column -->
     
                  
                  
             
                  
                  
                  
                  
                  
                  
              <!-- general form elements -->
        
                  
                   <div class="col-md-12">
              <!-- general Table -->
             
            </div><!--/.col (right) -->
                  </div>
                  </div>
                      <?php include("footer.php")  ?>