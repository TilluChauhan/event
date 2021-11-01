<?php 
session_start();
include 'config/config.php';
$csql="Select * from category";
$cres=mysqli_query($conn, $csql);

$Addmode=true;
$edit=null;
$rty=null;



if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	
	$Addmode=false;
	
	$sql="select * from add_event where id='".$id."' ";
	
	$eres=mysqli_query($conn, $sql);
	
	$rty=mysqli_fetch_array($eres);
}
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
              
                <h6 class="heading-small text-muted mb-4">Event Information</h6>
				<select name="Category" id="category" style="width:50%;">
				<option value="">Select Category</option>
				<?php 	while($pcatch=mysqli_fetch_array($cres)){
				
					?>
					  
				  <option value="<?php echo $pcatch['catid']?>"><?php  echo $pcatch['cat_name']?></option>
				 

					<?php
				}
				?>
				
				</select>
                <div class="pl-lg-4">
					<div class="row">
				
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Event-Image</label>
							<input type="file" class="form-control"  id="event_image" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Event-Name</label>
							<input type="text"  class="form-control" value="<?php echo $rty['event_name']?>" placeholder="Enter Event-name" id="event_name">
							<div id="msgname"></div>
						  </div>
						</div>
				  
						
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Description</label>
							<input type="text" class="form-control" value="<?php echo $rty['description']?>" placeholder="enter the description"   id="description" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Type-Event</label>
							<input type="text" class="form-control" value="<?php echo $rty['type_event']?>" placeholder="enter the no"   id="type_event" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Price</label>
							<input type="text" class="form-control" value="<?php echo $rty['price']?>" placeholder="enter price"   id="price" >
							<div id="msgmobile"></div>
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Detail-Image</label>
							<input type="file"  class="form-control"  id="detail_image" >
							
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Start-date</label>
							<input type="date" value="<?php echo $rty['start_date']?>"  id="start_date">
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">End-date</label>
							<input type="date" value="<?php echo $rty['end_date']?>" id="end_date">
						  </div>
						</div>
						
						<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Location</label>
							<input type="text" class="form-control" value="<?php echo $rty['location']?>"placeholder="enter Loaction"   id="location" >
							<div id="msgmobile"></div>
						  </div>
						</div>
						<!--<div class="col-lg-6">
						  <div class="form-group">
							<label class="form-control-label">Catrgory</label>
							<input type="text" class="form-control" value="<?php echo $rty['catid']?>"placeholder="enter Loaction"   id="cat" >
							<div id="msgmobile"></div>
						  </div>
						</div>-->
						<div class="col-lg-12">
						<div class="form-group">
						  <label for="comment">Details</label>
						  <textarea class="form-control" id="details"><?php echo $rty['detail']?></textarea>
						</div>
						</div>
						<div class="col-lg-12">
						<div class="form-group">
						  <label for="comment">Terms $ Condition</label>
						  <textarea class="form-control" id="condition"><?php echo $rty['term']?></textarea>
						</div>
						</div>
						
						
						
						
						
					</div>
					  <?php 
						if($Addmode){
							
						
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
		    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<!---Script--->
	
	<script>
	CKEDITOR.replace('details');
	CKEDITOR.replace('condition');
	$(document).ready(function(){
			//category
			$('#category').change(function(){
				var category=$(this).val();
				//console.log(category);
			});
			
		$("#add").click(function(){
			var image=$('#event_image')[0].files[0];					
					var name=$('#event_name') .val();
					console.log(name);
					var description=$('#description').val();
					var type=$('#type_event').val();
					var price=$('#price').val();
					var detailimage=$('#detail_image')[0].files[0];
					var start_date=$('#start_date').val();
					var end_date=$("#end_date").val();
					var location=$('#location').val();
					var detail = CKEDITOR.instances["details"].getData();
					
					 var category=$('#category').val();
					console.log(category);
					var condition = CKEDITOR.instances["condition"].getData();
					//console.log(detail);
					//console.log(condition);
					//console.log(location);
					//console.log(start_date);
					//console.log(end_date);
					
					
					//console.log(image);
					//console.log(name);
					//console.log(description);
					//console.log(type);
					//console.log(price);
					//console.log(detailimage);
					

				 var data=  new FormData();
						data.append('T_category',category);
						data.append('T_image',image);
						data.append('T_name',name);
						data.append('T_description',description);
						data.append('T_type',type);
						data.append('T_price',price);
						data.append('T_detailimage',detailimage);
						data.append('T_startdate',start_date);
						data.append('T_enddate',end_date);
						data.append('T_location',location);
						data.append('T_detail',detail);
						data.append('T_condition',condition);
						
					//console.log(data);


						$.ajax({
						url:'ajax/add_event.php',

						type:'POST',
						cache:false,
						contentType:false,
						processData:false,
						data:data,

						success:function(response){
						console.log(response);
								if(response==1){
						swal("Good job!", "You have successfully add", "success");
					}else{
						swal("Something error!", "You have not successfully add", "error");
					}
						}
							
					});
					
			});
			
			$("#edit").click(function(){
				//$rty['catid']="<?php  echo $pcatch['cat_name']?>";
				
				var id="<?php echo $rty['id']?>";
				var editcategory="<?php echo $rty['catid']?>";
					//console.log(editcategory);
					var image =$("#event_image")[0].files[0]; 
					
					
					if(image!= ''){
				var imagename="<?php echo $rty['event_image']?>";
				}
				
				
				var name=$("#event_name").val();
				var description=$("#description").val();
				var type=$("#type_event").val();
				var price=$("#price").val();
					var dimage=$("#detail_image")[0].files[0];
				
				if(dimage!= ''){
			
				var dimagename="<?php echo $rty['detail_image']?>";
				}
	
			
				
				var start_date=$('#start_date').val();
				
				//var start_date="<?php echo $rty['start_date']?>";
				//var end_date="<?php echo $rty['end_date']?>";
				
				var end_date=$('#end_date').val();
				var location=$("#location").val();
				
				var detail = CKEDITOR.instances["details"].getData();
				//console.log(detail);
				var condition = CKEDITOR.instances["condition"].getData();
				

				//if(image == undefined || dimage == null){
					//image = "test1";
				//}
					//if(dimage == undefined || dimage == null){
					//dimage = "test2";
				//}
				
				
					
					
					//console.log(condition);
					
				//console.log(location);
				//var endd="<?php echo $rty['end_date']?>";
				
				//console.log(start_date);
				//console.log(startdd);
				
					
				//console.log(end_date);
				//console.log(endd);
				
				//console.log(id);
				console.log(image);
				console.log(imagename);
				//console.log(name);
				//console.log(description);
				//console.log(type);
				//console.log(price);
				console.log(dimage);
				console.log(dimagename);
				var data =new FormData();
				data.append('U_id',id);
				data.append('U_editcategory',editcategory);
				data.append('U_image',image);
				//data.append('U_test1',test1);
				data.append('U_imagename',imagename);
				data.append('U_name',name);
				data.append('U_description',description);
				data.append('U_type',type);
				data.append('U_price',price);
				data.append('U_dimage',dimage);
				data.append('U_dimagename',dimagename);
				data.append('U_price',price);
				data.append('U_startdate',start_date);
				data.append('U_enddate',end_date); 
				data.append('U_location',location); 
				data.append('U_detail',detail);
				data.append('T_condition',condition);
				//data.append('U_startdd',startdd);
				//data.append('U_endd',endd); 
			
				$.ajax({
					type:'POST',
					url:'ajax/update_event.php',
					contentType:false,
					processData:false,
					data:data,
					success:function(response){
						//console.log(response);
									if(response==1){
						swal("Good job!", "You have successfully add", "success");
					}else{
						swal("Something error!", "You have not successfully add", "error");
					}
					}
				
				});
				
			});
		});
	</script>
</body>
	
</html>

