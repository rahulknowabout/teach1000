<?php //include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/functions.php');
	if( isset( $_GET['artc'] ) ) {
		$rowa = getartical( $_GET['artc'] );?>
		 <label>Articals</label>
		 <tr> <th>	<input type = "checkbox" name="all" id="all"  onclick="checkall()"/></th><th>Artical Name</th></tr><?php
	if( count($rowa) > 0 ) {
		 foreach( $rowa as $row) { 
		 	if( $row['status'] == 1) { ?>
		<tr>
			<td>
            	<input type = "checkbox" name="artical[]" id="artical" value="<?php echo $row['id']; ?>" /> 
			</td>
			<td>
				<?php echo "".$row['title']."(".$row['alias'].")"; ?>
			</td>
        </tr>
 <?php } } }
} ?>