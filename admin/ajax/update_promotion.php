<?php 
	include '../config/config.php';
	
	$id=$_POST['U_id'];
	$imagename=$_POST['U_imagename'];
	//print_r($image);
	if(isset($_FILES['U_image'])){
		$image=$_FILES['U_image'];
	
	$dwon=move_uploaded_file($image['tmp_name'],'../image/promotion/'.$imagename);
	}
	
	//print_r($imagename);
	$name=$_POST['U_name'];
	$url=$_POST['U_url'];
	
	//print_r($id);
	
	//print_r($name);
	//print_r($url);
	
	$sql="UPDATE promotion SET name='".$name."', image='".$imagename."', url='".$url."' where id='".$id."'";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}

?>

