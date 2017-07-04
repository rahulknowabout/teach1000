<?php 
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/con_db.php');
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/functiondb.php');
function add() { 
$total = runquery("SELECT","*","addusertype","","where field_name = '".$_POST['fieldname']."'","num_rows");
if( $total > 0) {
}
else {
	$sva = array("field_name" => "'".$_POST['fieldname']."'","field_type" => "'".$_POST['fieldtype']."'","status"=>"'".$_POST['hid']."'");
	runquery("INSERT","","addusertype",$sva);
}
}
function addf() {
$rowaf = runquery("SELECT","COLUMN_NAME","INFORMATION_SCHEMA.COLUMNS","","WHERE TABLE_SCHEMA = 'urban' AND TABLE_NAME = 'users1'");
//echo "<pre>";
//print_r($rowaf);
//$rows = "";
foreach( $rowaf as $row) {
     if( $row['COLUMN_NAME'] == "id") {
	 
	 }
	 else {
	 runquery("ALTER","","users1","","DROP ".$row['COLUMN_NAME']);
	//$qer = "ALTER TABLE users1 DROP ".$row['COLUMN_NAME'];
	//echo $qer;
	//mysql_query($qer);
	}
	//if( $row['COLUMNA_NME'] == $_POST['fieldname'] ) {
		//$a = 1;
	//}

}
$rowad = runquery("SELECT","field_name,status","addusertype");
foreach( $rowad as $rowd) {
	if( $rowd['status'] == 1) {
	 runquery("ALTER","","users1",""," ADD ".$rowd['field_name'] ." varchar(200)");
	}
    else {
	
	}	
}


}



function block() {
$rowa = runquery("SELECT","*","addusertype","","where id = ".$_GET['ida']."");

	if( $rowa[0]['status'] == 1) {
		$sva = array("status" => "0");
		runquery("UPDATE","","addusertype",$sva,"where id = ".$_GET['ida']."");
		addf();
	}
	else {
		$sva = array("status" => "1");
		runquery("UPDATE","","addusertype",$sva,"where id = ".$_GET['ida']."");
		addf();
	}
}

function update() {
$sva = array("field_name" => "'".$_POST['fieldname']."'","field_type" => "'".$_POST['fieldtype']."'");
runquery("UPDATE","","addusertype",$sva,"where id = ".$_POST['hidi']."");
}
function delete() {
runquery("DELETE","","addusertype","","where id = ".$_GET['del']."");
}
?>