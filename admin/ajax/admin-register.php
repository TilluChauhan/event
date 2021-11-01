<?php 
	include '../config/config.php';
	$name=$_POST['T_name'];
	
	$image=$_FILES['T_image'];
	$imd=rand(12,200);
	$imagename='pic'.$imd.'.jpg';
	$imgemoc=move_uploaded_file($image['tmp_name'],'../image/admin_image/'.$imagename);
	//print_r($imagename);
	//print_r($image);
	$email=$_POST['T_email'];
	$pass=$_POST['T_pass'];
	$mobile=$_POST['T_mobile'];
	//print_r($name);
	//print_r($email);
	//print_r($pass);
	//print_r($mobile);
	$status=1;
	$date=date('yy-m-d');
	
	$sql="insert into admin_register(id,name,image,email,password,mobile,status,create_date) values('','".$name."','".$imagename."','".$email."','".$pass."','".$mobile."','".$status."','".$date."')";
	
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>