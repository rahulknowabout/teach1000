<?php include("header.php");  
if( isset( $_SESSION['mess'] ) ) {
        echo $_SESSION['mess'];
		unset($_SESSION['mess']);
}

 ?>
          
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Mangement
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
          </ol>
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
				  <span style="float:right;">
				  <a href = "manageuser.php" class="btn bg-navy margin">Adduser</a>
				  </span>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                   
                      <tr>
                        <th>#</th>
                        <th></th>
                         <th>User Email</th>
                        <th>Profile Name</th>
                        <th>Suburb</th>
                        <th>State</th>
                        
                        <th></th>
                      </tr>
                    
                    <tbody>
                    <?php show_users(); ?>
                     
                                 
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
					   <th></th>
                       <th>User Email</th>
                        <th>Profile Name</th>
                        <th>Suburb</th>
                        <th>State</th>
                       
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->
    
    <?php include("footer.php")  ?>