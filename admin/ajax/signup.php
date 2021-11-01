<?php

	include '../config/config.php';
	
	$name=$_POST['T_name'];
	$image=$_FILES['T_image'];
	//print_r($image);
	$img=rand(100,1000);
	$imagename='pic'.$img.'.jpg';
	//$ko=move_uploaded_file($image['tmp_name'],'../image/user/'.$imagename);
	$downimage=move_uploaded_file($image['tmp_name'],'../image/user/'.$imagename);
	//print_r($imagename);
	//print_r($name);
	$email=$_POST['T_email'];
	//print_r($email);
	$pass=$_POST['T_pass'];
	//print_r($pass);
	$mobile=$_POST['T_mobile'];
	//print_r($mobile);
	$status=1;
	$date=date('yy-m-d');
	$sql="insert into loginuser(cid ,name,image,email,password,mobile,status,createdate) VALUES ('','".$name."','".$imagename."','".$email."','".$pass."','".$mobile."','".$status."','".$date."')";
	$result=mysqli_query($conn, $sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>