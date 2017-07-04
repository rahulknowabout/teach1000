<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<?php
if( isset( $_GET['uid'] ) && isset($_GET['edi']) ) { 
		  $whe = "WHERE user_id = ".$_GET['uid']."";
		 $row = runquery('SELECT','*','users','',$whe);   }         
?>
<div class="">

	<div class="page-title">
		<div class="title_left">
			<h3>User Form</h3>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
			  <?php
                   if( isset( $_GET['uid'] ) && isset($_GET['edi']) ) {
			  ?>
					<h2>Edit<small>User</small></h2>	 
				<?php		  
                    }else {  
				?>
				<h2>Add<small>User</small></h2>
				<?php	
					
					}
               ?>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="index.php?f=user&t=users&edi=edi&act=act" enctype="multipart/form-data">
					<div class="form-group">
							<label>Email <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="email" name = "u_email" value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){  } ?>"  required="required" placeholder="user email" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label>Password <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="password" name = "u_password"  value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){   } ?>"  required="required" placeholder="user password" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>Confirm Password<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="password" name = "u_c_password" value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ } ?>"  required="required" placeholder="confirm password" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>First Name<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name = "u_f_name"  value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ } ?>"  required="required" placeholder="user first name" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>Last Name<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name = "u_l_name"  value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){}?> "  required="required" placeholder="user last name" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>Contact Number<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="number" name = "u_c_no"  value="<?php   if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ } ?>"  required="required" placeholder="contact number" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<h2>Profile Information</h2>
						
						<div class="form-group">
							<label>Profile Photo</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name = "inputimage" id="inputimage" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>Profile Name<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name = "u_p_name" id="u_p_name" value="<?php  if( isset( $_GET['uid'])  && isset($_GET['edi'])){   }?>" placeholder="user pfofile name" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>Postcode<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name = "u_postcode" id="u_postcode" value="" placeholder="user postcode" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label>City<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name = "city" id="city" value="" placeholder="user city" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
		<input type = "hidden" name = "uid" id = "uid" value="<?php if( isset( $_GET['uid']) && isset($_GET['edi']) ){ echo $_REQUEST['uid']; } ?>"/>
        <input type = "hidden" name="aid" id = "aid" value="add"/> 
						
					<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="reset" class="btn btn-primary">Reset</button>
								<button type="submit" class="btn btn-success xcxc">Submit</button>
							</div>
				  </div>
						
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$buildurl = buildurl("admin/browse.php");
?>
<script>
CKEDITOR.replace( 'content', {
    filebrowserBrowseUrl: './browser/browse.php',
    filebrowserUploadUrl: './index.php?onlyupload=y'
});
var editor = CKEDITOR.replace( 'editor1' );
CKFinder.setupCKEditor( editor, '/images/' );
</script>