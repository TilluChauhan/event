<?php
include '../config/config.php';

$id=$_GET['delete'];
$sql="delete from  add_event Where id='".$id."' ";

$result=mysqli_query($conn,$sql);
if($result){
	//echo 'successfully';
	header("Location: ../event-list.php");
exit();
}else{
	echo 'not';
}

?>