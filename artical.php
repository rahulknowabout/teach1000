
<?php

if(isset($_GET['aid']) && $_GET['aid']>0 )
{
$artiinfo=runquery("SELECT","*","artical",""," where id='".$_GET['aid']."'");
?>
<div class="kode-subheader subheader-height" style="background:#000000">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><?php echo $artiinfo[0]['title']; ?></h1>
            </div>
            
          </div>
        </div>
      </div>
<div class="clearfix"></div>
 <section class="kode-pagesection" style=" padding-top: 50px; padding-bottom: 40px; background-color:#FFFFFF ;">
         
                <div class="kode-event-list">

                  <article class="event-table">
                    <div class="event-table-row">
                      <?php include('left.php'); ?>
                      <div class="event-cell in-detail">
                      <div class="col-md-12">
                <div class="kode-maintitle">
                  
				  <?php $str = $artiinfo[0]['title']; 
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
                 <p><?php if(strpos($artiinfo[0]['text_atr'],"./images"))
				 {
				 $artiinfo[0]['text_atr']=str_replace("./images","admin/images",$artiinfo[0]['text_atr']);
				 
				 }
				              echo $artiinfo[0]['text_atr'];
				 
				 
				  ?></p>
				
                </div>
              </div>
                        
                      </div>
                    </div>
                  </article>
                  

                </div>
               <!--<div class="pagination">
                  <a href="#">Previous</a>
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <span>3</span>
                  <a href="#">4</a>
                  <a href="#">Next</a>-->
              
        </section><?php

}
?>
