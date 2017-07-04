<?php //////////// paginate() /////////////
/*function paginate( $path,$hold ) {
	if( ( $hold%10 ) == 0 ){
		$total = $hold/10;
	}
    else {
    	$total = ($hold/10)+1;
     }
	 $returnp =   '<ul class = "pagination">';
	 if( isset( $_REQUEST['vid'] ) && $_REQUEST['vid']>1 ) {
	 	$pre = $_REQUEST['vid']-1;
		$returnp = $returnp.'<li><a href = "'.$path.'&vid='.$pre.'">Previous</a></li>';
	}
     for( $i = 1; $i <= $total; $i++ ) {
		$returnp = $returnp.'<li><a href = "'.$path.'&vid='.$i.'">'.$i.'</a></li>';
	 }
	if( isset( $_REQUEST['vid'] ) &&  $_REQUEST['vid']<$total ) {
		$nex = $_REQUEST['vid']+1;
		$returnp = $returnp.'<li><a href = "'.$path.'&vid='.$nex.'">Next</a></li>';
	}
	$returnp = $returnp.'</ul>';
	return $returnp;
}	   
////////// show_users() ////////// 
function show_users() {
	$rowc = runquery("SELECT","count(*)","users");
	foreach($rowc as $row) {
		$hold = $row['count(*)'];
	}
	if(isset($_GET['vid']) && $_GET['vid']!="") {
	$vid1 = ($_GET['vid']-1)*10;
	$rowe = runquery("SELECT","*","users","","limit ".$vid1.",10");
    $count= $vid1+1;
	}
	else {
	$rowe = runquery("SELECT","*","users","","limit 0,10");
    $count = 1;
	} 
	foreach($rowe as $row){
?>	    
		<tr><td><?php echo $count;   ?> </td>  <td>  <img src="../uploads/<?php echo $row['user_p_photo'] ;  ?>" width="50px" height="40px" />  </td> 
		<td><?php echo $row['user_email'] ;  ?>  </td>  <td><?php echo $row['user_profile_name'] ;  ?>  </td>   <td><?php echo $row['user_suburb'] ;  					        ?> </td>   
        <td><?php echo $row['user_state'] ;  ?>  </td>   <td><a href="index.php?f=user&t=users&bid=<?php echo $row['status']; ?>&ubid=<?php echo $row['user_id']        ; ?>" class="btn bg-navy margin"><?php if($row['status'] == 0){ echo "Block"; } else { echo "unblock"; }?></a></td>
        <td> <a href="manageuser.php?uid=<?php echo $row['user_id']; ?>&&edi=edi" class="btn bg-navy margin">View/Edit</a></td>
        <td> <a href="manageuser.php?uid=<?php echo $row['user_id']; ?>&&del=del" class="btn bg-navy margin">DELETE</a></td>
         </tr>	
<?php 
		 $count++;
	}
$path = 'index.php?f=user&t=users';
echo '<tr><td align = "center" colspan = "6">'; 
echo paginate($path,$hold);
echo '</td></tr>'; 
}*/
?>
 