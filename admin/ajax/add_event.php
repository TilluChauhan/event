
<?php 
	include '../config/config.php';
	$category=$_POST['T_category'];
	//print_r($category);
	$imagename=$_FILES['T_image'];
	$genno=rand(200,1000);
	$down=('pic'.$genno.'.jpg');
	$downimage=move_uploaded_file($imagename['tmp_name'],'../image/upload/'.$down);
	$img=$down;
	//print_r($imagename);
	//print_r($img);
	$name=$_POST['T_name'];
	//print_r($name);
	$description=$_POST['T_description'];
	//print_r($description);
	$type=$_POST['T_type'];
	//print_r($type);
	$price=$_POST['T_price'];
	//print_r($price);
	
	
	$detailimage=$_FILES['T_detailimage'];
	$genno=rand(100,1000);
	$dimage=('pic'.$genno.'.jpg');
	$det=move_uploaded_file($detailimage['tmp_name'],'../image/detail_Image/'.$dimage);
	
	$dimage=$dimage;
	
	//print_r($dimage);
	
	
	$startdate=$_POST['T_startdate'];
	 $startdate = date('yy-m-d');
		//print_r($startdate);
	$endate=$_POST['T_enddate'];
	$enddate = date('yy-m-d');
	
	//$startdate   = new DateTime("$pstartdate");
			//echo $startdate->format('d/M/Y');
			
			////$enddate = new DateTime("$endd");
			//echo $enddate->format('d/M/Y');
			//$interval = DateInterval::createFromDateString($interval);
//$p = new DatePeriod( $interval, $enddate);	
	//print_r($enddate);
	
	
	
	$location=$_POST['T_location'];
	
	//print_r($location);
	$detail=$_POST['T_detail'];
	//print_r($detail);
	$condition=$_POST['T_condition'];
	//print_r($condition);
	//$feature=1;
	$sql="insert into add_event(id, catid, event_image, event_name, description, type_event, price, detail_image, start_date, end_date, location, detail, term,feature) VALUES ('', '".$category."', '".$img."', '".$name."', '".$description."', '".$type."', '".$price."', '".$dimage."', '".$startdate."', '".$enddate."', '".$location."', '".$detail."', '".$condition."', ' ')";
	$result=mysqli_query($conn,$sql);
	
	//print_r($result);
	if($result){
		echo 1;

		}else{
		echo 0;
		}

	
	
?>