<?php 
	include '../config/config.php';
	session_start();
		$email=$_POST['T_email'];
		$pass=$_POST['T_pass'];
		//print_r($email);
		//print_r($pass);
		
	$sql="select * from admin_register Where email='".$email."' && password='".$pass."' ";
	$result=mysqli_query($conn,$sql);
	
	$adresult=mysqli_fetch_array($result);
	//print_r($adresult);
	if($adresult){
		$_SESSION['adminlog']=$adresult['id'];
		echo 1;
	}else{
		
		echo 0;
	}
?>