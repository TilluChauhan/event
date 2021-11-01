<?php 
	include '../config/config.php';
	$cancel=$_GET['cancel'];
	//print_r($cancel);
	$sql="delete from booking  Where booking_id='".$cancel."' ";
	$result=mysqli_query($conn,$sql);
	if($result){
	header('location: /event/order.php');
		
		//echo 1;
	}else{
		echo 'Something Get Wrong';
	}
?>