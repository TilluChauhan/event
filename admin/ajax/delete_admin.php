<?php
include '../config/config.php';
$id=$_GET['delete'];
//print_r($id);
$sql="delete from admin_register where id='".$id."' ";
$result=mysqli_query($conn,$sql);
if($result){
	//echo 'successfully deleted';
	//header("Location: ../admin-register-list.php");
	header("Location:../admin-register-list.php");
	//exit();
}else{
	echo 'Something Get wrong';
}


?>