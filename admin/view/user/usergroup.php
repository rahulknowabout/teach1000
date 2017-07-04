<?php
//include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/con_db.php');
//include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/functiondb.php');
if( isset($_REQUEST['search']) && $_REQUEST['search'] != "" ) { 
	$where = "where group_name like '%".$_REQUEST['search']."%' or group_per like '%".$_REQUEST['search']."%'";
	//echo $where;
	}
	
else {
       $where = "";
}	
$rowa = runquery("SELECT","*","usergroup","",$where); ?>
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
                  <div class="form-group">
			 <form action="" method="post">
						
						<input type="text" name="search" id="search" value="<?php if( isset($_REQUEST['search']) && $_REQUEST['search'] != "" ){echo                         $_REQUEST['search']; } ?>" style="line-height:30px; width:160px;"/>                       
						
						<input type="submit" name="subb" id="subb" value="search" style="line-height:30px; width:100px;"/>
				  </form>
				 </div>
				   </div>
<div class="box-body">
  <table id="example2" class="table table-bordered table-hover">
<tr><th>#</th><th>User_Group_Name</th><th>User_Group_Permission</th><th>Delete</th></tr>
<?php
$count = 1;
if( count( $rowa ) > 0 ) { 
 foreach( $rowa as $row) {
 ?> <tr>
 		<td>
			<?php echo $count; ?>
		</td>
 		<td>
		 <a href = "index.php?up=<?php echo  $row['id']; ?>&f=user&t=usergroupadd"><?php echo  $row['group_name'];?></a>
		</td>
		<td>
			<?php echo  $row['group_per'];    ?>
		</td>
		<td>
		  <a href = "index.php?del=<?php echo  $row['id']; ?>&f=user&t=ugb&act=act">Delete</a>
		</td>
    </tr>
<?php
	$count++;
 }
} 
?>
<tr>
	<td>
		<a href = "index.php?f=user&t=usergroupadd">Add usergroup</a>
	</td>
</tr>
</table>
</div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->