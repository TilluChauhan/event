<?php 
include 'config/config.php';
//$sql="Select * from slider_event";

$add=true;
$edit=null;
$catch=null;
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$add=false;
	$sql=" select * from slider_event where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	
	$catch=mysqli_fetch_array($result);
	//print_r($catch);
}



?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'includes/head.php';?>
</head>

<body>


	<!-- Sidenav -->		
		
	<!-- Sidenav -->		
		<?php include 'includes/sidenavebar.php';?>
	<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
		<?php include 'includes/header.php';?>
    <!-- Header -->
   
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            
    <!-- Page content -->
    <div class="container-fluid ">
      
      <!-- Footer -->
		<div class="card-body">
              
                <h6 class="heading-small text-muted mb-4">Event Information</h6>
				
                <div class="pl-lg-4">
					<div class="row">
						<div class="col-lg-6">
						  <div class="form-group">


							<label class="form-control-label">Slider-Image</label>
							<input type="file" class="form-control"  id="slider_image" >
							
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Detail-Image</label>
							<input type="file" class="form-control"  id="detail_image" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Event-Name</label>
							<input type="text"  class="form-control" value="<?php echo $catch['event_name']?>" placeholder="Enter Event-name" id="slider_name">
							<div id="msgname"></div>
						  </div>
						</div>
				  
						
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Description</label>
							<input type="text" class="form-control" value="<?php echo $catch['description']?>" placeholder="enter the description"   id="description" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Start-date</label>
							<input type="date" value="<?php echo $catch['start_date']?>"   id="start_date">
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">End-date</label>
							<input type="date" value="<?php echo $catch['end_date']?>"  id="end_date">
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Location</label>
							<input type="text" class="form-control" value="<?php echo $catch['location']?>"  placeholder="enter Loaction"   id="location" >
							<div id="msgmobile"></div>
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Price</label>
							<input type="text" class="form-control" value="<?php echo $catch['price']?>"  placeholder="enter price"   id="price" >
							<div id="msgmobile"></div>
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">detail</label>
							<textarea class="form-control" id="detail"><?php echo $catch['detail']?></textarea>
							<div id="msgmobile"></div>
						  </div>
						</div>

						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Term Abd Condition</label>
							<textarea class="form-control" id="term"><?php echo $catch['term']?></textarea>
							<div id="msgmobile"></div>
						  </div>
						</div>
						
						
					</div>
						<?php 
							if($add){
								?>
									<button class="btn btn-primary" id="add">Add</button>	
								<?php
								}else{

									?>
										<button class="btn btn-primary" id="edit">update</button>
								<?php
								}
							
						?>
					 
						
						
						
						
					</div>
					
                </div>
				  
			<div>
			
            
			
				

			   
            </div>
            
            </div>
    
		<!-- Footer -->
		
	<!---Script--->
		<?php include 'includes/script.php'; ?>
	<!---Script--->
	
	<script>
CKEDITOR.replace('detail');
CKEDITOR.replace('term');
	$(document).ready(function(){
		$("#add").click(function(){
			var simage=$("#slider_image")[0].files[0];
			var sdimage=$("#detail_image")[0].files[0];
			var name =$("#slider_name").val();
			var description=$("#description").val();
			var sdate=$("#start_date").val();
			var edate=$("#end_date").val();
			var location=$("#location").val();
			var price=$("#price").val();
			var detail=CKEDITOR.instances["detail"].getData();
			var term=CKEDITOR.instances["term"].getData();
			console.log(detail);
			console.log(term);
			//console.log(simage);
			//console.log(sdimage);
			//console.log(name);
			//console.log(description);
			//console.log(sdate);
			//console.log(edate);
			//console.log(location);
			//console.log(price);
			
			
			var data = new FormData();
			data.append('T_simage',simage);
			data.append('T_sdimage',sdimage);
			data.append('T_name',name);
			data.append('T_description',description);
			data.append('T_sdate',sdate);
			data.append('T_edate',edate);
			data.append('T_location',location);
			data.append('T_price',price);
			data.append('T_detail',detail);
			data.append('T_term',term);
			//console.log(data);
			
			$.ajax({
						url:'ajax/add_slider.php',
						type:'POST',
						contentType:false,
						processData:false,
						data:data,
						success:function(response){
							console.log(response);
							}
					});
					
			
			
			
		});
			
			$("#edit").click(function(){
						var id="<?php echo $catch['id']?>";
					var simage=$("#slider_image")[0].files[0];
					var simagename="<?php echo $catch['slider_image']?>";
					var sdimage=$("#slider_image")[0].files[0];
					var sdimagename="<?php echo $catch['detail_image']?>";
					var name=$("#slider_name").val();

					var description=$("#description").val();
					var sdate=$("#start_date").val();
					var edate=$("#end_date").val();
					var location=$("#location").val();
					var price=$("#price").val();
					var detail=CKEDITOR.instances["detail"].getData();
					var term=CKEDITOR.instances["term"].getData();
					console.log(detail);		
					console.log(term);
					//console.log(id);
					//console.log(simagename);
					//console.log(sdimagename);
					//console.log(name);

					//console.log(description);
					//console.log(sdate);
					//console.log(edate);
					//console.log(location);
					//console.log(price);
					

					var data=new FormData();
					data.append('U_id',id);
					data.append('U_simage',simage);
					data.append('U_simagename',simagename);
					data.append('U_sdimage',sdimage);
					data.append('U_sdimagename',sdimagename);
					data.append('U_name',name);
					data.append('U_description',description);
					data.append('U_sdate',sdate);
					data.append('U_edate',edate);
					data.append('U_location',location);
					data.append('U_price',price);
					data.append('U_detail',detail);
					data.append('U_term',term);
					//console.log(data);
						
					$.ajax({
						type:'POST',			
						url:'ajax/slider_update.php',
						contentType:false,
						processData:false,
						data:data,
						success:function(response){
							console.log(response);
							}
						
					});
					
				});
	});
	</script>
</body>
	
</html>

