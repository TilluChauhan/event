<?php
	include '../config/config.php';
	$input=$_POST['T_input'];
	//print_r($input);
	$emparray = array();
	
	if($input != null){
		$sql2='select id, event_name from add_event where event_name like "'.$input.'%" order by event_name';
		$result2=mysqli_query($conn,$sql2);
		while($row =mysqli_fetch_assoc($result2))
		{
			$emparray[] = $row;
		}
	}
	
	echo json_encode($emparray);

?>