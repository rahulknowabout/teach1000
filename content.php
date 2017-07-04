<script>
function feq(str) {
//alert("ttytyyt");
	//alert(document.getElementById("dtypeb").value);
	
	if ( str == 'Recurring' ) {
	
	     document.getElementById("fequ").style.display = "block";  
	}
	else
	{
	
	  document.getElementById("fequ").style.display = "none";  
	
	}

}
</script>
<?php

if(isset($_GET['mid']) && $_GET['mid']>0 )
{
if($_GET['mid']=='27')
{



$_SESSION['formd'] = '<div class="col-md-12">
                <div class="kode-maintitle">
                
                  <h3>Donation <span class="thcolor">Information</span></h3>
                  <div class="kode-maindivider"><span></span></div>
                </div>

                <div id="koderespond">
                  <form id="contactform" action="donate.php" class="comments-form" method="post">
				  		<h5> Donation Information</h5>
						<select name = "donatec"> 
						    <option value="0">I would like to donate </option>
							<option>$25</option>
							<option>$50</option>
						    <option>$100</option>
							<option>$250</option>
							<option>$500</option> 
							<option>$1000</option> 
						</select>
						
				   		<input type="text" placeholder="Others" name="other" id="other"/>
				        <table style = "border:hidden">  
				    	<tr style = "border:hidden"><td style = "border:hidden" ><h6>Type of Donation</td> </h6><td><input type="radio" onclick="feq(this.value)" name="dtype" id="dtypea" value = "One" />One Time Donation</td></tr>
						
						<tr><td style = "border:hidden" ></td><td><input type="radio"  name="dtype" id="dtypeb" value = "Recurring" onclick="feq(this.value)">Recurring Donation</td></tr>
						</table>
						<div id = "fequ" style = "display:none">
							<select name = "donatec"> 
						    	<option value="0">Frequency</option>
								<option>Monthly</option>
								
						</select>
						
						</div>
					<hr/>
				    <h5> Contact Information</h5>
                    <p><i class="fa fa-users"></i> <input type="text" placeholder=" First Name *" name="f_name" id="f_name"></p>
					<p><i class="fa fa-users"></i> <input type="text" placeholder=" Last Name *" name="l_name" id="l_name"></p>
					<p><i class="fa fa-map-marker"></i><input type="text" placeholder=" Address *" name="address" id="address"></p>
					<p><i class="fa fa-paper-plane"></i> <input type="text" placeholder="city *" name="city" id="city"></p>
					<p><i class="fa fa-paper-plane"></i> <input type="text" placeholder=" State/Proviece *" name="state" id="state"></p>
					<p><i class="fa fa-paper-plane"></i> <input type="text" placeholder=" Zip/Prostal Code *" name="zip" id="zip"></p>
                    <p><i class="fa fa-envelope"></i> <input type="text" placeholder="Email *" name="email" id="email"></p>
					<p><i class="fa fa-phone"></i> <input type="text" placeholder="Phone *" name="phone" id="phone"></p>
                  
					
					
						 <div style="color:#FF9933; font-weight:bold" class="success" id="formMessages"></div>
					
				
                    
                    <p class="kd-button"> <input type="submit" value="Submit Now"></p>
                  <div id="contact_form_responce" class="hidden-me"><p></p></div></form>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>'; }
	  
	  
$roqs=runquery("SELECT","*","menu",""," where id='".$_GET['mid']."'");
?><div class="kode-subheader subheader-height" style="background:#000000">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><?php echo $roqs[0]['title']; ?></h1>
            </div>
            
          </div>
        </div>
      </div>
      <?php if($_GET['mid']=='20' ||$_GET['mid']=='16' )
{} else { ?>

      <section class="kode-pagesection" style=" padding-top: 50px; padding-bottom: 40px; background-color:#FFFFFF ;">
         
         
                <div class="kode-event-list">

                  <article class="event-table">
                    <div class="event-table-row">
                      <?php include('left.php'); } ?>
                      
                      
                        
                      <?php
foreach($roqs as $res)
{
$rowa =  runquery("SELECT","*","artical",""," where id='".$res['art_id']."'");
//echo "<pre>"; print_r($rowa); die();
if(isset($rowa) && count($rowa) >0  && is_array($rowa))
{


?>
<div class="event-cell in-detail">

<div class="col-md-12">
                <div class="kode-maintitle">
                  <?php if($_GET['mid']=='20')
{}  else { ?>  
				  <?php $str =  $rowa[0]['title'];  }
				      $split = explode(" ", $str);
					  if( count( $split ) >= 1 ) { 
					  	$end	= end(explode(" ",$str));
					  ?>
					      
					     <h3><?php echo str_replace( $end, "", $str ); ?> <span class="thcolor"><?php echo $end; ?></span> </h3>
					  <?php
					  }
					  ?>
                  
                  <div class="kode-maindivider"><span></span></div>
                  <div class="clearfix"></div>
                 <?php 
				
				             echo $rowa[0]['text_atr'];
							if($_GET['mid']=='27') { echo $_SESSION['formd']; }
				 
				 
				  ?>
				
                </div>
              </div>
			  
			  
			  
<?php




}
?>
<?php
if($_GET['mid']=='18' || $roqs[0]['title']=='Gallery' || $_GET['mid']=='gallery')
	{
		
		$roqs=runquery("SELECT","*","imagegallary",""," where `gis` >'0'");
		//echo "<pre>"; print_r($roqs);
		
		if(isset($roqs) && count($roqs) >0)
		{
		?><div class="event-cell in-detail"><header class="" style="height:0px;" >
		  <nav id="sticktop" class="navbar navbar-default" style="display:none">
			<div class="container">
			  
			  <div class="navbar-collapse collapse">
			   <ul class="nav navbar-nav">
				  
				  <li class="dropdown active">          </li>
				</ul>
			  </div>
			 
			</div>
		  </nav>
		</header>
		<div style="background:#FFFFFF">
		<section id="portfolio">
			
		
		  <ul class="project-filter" >
		  <?php $rows=runquery("SELECT","*","tags","","");
		  foreach($rows as $my)
		  {
		  
		   ?>
			<li class="filter"  data-filter="<?php echo $my['tagname'] ?>"><?php echo str_replace("_"," ",$my['tagname']); ?></li>
			 <?php } ?>
		  </ul>
		  <ul id="Grid" class="project-wrapper projects">
		  <?php foreach($roqs as $ro)
		  { 
		  $ex=explode(",",$ro['tagid']);
		  foreach($ex as $v=>$k)
		  {
		   $rowsname=runquery("SELECT","*","tags",""," where tagid='".$k."'");
		  ?>
			<a href="admin/uploadimages/<?php echo $ro['image_name']; ?>" data-smoothzoom="group1"><li class="project ajax-project <?php echo $rowsname[0]['tagname'] ?>"> <img src="admin/uploadimages/<?php echo $ro['image_name']; ?>" alt="">
			  <div class="hover">
				<h6><?php echo $ro['title']; ?></h6>
				<p><?php echo $ro['subtitle']; ?></p>
				 </div>
			</li></a>
			<!--work-->
		   <?php } } ?> 
		 
			<!--work--> 
		  </ul>
		  <div class="clearfix"></div>
		<!--  <div class="load-more"> <a href="#">load more</a> </div>-->
		</section></div><?php }
		
		
	}
?>

</div>
             <?php if($_GET['mid']=='20' ||$_GET['mid']=='16' )
{} else { ?>        </div>
                  </article>
           </div> <?php } ?>
          
        </section><?php
//////////////////////////////
if($_GET['mid']=='20')
{

?> <div class="col-md-12">
                <div class="kode-maintitle">
                  <h2>Irreplaceable experience now</h2>
                  <h3>Contact <span class="thcolor">With US</span></h3>
                  <div class="kode-maindivider"><span></span></div>
                </div>

                <div id="koderespond">
                  <form id="contactform" action="contact_us.php" class="comments-form" method="post">
                    <p><i class="fa fa-users"></i> <input type="text" placeholder="Name *" name="name" id="name"></p>
                    <p><i class="fa fa-envelope"></i> <input type="text" placeholder="Email *" name="email" id="email"></p>
					<p class="kd-phone"><i class="fa fa-phone"></i> <input type="text" placeholder="Phone *" name="phone" id="phone"></p>
                    <p class="kd-textarea"><i class="fa fa-comments-o"></i> <textarea placeholder="MEssage:" id="message" name="message"></textarea></p>
					
					
						 <div style="color:#FF9933; font-weight:bold" class="success" id="formMessages"></div>
					
				
                    
                    <p class="kd-button"> <input type="submit" value="Submit Now"></p>
                  <div id="contact_form_responce" class="hidden-me"><p></p></div></form>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div><?php

}}

///////////




///////
if($_GET['mid']=='13' || $roqs[0]['title']=='Events')
{
if(isset($_GET['mid']) && isset($_GET['en']) && $_GET['en']>0)
{
$rowa =  runquery("SELECT","*","events",""," where id='".$_GET['en']."'");
?><div class="container">
            <div class="row">

              <div class="col-md-9 second-inn">
               
                <div class="kode-widget-title"> <h2><?Php echo  $rowa[0]['title']; ?></h2> </div>
                <div class="kode-editor">
                  <p><?Php echo  $rowa[0]['longdis']; ?></p>
                 
                </div>
              
                <div class="kode-maintitle">
                  <h2>Irreplaceable experience now</h2>
                  <h3>Leave <span class="thcolor">A Reply</span></h3>
                  <div class="kode-maindivider"><span></span></div>
                </div>

                <div id="koderespond">
                  <form id="contactform" action="contact_us.php" class="comments-form" method="post">
                    <p><i class="fa fa-users"></i> <input type="text" placeholder="Name *" name="name" id="name"></p>
                    <p><i class="fa fa-envelope"></i> <input type="text" placeholder="Email *" name="email" id="email"></p>
					<p class="kd-phone"><i class="fa fa-phone"></i> <input type="text" placeholder="Phone *" name="phone" id="phone"></p>
                    <p class="kd-textarea"><i class="fa fa-comments-o"></i> <textarea placeholder="MEssage:" id="message" name="message"></textarea></p>
					
					
						 <div style="color:#FF9933; font-weight:bold" class="success" id="formMessages"></div>
					
				
                    
                    <p class="kd-button"> <input type="submit" value="Submit Now"></p>
                  <div id="contact_form_responce" class="hidden-me"><p></p></div></form>
                </div>
<a name="reply"></a>
               

              </div>

              <div class="col-md-3">
                
                <div class="kode-ev-detail">
                  <div class="short-info">
                    <ul>
                      <li>
                        <i class="fa fa-clock-o"></i>
                        <span>Timing:</span>
                        <p><?Php echo  $rowa[0]['starttime']; ?> to <?Php echo  $rowa[0]['endtime']; ?></p>
                      </li>
                      <li>
                        <i class="fa fa-map-marker"></i>
                        <span>Address:</span>
                        <p><?Php echo  $rowa[0]['address']; ?></p>
                      </li>
                      <li>
                        <i class="fa fa-calendar-o"></i>
                        <span>Event Type:</span>
                        <p><?Php echo  $rowa[0]['eventtype']; ?></p>
                      </li>
                      <li>
                        <i class="fa fa-users"></i>
                        <span>Audience</span>
                        <p><?Php echo  $rowa[0]['audience_type']; ?></p>
                      </li>
                      <li>
                        <i class="fa fa-phone"></i>
                        <span>Phone Number:</span>
                        <p><?Php echo  $rowa[0]['phnno']; ?></p>
                      </li>
                      <li>
                        <i class="fa fa-envelope-o"></i>
                        <span>Email:</span>
                        <p><?Php echo  $rowa[0]['email']; ?></p>
                      </li>
                    </ul>
                  </div>
                  <div class="kode-ev-btn">
                   
                    <a href="<?php echo  $_SESSION['donate']; ?>" class="thbg-colorhover">Donate Now</a>
                  </div>
                </div>
                <!-- <div class="kode-evthumb">
                  <img src="extra-images/event-detail2.jpg" alt="">
                  <h2>Jacika roma</h2>
                  <span>Project Manager</span>
                </div> -->
           <!--     <div class="kode-team kode-team-classic">
                  <ul class="row">
                    <li class="col-md-12">
                      <div class="team-inner">
                        <figure><a href="#"><img alt="" src="extra-images/teamgrid-1.jpg"></a>
                        </figure>
                        <div class="kode-teaminfo">
                          <h4><a href="#">Jacika roma</a></h4>
                          <span>CEO / Founder</span>
                          <div class="team-network">
                            <ul>
                              <li><a class="fa fa-facebook" href="#"></a></li>
                              <li><a class="fa fa-twitter" href="#"></a></li>
                              <li><a class="fa fa-google-plus" href="#"></a></li>
                              <li><a class="fa fa-linkedin" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>-->

              </div>
              
            </div>
          </div><?php
}
else
{
$rowa =  runquery("SELECT","*","events"," ORDER BY `startdate` ASC","");
if(isset($rowa) && count($rowa) >0)
{
?><div class="col-md-12">
                <div class="kode-event-list">
<?php
foreach($rowa as $dows)
{
?>
                  <article class="event-table">
                    <div class="event-table-row">
                      <div class="event-cell short-info">
                        <h2><?php echo $dows['startdate'] ?></h2>
                        <ul>
                          <li>
                            <i class="fa fa-clock-o"></i>
                            <span>Timing:</span>
                            <p><?php echo $dows['starttime'] ?> to <?php echo $dows['endtime'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address:</span>
                            <p><?php echo $dows['address'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-calendar-o"></i>
                            <span>Event Type:</span>
                            <p><?php echo $dows['eventtype'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-users"></i>
                            <span>Audience</span>
                            <p><?php echo $dows['audience_type'] ?></p>
                          </li>
                        </ul>
                      </div>
                      <div class="event-cell in-detail">
                        <h2><?php echo $dows['title'] ?></h2>
                        <div class="kode-innsec">
                          <p><?php echo $dows['short_dis'] ?> </p>
                          
                          <div class="clearfix"></div>
                          <a href="index.php?mid=<?php echo $_GET['mid']; ?>&en=<?php echo $dows['id']; ?>" class="event-morebtn thbg-colorhover">Read More</a>
                        </div>
                      </div>
                    </div>
                  </article>
                  

                </div>
                <?php
				
				}
}
?><!--<div class="pagination">
                  <a href="#">Previous</a>
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <span>3</span>
                  <a href="#">4</a>
                  <a href="#">Next</a>-->
                </div>
              </div><?php
			  }
}

/*if($_GET['mid']=='18' || $roqs[0]['title']=='Gallery' || $_GET['mid']=='gallery')
	{
		
		$roqs=runquery("SELECT","*","imagegallary",""," where `gis` >'0'");
		//echo "<pre>"; print_r($roqs);
		
		if(isset($roqs) && count($roqs) >0)
		{
		?><header class="" style="height:0px;" >
		  <nav id="sticktop" class="navbar navbar-default" style="display:none">
			<div class="container">
			  
			  <div class="navbar-collapse collapse">
			   <ul class="nav navbar-nav">
				  
				  <li class="dropdown active">          </li>
				</ul>
			  </div>
			 
			</div>
		  </nav>
		</header>
		<div style="background:#FFFFFF">
		<section id="portfolio">
			
		
		  <ul class="project-filter" >
		  <?php $rows=runquery("SELECT","*","tags","","");
		  foreach($rows as $my)
		  {
		  
		   ?>
			<li class="filter"  data-filter="<?php echo $my['tagname'] ?>"><?php echo str_replace("_"," ",$my['tagname']); ?></li>
			 <?php } ?>
		  </ul>
		  <ul id="Grid" class="project-wrapper projects">
		  <?php foreach($roqs as $ro)
		  { 
		  $ex=explode(",",$ro['tagid']);
		  foreach($ex as $v=>$k)
		  {
		   $rowsname=runquery("SELECT","*","tags",""," where tagid='".$k."'");
		  ?>
			<a href="images/<?php echo $ro['image_name']; ?>" data-smoothzoom="group1"><li class="project ajax-project <?php echo $rowsname[0]['tagname'] ?>"> <img src="images/<?php echo $ro['image_name']; ?>" alt="">
			  <div class="hover">
				<h6><?php echo $ro['title']; ?></h6>
				<p><?php echo $ro['subtitle']; ?></p>
				 </div>
			</li></a>
			<!--work-->
		   <?php } } ?> 
		 
			<!--work--> 
		  </ul>
		  <div class="clearfix"></div>
		<!--  <div class="load-more"> <a href="#">load more</a> </div>-->
		</section></div><?php }
		
		
	}*/
  }
?>
