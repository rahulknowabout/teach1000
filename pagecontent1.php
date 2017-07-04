 <section class="kode-pagesection" style=" padding-top: 50px; padding-bottom: 40px; background-color:#FFFFFF ;">
          <div class="container">
            <div class="row">
			
			<table style = "border:hidden">
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=47"> Ashanti </a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
						<a href = "index.php?aid=48">	Brong-Ahafo </a>
						</td>
					</tr>
					<tr style = "border:hidden" >
						<td>
							<a href = "index.php?aid=49">Greater Accra</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=50">Central</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=51"> Eastern</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=52"> Northern</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
								<a href = "index.php?aid=53">Western</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
								<a href = "index.php?aid=54">Upper East</a>
						</td>
					</tr>
					
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=55">Upper West</a>
						</td>
					</tr>
					<tr style = "border:hidden">
						<td>
							<a href = "index.php?aid=56">Volta</a>
						</td>
					</tr>
					
				</table>
	
  <?php foreach( $rowasd as $row ) {
//print_r($rowasd);
			               if( $row['position'] == "homepage0") {
	                              ?>
								  
								  
							
              <div class="col-md-12">
                <div class="kode-maintitle">
                  <h2><?php echo $row['subtitle']; ?></h2>
				  <?php $str = $row['title']; 
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
				              echo $row['s_des'];
				 
				 
				 	  
		           }	 
			    } ?>
				
				
                </div>
              </div>
              <div class="col-md-12 kode-services with-circle">
                <ul class="row">
                <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block1") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-donation1"></i></span>
                      <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } }?>
                  <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block2") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-hand-1"></i></span>
                     <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } } ?>
                  <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block3") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-group44"></i></span>
                     <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } } ?>
				  </ul>
				  <ul class = "row">
                
                <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block4") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-donation1"></i></span>
                      <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } }?>
                  <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block5") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-hand-1"></i></span>
                     <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } } ?>
                  <?php foreach( $rowasd as $row ) {  if( $row['position'] == "homepage0_block6") {  ?>
                  <li class="col-md-4">
                    <div class="services-wrap">
                      <span class="kode-service-icon"><i class="flaticon-group44"></i></span>
                     <h4><?php echo $row['title']; ?></h4>
                      <p><?php echo $row['s_des']; ?></p>
                      <a href="index.php?aid=<?php echo $row['id']; ?>">Discover More</a>
                    </div>
                  </li> <?php } } ?>
               </ul>
				
              </div>
              
            </div>
          </div>
        </section>