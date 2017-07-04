<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>usersetting</title>
</head>
<body>
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
<section class="content">      
        
        
    <div class="row">
            <!-- left column -->
      
        
            <!-- right column -->
            <div class="col-md-12">
              <!-- general Table -->
             <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Menus</h3>
				  <br/>
				   </div>
<div class="box-body">

<?php
if( isset($_GET['up']) && $_GET['up']!="") {
$rowa = runquery("SELECT","*","usergroup","","where id = ".$_GET['up']."");

}
?>
<fieldset>
	<legend>
		Group
	</legend>
	<form action="index.php?f=user&t=ugb&act=act" method="post">
		 <table id="example2" class="table table-bordered table-hover">
			<tr>
				<td>
					User Group 
				</td>
				
				<td>
					<input type = "text" name = "groupname" id = "groupname" value="<?php if( isset($_GET['up']) && $_GET['up']!="") { echo $rowa['0']['group_name'];} ?>"/>
				</td>
			
			</tr>
			
			<tr>
				<td>
					permision 
				</td>
				<td>
					<input type = "text" name = "groupper" id = "groupper" value="<?php if( isset($_GET['up']) && $_GET['up']!="") { echo $rowa['0']['group_per'];} ?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type = "hidden" name = "hid" id = "hid" value="<?php if( isset($_GET['up']) && $_GET['up']!="") { echo $_GET['up'];}?>"/>
				</td>
			</tr>
			
			<tr>
				<td>
					<input type = "submit" name="subt" id = "subt" value="<?php if( isset($_GET['up']) && $_GET['up']!="") { echo "update";} else { echo "Add";} ?>"/>
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->
</body>
</html>
