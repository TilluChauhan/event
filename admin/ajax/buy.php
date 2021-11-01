<?php
	include '../config/config.php';
	$eventid=$_POST['T_event_id'];
	$eventname=$_POST['T_eventname'];
	//print_r($eventname);
	$userid=$_POST['T_user_id'];
	$username=$_POST['T_username'];
	//sprint_r($username);
	$price=$_POST['T_price'];
	//print_r($userid);
	//print_r($eventid);
	//print_r($price);
	$gst=$_POST['T_gst'];
	$eventprice=$_POST['T_eventprice'];
	$totalprice=$_POST['T_total'];
	//print_r($eventprice);
	//print_r($gst);
	//print_r($totalprice);
	
	$quantity=$_POST['T_ticket'];
	//print_r($quantity);
	$status=1;
	$date=date('yy-m-d');
	
	
	
$sql="insert into booking (booking_id,user_id,event_id,eventname,username,perprice,gst,quantity,totalprice,status,	createddate) VALUES ('','".$userid."','".$eventid."','".$eventname."','".$username."','".$price."','".$gst."','".$quantity."','".$totalprice."','".$status."','".$date."')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
		
		
	}else{
		echo 0;
	}
?>