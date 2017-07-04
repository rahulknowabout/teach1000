<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Article Category</title>
</head>
<body>
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Artical Category 
            <small>Control panel</small>
          </h1>
         </section>
       <section class="content">      
        
        
    <div class="row">
            <!-- left column -->
     
              <!-- general form elements -->
        <div class="box box-primary">
         <form action="#" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name = "atr_cat" value="" placeholder="Article_Category"/>
                    </div>
                    <div class="form-group">
                    	<input type = "text" class = "form-control" name="atr_cat_alias" value="" placeholder="Alias"/>
                    </div>
                   
                  
                    <input class="btn bg-olive margin" type="submit" value="Update Artical" name="update_arti" />
                  </form>
                  
                  </div>
                  
                   <div class="col-md-12">
              <!-- general Table -->
             <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Content's</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
                  <table id="example2" width="100%" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Content Id</th>
                        <th>Content Title</th>
                        <th>Menu</th>
                        
                        <th>Create Date</th>
                        <th>Published</th>
                        
                        
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php //showcontent();  ?>
                     
                                 
                    </tbody>
                   
                  </table>
                
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
                  </div>
                  </div>
                      <?php //include("footer.php")  ?>
</body>
</html>
