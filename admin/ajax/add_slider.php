<?php
include '../config/config.php';

$simage=$_FILES['T_simage'];
//print_r($simage);
$genno=rand(100,600);
$down=('pic'.$genno.'.jpg');
$sdwon=move_uploaded_file($simage['tmp_name'],'../image/slider/'.$down);
$sliderimage=$down;
//print_r($sliderimage);

$dimage=$_FILES['T_sdimage'];
$ddno=rand(20,500);
$sdown=('pic'.$ddno.'.jpg');
$sup=move_uploaded_file($dimage['tmp_name'],'../image/slider/'.$sdown);
$sdetailimage=$sdown;
//print($sdetailimage);

$name=$_POST['T_name'];
//print_r($name);
$description=$_POST['T_description'];
//print_r($description);
$sdate=$_POST['T_sdate'];
//print_r($sdate);
$edate=$_POST['T_edate'];
//print_r($edate);
$location=$_POST['T_location'];
//print_r($location);
$price=$_POST['T_price'];
//print_r($price);
$detail=$_POST['T_detail'];
$term=$_POST['T_term'];
print_r($detail);
print_r($term);


$sql="INSERT into slider_event(id,slider_image,detail_image,event_name,description,start_date,end_date,	location,price,detail,term) VALUES ('','".$sliderimage."','".$sdetailimage."','".$name."','".$description."','".$sdate."','".$edate."','".$location."','".$price."','".$detail."','".$term."')";
$result=mysqli_query($conn,$sql);
if($result){
	echo 1;
}else{
	echo 0;
}

?>