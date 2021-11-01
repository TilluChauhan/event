<?php
	include '../config/config.php';
	$id=$_POST['U_id'];
	$name=$_POST['U_name'];
	$imagename=$_POST['U_imagename'];
	if(isset($_FILES['U_image'])){
		$image=$_FILES['U_image'];
	$imagemove=move_uploaded_file($image['tmp_name'],'../image/admin_image/'.$imagename);
	}
	//print_r($id);
	$email=$_POST['U_email'];
	$pass=$_POST['U_pass'];	
	$mobile=$_POST['U_mobile'];
	//print_r($image);
	//print_r($imagename);
	//print_r($name);
	//print_r($email);
	//print_r($pass);
	//print_r($mobile);
	$sql="Update admin_register SET name='".$name."' ,image='".$imagename."' ,email='".$email."' , password='".$pass."' ,mobile='".$mobile."' Where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>