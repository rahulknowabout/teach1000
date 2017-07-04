<?php
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/con_db.php');
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/functiondb.php');
//echo "<pre>";
//print_r($_POST);
$rowaf = runquery("SELECT","COLUMN_NAME","INFORMATION_SCHEMA.COLUMNS","","WHERE TABLE_SCHEMA = 'urban' AND TABLE_NAME = 'users1'");
foreach( $rowaf as $row) {
	if( $row['COLUMN_NAME'] == "id" ) {
	
	}
	else {
$rowc[$row['COLUMN_NAME']] = "'".$_POST[$row['COLUMN_NAME']]."'";
    } 
}
//echo "<pre>";
//print_r($rowc);
runquery("INSERT","","users1",$rowc);
?>
