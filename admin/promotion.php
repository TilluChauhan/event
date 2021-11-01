<?php 
include 'config/config.php';
//$sql="Select * from slider_event";

//$id=$_GET['edit'];
$add=true;
$edit=null;
$presult=null;
if(isset($_GET['edit'])){
	$add=false;
	$id=$_GET['edit'];
	
	$sql="select * from promotion where id='".$id."'";
	$result=mysqli_query($conn, $sql);
	
	$presult=mysqli_fetch_array($result);
}
session_start();
	if(!isset($_SESSION['adminlog'])){
		header("location:admin-login.php");
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
              
                <h6 class="heading-small text-muted mb-4">Slider Information</h6>
				
                <div class="pl-lg-4">
					<div class="row">
				
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Name</label>
							<input type="text" value="<?php echo $presult['name']?>" class="form-control"  id="name" >
							
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Slider-Image</label>
							<input type="file" class="form-control"  id="slider_image" >
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">URl</label>
							<input type="text" value="<?php echo $presult['url']?>" class="form-control"  id="url" >
							
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
		$(document).ready(function(){
			$("#add").click(function(){
				var name=$("#name").val();
				var image=$("#slider_image")[0].files[0];
				var url=$("#url").val();
				
				
				console.log(name);
				console.log(image);
				console.log(url);
				
				var data=new FormData();
				data.append('T_name',name);
				data.append('T_image',image);
				data.append('T_url',url);
				
				console.log(data);
				
				$.ajax({
					type:'POST',
					url:'ajax/promotion.php',
					contentType:false,
					processData:false,
					data:data,
					
					success:function(response){
						//console.log(response);
						if(response==1){
							swal("Good job!", "You have successfully add promotion", "success");
						}else{
							swal("Something Get Wrong", "You have not successfully  add promotion", "error");
						}
					}
				});
			});
			$("#edit").click(function(){
				var id="<?php echo $presult['id']?>";
				var image=$("#slider_image")[0].files[0];
				if(image!= ''){
				var imagename="<?php echo $presult['image']?>";
				}
				
				var name=$("#name").val();
				var url=$("#url").val();
				
				console.log(id);
				console.log(name);
				console.log(url);
				console.log(image);
				console.log(imagename);
				
				var data=new FormData();
				data.append('U_id',id);
				data.append('U_image',image);
				data.append('U_imagename',imagename);
				data.append('U_name',name);
				data.append('U_url',url);
				
				$.ajax({
					
					url:'ajax/update_promotion.php',
					type:'POST',
					contentType:false,
					processData:false,
					data:data,
					success:function(response){
						//console.log(response);
						if(response==1){
							swal("Good job!", "You have successfully update promotion", "success");
						}else{
							swal("Something Get Wrong", "You have not successfully update promotion", "error");
						}
					}
				});
			});
		});
	</script>
</body>
	
</html>

