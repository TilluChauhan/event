<?php
include '../config/config.php';
	$op1=$_POST['T_op1'];
	$op2=$_POST['T_op2'];
	print_r($op1);
	print_r($op2);
	
	$sql="insert into eventoption(id,evntop1,evntop2) values('','".$op1."','".$op2."')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
	
	
?>