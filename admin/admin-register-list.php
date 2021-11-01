
<?php 
	include 'config/config.php';

	$sql="select * from admin_register";
	$result=mysqli_query($conn,$sql);
	//print_r($result);
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
              <b class="mb-0">Admin Register</b>
					<a href="admin-register.php" class="btn btn-Danger">Add</a>
					<a  class="btn btn-Danger">Update</a>
            </div>
				
		
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Admin_id</th>
                    <th scope="col" class="sort" data-sort="budget">Admin_name</th>
					<th scope="col" class="sort" data-sort="name">Admin_image</th>
					<th scope="col" class="sort" data-sort="status">Admin_email</th>
                    <th scope="col" class="sort" data-sort="status">Admin_password</th>
					
					<th scope="col" class="sort" data-sort="status">Admin_Mobile</th>
					<th scope="col" class="sort" data-sort="status">Admin_Status</th>
                
					<th scope="col" class="sort" data-sort="createddate">	createddate</th>
					<th scope="col" class="sort" data-sort="createddate">update</th><th scope="col" class="sort" data-sort="createddate">Delete</th>
					
				
					
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
					 while($row=mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['name']?></td>
					<td><img src="<?php echo 'image/admin_image/'.$row['image']?>" style="width:100px; border-radius:80px;"></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['password']?></td>
					<td><?php echo $row['mobile']?></td>
					<td><?php echo $row['status']?></td>
					<td><?php echo $row['create_date']?></td>
					<td><a href="admin-register.php?edit=<?php echo $row['id']?>"><button type="button" class="btn btn-danger">Edit</button></a></td>
					<td><a href="ajax/delete_admin.php?delete=<?php echo $row['id']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
				</tr>	  
		
				<?php
					 }
				  ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
           
          </div>
        </div>
      </div>
      <!-- Footer -->
		<?php include 'includes/footer.php';?>
		<!-- Footer -->
		
	<!---Script--->
		<?php include 'includes/script.php'; ?>
	<!---Script--->
</body>

</html>