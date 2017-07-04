<?php  function add() { 
$total = runquery("SELECT","*","usergroup","","where group_name = '".$_POST['groupname']."'","num_rows");
if( $total > 0) {
}
else {
	$sva = array("group_name" => "'".$_POST['groupname']."'","group_per" => "'".$_POST['groupper']."'");
	runquery("INSERT","","usergroup",$sva);
}
}
function update() {
	$sva = array("group_name" => "'".$_POST['groupname']."'","group_per" => "'".$_POST['groupper']."'");
	runquery("UPDATE","","usergroup",$sva,"where id = ".$_POST['hid']."");
}
function delete() {
	runquery("DELETE","","usergroup","","where id = ".$_GET['del']."");   
}


if( isset( $_POST['hid'] ) && $_POST['hid'] != "") {
update();
//ob_start();
header('location:/teach1000/admin/index.php?f=user&t=usergroup');
}
else {
if( isset( $_GET['del'] ) && $_GET['del'] != "") {
delete();
header('location:/teach1000/admin/index.php?f=user&t=usergroup');
}
else {
add();
header('location:/teach1000/admin/index.php?f=user&t=usergroup');
}
}
?>
