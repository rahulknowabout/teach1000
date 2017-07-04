<?php $faq=runquery("SELECT","*","faq",""," WHERE status=1"); 
?>

<div class="row">	
              <div class="col-md-12">
                <div class="kd-accordion">
                  <?php foreach($faq as $node=>$value)
				  {
				  
				  ?>
				  <div class="accordion" id="section2"><?php echo $value['ques']; ?><span class="fa fa-plus"></span></div>
                      <div class="accordion-content">
                          <p><?php  echo $value['ans']?></p>
                      </div>
                   <?php
				  
				  
				  
				  } ?>
                      
                      
                      

                      
                    
                    
                  </div>
              </div>

              

            </div>