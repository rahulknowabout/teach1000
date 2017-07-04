<?php 
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/con_db.php');
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/functiondb.php');
function adduser() {
	$rowa = runquery("SELECT","*","addusertype","","where status = 1");
foreach($rowa as $row) {
	$str1 = $str1."<tr> <td> ".$row['field_name']." </td> <td><input type='".$row['field_type']."' name='".$row['field_name']."'/></td> </tr>";
}
return $str1."";
}
?>