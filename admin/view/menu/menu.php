<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<script>
function articalm(str)
{
//alert(str);
 if (str == "") {
	                    
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					//alert(str);
				//document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
             document.getElementById("atr").innerHTML = xmlhttp.responseText;
            }else
			{
			
			}
        }
        xmlhttp.open("GET","index.php?f=ajax&t=ajaxmenu&ajax=yes&artc="+str,true);
        xmlhttp.send();
    }
	
}
</script>
<script>
function checkall()
{
     //alert("hhhhh");
     var alla = document.getElementById("all");
	// alert(alla.checked);
	 checkboxes = document.getElementsByName('artical[]');
	 if( alla.checked == true) {
	 	for (var i = 0; i < checkboxes.length; i++) {
              checkboxes[i].checked = true;
	    }
      }
	  else{
	 	for (var i = 0; i < checkboxes.length; i++) {
              checkboxes[i].checked = false;
	    }
      }
}		  
</script>
<?php $rowc = getartical_cat();
       if( isset( $_GET['edit'] ) ) {
       $rowm = get_menud($_GET['edit']); 
	   } 
	   $rowam = get_menuad();
	   
	   ?>
<div class="">

	<div class="page-title">
		<div class="title_left">
			<h3> Menu Add</h3>
		</div>
	</div>
	
				<div class="x_content">
					<br />
					<form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="index.php?f=menu&t=menuac&act=act" enctype="multipart/form-data">

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Menu Label</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   <?php if(isset($_GET['edit'])) { ?>
                    <input type="hidden" class="form-control" placeholder="Enter ..." name="id" value="<?php  if( isset( $_GET['edit'] ) ) {echo $rowm['0']['id']; } ?>" required/>
                    <?php } ?>
                       <input type="text" class="form-control" placeholder="Enter ..." name="menu_name" value="<?php  if( isset( $_GET['edit'] ) ) {echo $rowm['0']['title']; }?>"  required/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent Menu</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<select class="form-control" name="par_mem" id="par_mem">
									<option value="0">Please Chosse Parent Menu</option>
										<?php foreach( $rowam as $row) { ?>
                        <option  <?php if( isset($_GET['edit']) ) { if( $rowm['0']['parent_id'] == $row['id'] ) { echo "selected='selected'"; } } ?> value="<?php echo $row['id']; ?>"> <?php if( isset($_GET['edit']) ) { if( $rowm['0']['title'] == $row['title']) {} else { echo $row['title']; } } else { echo $row['title'];} ?> </option>
                       <?php  } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Artical Category <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <select  class="form-control" name="atr_cat" id="atr_cat" onchange="articalm(this.value)">
					   
					     <option  <?php if( isset($_GET['edit']) ) { if( $rowm['0']['cat_id'] == $row['id'] ) { echo "selected='selected'"; } } ?> value="0">UN-Categorized </option>
					  	<?php foreach( $rowc as $row) { ?>
                        <option  <?php if( isset($_GET['edit']) ) { if( $rowm['0']['cat_id'] == $row['id'] ) { echo "selected='selected'"; } } ?> value="<?php  echo $row['id']; ?>"><?php  echo $row['atr_cat'];  ?></option>
                       <?php  } ?>
                        
                        
                      </select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Articals <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<table id = "atr">
						           <?php  if( isset($_GET['edit']) ) {
								   				
								            if(  $rowm['0']['art_id'] != "" ) { 
								               $rowam = runquery("SELECT","*","artical","","where id in ( ".$rowm['0']['art_id']." )");
											   
								   ?>
								    <tr>
										<th><input type = "checkbox"  name="all" id="all"  onclick="checkall()" checked = "checked"/></th><th>Select All</th>
									</tr>
									<?php
													if( count($rowam) > 0 ) {
		 												foreach( $rowam as $row) { 
		 														if( $row['status'] == 1) { ?>
									<tr>
										<td>
            								<input type = "checkbox"   name="artical[]" id="artical" value="	<?php echo $row['id']; ?>" checked = "checked" /> 
			                             </td>
			                            <td>
				                           <?php echo "".$row['title']."(".$row['alias'].")"; ?>
			                           </td>
                                 </tr>
								   <?php
								                             } 
														 }
													 }
											}
										} 		 	 	 ?>
						        </table>
							</div>
						</div>
						
								
						
							<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Location
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<select  class="form-control" name="m_location" id="m_location">
                        <option  <?php echo ( isset($_GET['edit']) && $rowm['0']['location'] == "1" ) ? 'selected="selected"' : ''  ?> value="1">Header Menu</option>
                        <option <?php echo ( isset($_GET['edit']) && $rowm['0']['location'] == "2" ) ? 'selected="selected"' : ''  ?>  value="2">Bottom Menu</option>
                        
                        
                      </select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="reset" class="btn btn-primary">Reset</button>
								<button type="submit" class="btn btn-success xcxc">Submit</button>
							</div>
						</div>
					</form>
				</div>
			<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Menu Listing</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?f=menu&t=menu">Add Menu</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- start project list -->
					<table id="example" class="table table-striped responsive-utilities jambo_table">
						<thead>
							<tr class="headings">
								<th style="width: 1%">#</th>
								<th>MenuLabel</th>
								<th>Location</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php show_menud(); ?>
						</tbody>
					</table>
					<!-- end project list -->

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