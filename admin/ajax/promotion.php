<?php 
	include '../config/config.php';

	$name=$_POST['T_name'];
	//print_r($name);
	
	$simage=$_FILES['T_image'];
	//print_r($simage);
	
	$imageno=rand(12,300);
	$simagename=('pic'.$imageno.'.jpg');
	$down=move_uploaded_file($simage['tmp_name'],'../image/promotion/'.$simagename);
	
	$image=$simagename;
	//print_r($image);
	
	$url=$_POST['T_url'];
	//print_r($url);
	
	$sql="insert into promotion (id,name,image,url) VALUES ('','".$name."', '".$image."', '".$url."')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
		
	}else{
		echo 0;
	}


?>