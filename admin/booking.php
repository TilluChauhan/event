<?php 
	session_start();
if(!isset($_SESSION['adminlog']) ){
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
              
                <h6 class="heading-small text-muted mb-4">Event Information</h6>
				
                <div class="pl-lg-4">
					<div class="row">
						
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">option1</label>
							<input type="text"  class="form-control" placeholder="Enter Event-name" id="op1">
							<div id="msgname"></div>
						  </div>
						</div>
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">option2</label>
							<input type="text"  class="form-control" placeholder="Enter Event-name" id="op2">
							<div id="msgname"></div>
						  </div>
						</div>
				  
						
						
						
						
					
						
						
						
						
					
						
						
						
					</div>
					  <button type="button" id="moj"  class="btn btn-danger hj567">Buy</button>
							
					 
						
						
						
						
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
				$('#moj').click(function(){
					var op1=$('#op1').val();
					console.log(op1);
					var op2=$('#op2').val();
					console.log(op2);
					
					var option={'T_op1' : op1,
						'T_op2' : op2,}
						$.ajax({
							type:'POST',
							url:'ajax/option.php',
							data:option,
							success:function(resp){
								console.log(resp);
							}
						});
				});
			});
	</script>
</body>
	
</html>
