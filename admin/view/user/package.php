<?php include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/changeheader.php');  ?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Package Mangement
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Package</li>
          </ol>
        </section>
        
       <!-- Main content -->  
   <section class="content">      
        
        
    <div class="row">
            <!-- left column -->
      <div class="col-md-6">
              <!-- general form elements -->
        <div class="box box-primary">
                <div class="box-header">
                <?php if(isset($_GET['edit'])) { ?>
                  <h3 class="box-title">Edit Package</h3> 
                  
                  <?php } else { ?>
                  <h3 class="box-title">Add New Package</h3>
                   
                  <?php } ?>
                  <span style="float:right;"><a href="package.php" class="btn btn-primary">Add New</a></span>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Package Title</label>
                       <?php if(isset($_GET['edit'])) { ?> 
                    <input type="hidden" class="form-control" placeholder="Enter ..." name="id" value="<?php edit_package('package_id'); ?>" required/>
                    <?php } ?>
                       <input type="text" class="form-control" placeholder="Enter ..." name="package_name" value="<?php edit_package('title'); ?>"  required/>
                    </div>
                     <div class="form-group">
                      <label>Package Price</label>
                       <input type="text" class="form-control" placeholder="Enter ..." name="package_price" value="<?php edit_package('price'); ?>"  required/>
                    </div>
                  
                    
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  
                   <?php if(isset($_GET['edit'])) { ?>
                    <button type="submit" class="btn btn-primary" name="update_package">Update</button>
                    <?php } else { ?>
                  
                    <button type="submit" class="btn btn-primary" name="add_package">Submit</button>
                    <?php  }?>
                  </div>
                </form>
        </div><!-- /.box -->

        <!-- Form Element sizes --><!-- /.box -->

        <!-- /.box -->

        <!-- Input addon --><!-- /.box -->

        </div><!--/.col (left) -->
        
            <!-- right column -->
            <div class="col-md-6">
              <!-- general Table -->
             <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Packages</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     <?php show_package(); ?>
                                 
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                       
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
    
    <?php include($_SERVER['DOCUMENT_ROOT']."/donation/admin/footer.php")  ?>