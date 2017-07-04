<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>usersetting</title>
</head>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/con_db.php');
include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/functiondb.php');
$rowa = runquery("SELECT","*","addusertype"); ?>
 <table border="1">
<th>Field_Name</th><th>Field_Type</th><th>Status</th><th>Delete</th>
<?php
 foreach( $rowa as $row) {
 ?> <tr>
 		<td>
		 <a href = "ufb.php?uid=<?php echo  $row['id']; ?>"><?php echo  $row['field_name'];?></a>
		</td>
		<td>
			<?php echo  $row['field_type'];    ?>
		</td>
		<td>
		<a href = "usb.php?ida=<?php echo $row['id'];?>"><?php if( $row['status'] == "1" ) { echo "UnBlock";} else { echo "Block"; } ?></a>
		</td>
		<td>
		  <a href = "usb.php?del=<?php echo  $row['id']; ?>">Delete</a>
		</td>
    </tr>
<?php
 }
 
?>
<tr>
	<td>
		<a href = "ufb.php">Add Field</a>
	</td>
</tr>
</table>
<?php /* include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/con_db.php');
       include($_SERVER['DOCUMENT_ROOT'].'/donation/admin/models/functiondb.php');
	   $rowa = runquery("SELECT","*","usersetting");           
?>
<fieldset>
	<legend>
		inputtype
	</legend>
	<form action="usb.php" method="post">
		<table>
			<tr>
				<td>
					user_name
				</td>
				
				<td>
					<select name="type_name_u">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
			    <td>
				<input type = "checkbox" name="username_check" value="true"/>
				</td>
			</tr>
			
			<tr>
				<td>
					user_email
				</td>
				<td>
					<select name="type_name_e">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="useremail_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_mobile
				</td>
				<td>
					<select name="type_name_m">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="usermobile_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_password
				</td>
				<td>
					<select name="type_name_p">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="userpassword_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_confirm_password
				</td>
				<td>
					<select name="type_name_cp">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="use_cpassword_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_city
				</td>
				<td>
					<select name="type_name_city">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="usercity_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_state
				</td>
				<td>
					<select name="type_name_state">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="userstate_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_country
				</td>
				<td>
					<select name="type_name_country">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="usercountry_check" value="true"/>
				</td>
			</tr>
			<tr>
				<td>
					user_pin
				</td>
				<td>
					<select name="type_name_pin">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="userpin_check" value="true"/>
				</td>
				
			</tr>
			<tr>
				<td>
					user_photo
				</td>
				<td>
					<select name="type_name_photo">
					<?php   foreach( $rowa as $row) {    ?>
					<option value="<?php echo $row['input_type'];?>"><?php echo $row['input_type'];?></option>
					<?php   } ?>
					</select>
				</td>
				<td>
				<input type = "checkbox" name="userphoto_check" value="true"/>
				</td>
			</tr>
			
			<tr>
				<td>
					<input type = "submit" name="subt" id = "subt" value="Add" />
				</td>
			</tr>
		</table>
	</form>
</fieldset><?php echo "hello"; */?>
</body>
</html>
