<?php
	include '../config/config.php';
		$id=$_POST['U_id'];
		print_r($id);
		$simage=$_FILES['U_simage'];
	$simagename=$_POST['U_simagename'];
	$chnge=move_uploaded_file($simage['tmp_name'],'../image/slider/'.$simagename);
			//print_r($simage);
		//print_r($simagename);

		$sdimage=$_FILES['U_sdimage'];
		$sdimagename=$_POST['U_sdimagename'];
		$asd=move_uploaded_file($sdimage['tmp_name'],'../image/slider/'.$sdimagename);	
//print_r($sdimage);
		//print_r($sdimagename);
	$name=$_POST['U_name'];
		//print_r($name);
$description=$_POST['U_description'];
		//print_r($description);
$sdate=$_POST['U_sdate'];
		//print_r($sdate);
$edate=$_POST['U_edate'];
	//	print_r($edate);
$location=$_POST['U_location'];
		//print_r($location);
$price=$_POST['U_price'];
		//print_r($price);
	$detail=$_POST['U_detail'];
$term=$_POST['U_term'];

print_r($detail);
print_r($term);
$sql="UPDATE slider_event SET slider_image='".$simagename."', detail_image='".$sdimagename."',	event_name='".$name."', description='".$description."', start_date='".$sdate."', end_date='".$edate."', location='".$location."',
price='".$price."',detail='".$detail."', term='".$term."' where id='".$id."'";	
$result=mysqli_query($conn,$sql);
if($result){
	echo 1;
	}else{
echo 0;
	}
?>