<?php 
if( isset( $_POST['hid'] ) && $_POST['hid'] != "") {
update();
header('location:'.$_SERVER['DOCUMENT_ROOT'].'/donation/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
}
else {
if( isset( $_GET['del'] ) && $_GET['del'] != "") {
delete();
header('location:'.$_SERVER['DOCUMENT_ROOT'].'/donation/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
}
else {
add();
header('location:'.$_SERVER['DOCUMENT_ROOT'].'/donation/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
}
}
?>