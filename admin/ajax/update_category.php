<?php 
	include '../config/config.php';
	
	$catid=$_POST['T_catid'];
	$catname=$_POST['T_catname'];
	$status=$_POST['T_status'];
	//print_r($catid);
	//print_r($catname);
	//print_r($status);
	
$sql="UPDATE category SET cat_name='".$catname."', status='".$status."' where catid='".$catid."'";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>