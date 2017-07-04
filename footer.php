
      <footer id="footer-widget" style=" background:#000 !important;">
        <div class="container">
          <div class="row">
            <!--// TextWidget //-->
            <div class="col-md-3 widget widget-text">
              <div class="inner-element">
              <div class="kode-widget-title">  <h2 >ABOUT CHARITY </h2> </div>
              
               <?php foreach( $rowasd as $row ) {
			  // print_r($)
			               if( $row['position'] == "homepage8") {
	                               echo '<p style="color:#FFFFFF"><img alt="" src="images/por.png">'.$row['s_des'];
		                     }	 
			   
			   
			   } ?>
                
                <ul>
                  <li><i class="fa fa-phone"></i> <span><?php echo $_SESSION['regular']['phnno'] ?></span></li>
                  <li><i class="fa fa-fax"></i> <span><?php echo $_SESSION['regular']['fax'] ?></span></li>
                  <li><i class="fa fa-phone"></i> <a href="#"><?php echo $_SESSION['regular']['emailid'] ?></a></li>
                  
                </ul>
              </div>
            </div>
            <!--// TextWidget //-->

            <div class="col-md-9">
              
              <div class="widget-section">
                <!--// Widget RecentPost //-->
                <div class="col-md-4 widget widget-recentpost">
                  <div class="kode-widget-title"> <h2>TWITTER</h2> </div>
                  <div class="sp-tweet">
                                    <div class="sp-tweet-item sp-tweet-odd sp-tweet-first">
                                       <div class="date"><a style="color:#CC6633" href="#" target="_blank">About&nbsp;2 months&nbsp;ago</a></div>
                                       <br><p> lorel ipsum  - lorel ipsum  <a href="#" class="tweet_url" target="_blank">http://t.asco/edSLYJrs5V</a></p>
                                      
                                       <div class="sp-tweet-clr"></div>
                                    </div>
                                    <hr />
                                    <div class="sp-tweet-item sp-tweet-even">
                                       <div class="date"><a  style="color:#CC6633" href="#" target="_blank">About&nbsp;2 months&nbsp;ago</a></div>
                                       <br><p> lorel ipsum | lorel ipsum  <a href="#" class="tweet_url" target="_blank">http://t.cosa/edSLYJrs5V</a></p>
                                     
                                       <div class="sp-tweet-clr"></div>
                                    </div>
                                 </div>
                  
                </div>
                <!--// Widget RecentPost //-->

                <!--// Widget Gallery //-->
                <div class="col-md-4 widget widget-gallery">
                  <div class="kode-widget-title"> <h2>Image Gallary</h2> </div>
                  <ul>
				  <?php $rowp = pagecontent2();
				          foreach( $rowp as $row ) {
						         if( $row['fis'] == 1 ) {
								 ?>
						<li style="height:80px; width:80px;"><a href="admin/uploadimages/<?php echo str_replace("widget-","",$row['image_name']);?>" data-smoothzoom="group3"><img   src="admin/uploadimages/<?php echo $row['image_name'];?>" alt=""></a></li>
					<?php 			 
								 }
						  }
				  
				  
				  
				    ?>
                    
                  
                  </ul>
                </div>
                <!--// Widget Gallery //-->

                <!--// Widget Gallery //-->
                <div class="col-md-4 widget widget_categories">
                  <div class="kode-widget-title"> <h2>NEWSLETTER</h2> </div>
                 <?php foreach( $rowasd as $row ) {
			               if( $row['position'] == "homepage9") {
	                               echo $row['s_des'];
		                     }	 
			   
			   
			   } ?>
               <div id="tradeout" style="display:none; color:#FF0000"></div>
                  <table class="acymailing_form">
                                             <tbody><tr>
                                                <td class="acyfield_email acy_requiredField" style="border:none">
                                                   <input id="email" type="text" style="width:115%" name="user[email]" class="inputbox"  >
                                                   <input id="root" type="hidden" name="root" value="<?php echo  buildurl(); ?>" />
                                                </td>
                                                <td class="acysubbuttons" style="vertical-align:bottom; border:none">
                                                   <input type="submit" style="background:#CC6633; border:1px solid #CC6633" onclick="try{ return submitacymailingform(email.value); }catch(err){alert('The form could not be submitted '+err);return false;}" name="Submit" value="Join Us" class="button subbutton btn btn-primary">
                                                </td>
                                             </tr>
                                          </tbody></table>
                  
                </div>
                <!--// Widget Gallery //-->
                
                

              </div>

            </div>
          </div>
        </div>
      </footer>

      <div class="bottom-footer thbg-color">
        <div class="container">
          <div class="row">
            <div class="col-md-12 kode-copyright"><p>© 2015 teach1000.com All Right Reserved</p></div>
            
          </div>
        </div>
      </div>

    </div>
    <!--// Wrapper //-->

    <!-- jQuery (necessary for JavaScript plugins) -->
 

 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
  
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.accordion.js"></script>
    <script src="js/jquery.circlechart.js"></script>
    <script src="js/bootstrap-progressbar.js"></script>
    <script src="js/functions.js"></script>
   
   <!--- photo zoom -->
   
  

	<script type="text/javascript" src="js/photozoom/smoothzoom.min.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <script type="text/javascript">
	 var jsp=jQuery.noConflict();
        jsp(window).load( function() {
            jsp('img').smoothZoom({
            	// Options go here
            });
			
        });
    </script>
    <script>
    	jsp('img').hover(function() {
                jsp('img').not(this).css('opacity','.6');
            }, function() {
		    jsp('img').not(this).css('opacity','1');
		});
    </script>
    </body>