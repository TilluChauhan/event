<?php 
include 'config/config.php';

$add=true;
$catid=null;
$csql=null;
if(isset($_GET['edit'])){
	$add=false;
	$catid=$_GET['edit'];
	$sql="select * from category where catid='".$catid."'";
	$cresult=mysqli_query($conn,$sql);
	$csql=mysqli_fetch_array($cresult);
	
	
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
              
                <h6 class="heading-small text-muted mb-4">Category Information</h6>
				
                <div class="pl-lg-4">
					
					<div class="row">	
						<div class="col-lg-6">
						  <div class="form-group">
						  
							<label class="form-control-label">Categoy-Name</label>
							<input type="text"  class="form-control" value="<?php echo $csql['cat_name']?>"  placeholder="Enter Categoy-Name" id="Cat_name">
							<div id="msgname"></div>
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Status</label>
							<input type="text"  class="form-control" value="<?php echo $csql['status']?>"   placeholder="Enter Status" id="status">
							<div id="msgname"></div>
						  </div>
						</div>
						
				  
						
						
						
						
					</div>
					
					<?php
						if($add==true){
							?>
							
								<button class="btn btn-primary" id="catadd">Add</button>	
						<?php
						}else{
							?>
							<button class="btn btn-primary" id="catupdate">Update</button>
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
		
		$('#catadd').click(function(){
			var catname=$('#Cat_name').val();
			var status=$('#status').val();
			
			console.log(catname);
			console.log(status);
			
			var cat={T_catname:catname, T_status:status}
			
			$.ajax({
				type:'POST',
				url:'ajax/category.php',
				data:cat,
				success:function(res){
					//console.log(res);
					if(res==1){
						swal("Good job!", "You have successfully add category", "success");
						//Window.location.reload();
					}else{
						swal("Good job!","You have not successfully add category", "warning");
					}
				}
			});
		});
		
		$('#catupdate').click(function(){
			var catid="<?php echo $csql['catid']?>";
			var catname=$('#Cat_name').val();
				var status=$('#status').val();
				
				console.log(catid);
				console.log(catname);
				console.log(status);
				

				var catp={T_catid:catid,T_catname:catname,T_status:status}
				
				$.ajax({
					type:'POST',
					url:'ajax/update_category.php',
					data:catp,
					success:function(resp){
						//console.log(resp);
						if(resp==1){
							swal("Good job!", "You have successfully update your data", "success");
						}else{
								swal("oops!", "Something Get Wrong Please Check", "wrong");
						}
					}
				});
			
		});
	});
	</script>
</body>
	
</html>

