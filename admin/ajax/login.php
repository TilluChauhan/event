<?php 
	include '../config/config.php';
	session_start();
	$email=$_POST['T_email'];
	$pass=$_POST['T_pass'];
	//print_r($email);
	//print_r($pass);
	
	$login = "Select * from loginuser where email='".$email."' && password='".$pass."'";
	
	$loginresult=mysqli_query($conn, $login);
	$lcatch=mysqli_fetch_array($loginresult);
	//print_r($lcatch);
	if($lcatch){
		$_SESSION['login']=$lcatch['cid'];
		echo 1;
	}else{
		echo 'pls enter correct information';
	}

?>