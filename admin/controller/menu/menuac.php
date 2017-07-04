<?php
		//echo "<pre>";
		//print_r($_POST);
		//die();
function add() {
    	$total = runquery("SELECT","*","menu","","where title='".$_POST['menu_name']."'","num_rows");
	 if( $total > 0) {
	 }
	
	 else {
	       	if( isset( $_POST['artical'] ) ) { 
	       	 	if( count( $_POST['artical'] )>0){
	         		$aimp = implode(",",$_POST['artical']); 
			 	}
				 else {
			 		 $aimp = $_POST['artical'];
			 	}
			 }
			 
			$sva = array("title" => "'".$_POST['menu_name']."'","location" => "'".$_POST['m_location']."'","parent_id" => "".$_POST['par_mem']."","cat_id" => "".$_POST['atr_cat']."","art_id" => "'".$aimp."'");
	runquery("INSERT","","menu",$sva);
	//die();
	}

}


function edit() {
		if( isset( $_POST['artical'] ) ) { 
	        if( count( $_POST['artical'] )>0){
	         $aimp = implode(",",$_POST['artical']); 
			 }
			 else {
			  $aimp = $_POST['artical'];
			 }
			 $sva = array("title" => "'".$_POST['menu_name']."'","location" => "'".$_POST['m_location']."'","parent_id" => "".$_POST['par_mem']."","cat_id" => "".$_POST['atr_cat']."","art_id" => "'".$aimp."'");
			} 
		else {
			 $sva = array("title" => "'".$_POST['menu_name']."'","location" => "'".$_POST['m_location']."'","parent_id" => "".$_POST['par_mem']."","cat_id" => "".$_POST['atr_cat']."");
			 }	
	runquery("UPDATE","","menu",$sva,"where id = ".$_POST['id']."");
}

function delete() {
	  $whe = "WHERE id = ".$_GET['id']."";
	  runquery('DELETE','','menu','',$whe);
	 } 


if( isset( $_POST['id'] )&& !isset( $_GET['del'] ) ) { 
	edit();
   header('location:index.php?f=menu&t=menu');
	}
else {
		if( isset( $_GET['id'] ) && isset( $_GET['del'] )  ) {
			delete();
			//echo "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssddddeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
			//die("hhhhhhh");
			header('location:index.php?f=menu&t=menu');
   		  }
		 else { 	
 				add();
				header('location:index.php?f=menu&t=menu');
			}	
}
	
	

 ?>
