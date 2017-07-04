<?php
//include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/con_db.php'); 
//include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/functiondb.php');  
//include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/controller/functions.php'); 
 ?>	
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Atrical Category Mangement
            <small>Control panel</small>
          </h1>
          
        </section>
        
       <!-- Main content -->  
   <section class="content">      
        
        
    <div class="row">
            <!-- left column -->
      
        
            <!-- right column -->
            <div class="col-md-12">
              <!-- general Table -->
             <div class="box">
                <div class="box-header">
				
                  <h3 class="box-title">Menus</h3>
				  <a href = "index.php?f=content&t=artical_cat" style="float:right">Add Category</a>
				  <br/>
			
				 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                   
                      <tr>
                        <th>#</th>
                        
                         <th>Aritcal Category</th>
                         <th>View/Edit</th>
						 <th>Delete</th>
                        
                        
                      </tr>
                    
                    <tbody>
                    <?php cat_list(); ?>
                     
                                 
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
					  
                       <th>Aritcal Category</th>
                       
                       
                        
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
     </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->