 <section class="kode-pagesection parallex-bg" style=" padding-top: 50px; padding-bottom: 40px; background: url(extra-images/couses-fullbg.jpg); ">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                
              </div>
              <div class="col-md-12 kode-causes-list kode-causes-box">
                <ul class="row">
				<?php $rowp = pagecontent2();
				       foreach( $rowp as $row ) {
					        if( $row['hpis'] == 1)  {
							?>
						<li class="col-md-4" >
                    <figure><a href="admin/uploadimages/<?php echo $row['image_name']; ?>" data-smoothzoom="group1" class="kode-causes-thumb"><img src="admin/uploadimages/<?php echo $row['image_name']; ?>" alt=""></a>
                      <figcaption>
                        <div class="kode-causes-info">
                            <div class="custom-skills">
                              <div class="progress"> <div aria-valuenow="39" class="progress-bar" role="progressbar" data-transitiongoal="45" style="background-color: rgb(255, 255, 255); width: 45%;">39%</div> </div>
                            </div>
                          </div>
                        <div class="cause-inner-caption">
                          <h2><a href="#"><?php echo $row['title']; ?></a></h2>
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
          
        </section>
        
        