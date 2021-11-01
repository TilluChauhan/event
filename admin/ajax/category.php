<?php
	include '../config/config.php';
	$catname=$_POST['T_catname'];
	$status=$_POST['T_status'];
	//print_r($catname);
	//print_r($status);
	$date=date('yy-m-d');
	
	$sql="insert into category (catid,cat_name,status,date) values('','".$catname."','".$status."','".$date."')";
	
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>