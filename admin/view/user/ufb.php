<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$rowa = runquery("SELECT","*","usersetting");
if( isset( $_GET['uid'] ) && $_GET['uid']!= "") {
$rowas = runquery("SELECT","*","addusertype","","where id = ".$_GET['uid']."");
}
?>
<fieldset>
	<legend>
		Field Name And Type
	</legend>
	<form action="usb.php" method="post">
		<table>
			<tr>
				<td>
					Field_Name
				</td>
				<td>
					<input type = "text" name="fieldname" id="fieldname" value="<?php if( isset( $_GET['uid'] ) && $_GET['uid']!= "") { echo $rowas['0']['field_name']; }?>"/>
				</td>
			</tr>
			<tr>
				<td>
				Field_type
				</td>
				  <td>
					<select name="fieldtype">
					<?php   foreach( $rowa as $row) {    
						if( $row['input_type'] == $rowas['0']['field_type']) {
					?>
					 <option value="<?php echo $row['input_type'];?>" selected="selected"><?php echo $row['input_type'];?></option>
					 <?php } else {?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   }
					
					       }
					 ?>
					</select>
					</td>
				</tr>	
				<tr>
					<td>
					 	<input type = "hidden" name="hid" id = "hid" value="1"/>
					</td>
				</tr>
				<tr>
					<td>
					 	<input type = "hidden" name="hidi" id = "hidi" value="<?php if( isset( $_GET['uid'] ) && $_GET['uid']!= "") { echo $_GET['uid']; } ?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "submit" name="sub" id = "sub" value="<?php if( isset( $_GET['uid'] ) && $_GET['uid']!= "") {echo "update"; } else { echo "Add";}?>"/>
					</td>
				</tr>
		</table>
	</form>
</fieldset>
</body>
</html>
