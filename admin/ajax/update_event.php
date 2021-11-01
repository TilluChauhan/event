<?php
include '../config/config.php';
	$id=$_POST['U_id'];
	$category=$_POST['U_editcategory'];
	
	$imagename=$_POST['U_imagename'];
	if(isset($_FILES['U_image'])){
		$image=$_FILES['U_image'];
		$downimage=move_uploaded_file($image['tmp_name'],'../image/upload/'.$imagename);	
	}
	
	$name=$_POST['U_name'];
	$description=$_POST['U_description'];
	$type=$_POST['U_type'];
	$price=$_POST['U_price'];
	
	//print_r($id);
	//print_r($image);
	//print_r($imagename);
	//print_r($name);
	//print_r($type);
	//print_r($price);
	$dimagename=$_POST['U_dimagename'];
	//$dimage=$_FILES['U_dimage'];
	//$change=move_uploaded_file($dimage['tmp_name'],'../image/detail_Image/'.$dimagename);
	if(isset($_FILES['U_dimage'])){
		$dimage = $_FILES['U_dimage'];
		$change = move_uploaded_file($dimage['tmp_name'],'../image/detail_Image/'.$dimagename);
	}
	
	
	//$dimage=$_FILES['U_dimage'];
	//$dimagename=$_POST['U_imagename'];
	//$chnge=move_uploaded_file($dimage['tmp_name'],'../image/detail_Image/'.$dimagename);
	//print_r($dimage);
	//print_r($dimagename);
	
	$startdate=$_POST['U_startdate'];
	$enddate=$_POST['U_enddate'];
	//$startdd=$_POST['U_startdd'];
	//$endd=$_POST['U_endd'];
	
	//print_r($startdd);
	//print_r($endd);
	
	//print_r($startdate);
	//print_r($enddate);
	
	$location=$_POST['U_location'];
	
	//print_r($location);
	$detail=$_POST['U_detail'];
	//print_r($detail);
	
	$condition=$_POST['T_condition'];
	
	$sql="UPDATE add_event SET catid='".$category."', event_image='".$imagename."',event_name='".$name."',description='".$description."', type_event='".$type."',price='".$price."',detail_image='".$dimagename."',start_date='".$startdate."', end_date='".$enddate."' ,location='".$location."',detail='".$detail."',term='".$condition."' where id='".$id."' ";
		
		$result=mysqli_query($conn, $sql);
		if($result){
		echo 1;
			
		}else{
			echo 0;
	}	
	
	
	
	
?>
