 <!--// Main Banner //-->
      <div id="mainbanner">
        <div class="flexslider">
          
        <div style="overflow: hidden; position: relative;" class="flex-viewport"><ul style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-4047px, 0px, 0px);" class="slides">
       <?php   $rowab = runquery("SELECT" ,"*","banner"); 
	              if( count( $rowab) > 0 ) {
				     foreach( $rowab as $row ) {
					 ?>
					 
			<li class="flex-active-slide" style="width: 1349px; float: left; display: block;">
              <img draggable="false" src="admin/banner/<?php echo $row['banner_path']; ?>" alt="" style = "height:731;width:1600;">
              <div class="container-2">
                <div class="kode-caption">
				<?php $str = $row['title']; 
				      $split = explode(" ", $str);
					  if( count( $split ) >= 1 ) { 
					  	$end	= end(explode(" ",$str));
					  ?>
					      
					    <h1><?php echo str_replace( $end, "", $str ); ?> <strong class="thcolor"><?php echo $end; ?></strong></h1>
					  <?php
					  }else
					  {
					  	?>
							 <h1><?php echo $str; ?></h1>
						<?php
					  }
					  ?>
				 
                
                  <span class="thbg-color"><?php echo $row['subtitle']; ?></span>
                </div>
              </div>
            </li>
			<?php 
					 }
				  
				  }
	   
	   
	   ?>
	   		
            
            
            
            
            
            
            
            
          
            
            
            
           
            
            
       
        
           
            
            </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="flex-active">3</a></li><li><a class="">4</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
      </div>
  
     
     
     
   








