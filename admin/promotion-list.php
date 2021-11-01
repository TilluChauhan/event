<?php 
	include 'config/config.php';
	//$sql="select * from slider_event";
	//$result=mysqli_query($conn, $sql);
	
	$sql="select * from promotion";
	$result=mysqli_query($conn,$sql);
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
		<?php include 'includes/sidenavebar.php';?>
	<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
		
    <!-- Header -->
    <?php include 'includes/header.php';?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <b class="mb-0">slider List</b>
			  <a href="promotion.php" class="btn btn-Danger">Add</a>
					<a  class="btn btn-Danger">Update</a>
            </div>
			
			
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                    <th scope="col" class="sort" data-sort="budget">Name</th>
					<th scope="col" class="sort" data-sort="createddate">promotion_Image</th>
					<th scope="col" class="sort" data-sort="status">URL</th>
					<th scope="col" class="sort" data-sort="status">Update</th>
                  
					
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
							while($catch=mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $catch['id'];?></td>
					<td><?php echo $catch['name'];?></td>
					<td><img src="<?php echo 'image/promotion/'.$catch['image'] ?>" style="height:50px;"></td>
					<td><?php echo $catch['url']?></td>
					<td><a href="../admin/promotion.php?edit=<?php echo $catch['id'];?>">Edit</a></td>
				
				</tr>	  
				<?php
							}
				  ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
          
      <!-- Footer -->
		<?php include 'includes/footer.php';?>
		<!-- Footer -->
		
	<!---Script--->
		<?php include 'includes/script.php'; ?>
	<!---Script--->
</body>

</html>

