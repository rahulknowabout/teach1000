<section class="kode-pagesection" style="padding-bottom: 0px; background: #efefef; ">
          <div class="container-fluid">
            <div class="row">

              <div class="col-md-12">
                
                <div class="kode-gallery kode-gutter-gallery">
                  <ul class="row">
				  <?php $rowp = pagecontent2();
				           foreach( $rowp as $row ) {
						        if( $row['hpis1'] == 1 ) {
								?>
								 <li class="col-md-3">
                      <figure>
                        <a href="admin/uploadimages/<?php echo $row['image_name']; ?>" data-smoothzoom="group1"  class="gallery-thumb"><img  style="width:401; height:321px;" src="admin/uploadimages/<?php echo $row['image_name']; ?> " alt=""></a>
                        <figcaption>
                          <div class="gallery-link">
                            <!--<a href="images/<?php //echo $row['image_name']; ?>" data-smoothzoom="group2">
                            <i class="fa fa-search"></i>
                            </a>--> <a href="index.php?mid=18"><i class="fa fa-link"></i></a>
                          </div>
                          <div class="gallery-info">
                            <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                            <span><?php echo $row['subtitle']; ?></span>
                          </div>
                        </figcaption>
                      </figure>
                    </li>
                  
								
								<?php 
								}
						   
						   }
				  
				  
				   ?>
                    
                         
                    
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        