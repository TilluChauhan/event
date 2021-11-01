
<?php 
	include 'config/config.php';
	$sql="select * from category";
	$result=mysqli_query($conn,$sql);
	//print_r($result);
	
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
              <b class="mb-0">Event List</b>
					<a href="category-add.php" class="btn btn-Danger">Add</a>
					<a  class="btn btn-Danger">Update</a>
            </div>
				
		
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Category_id </th>
                    <th scope="col" class="sort" data-sort="budget">Category_name</th>
                  
           
					<th scope="col" class="sort" data-sort="createddate">	status</th>
					<th scope="col" class="sort" data-sort="createddate">	createddate</th>
					<th scope="col" class="sort" data-sort="createddate">Edit</th>
				
					
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
						while($bcatch=mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $bcatch['catid']?></td>
					<td><?php echo $bcatch['cat_name']?></td>
					
					<td><?php echo $bcatch['status']?></td>
					<td><?php echo $bcatch['date']?></td>
					<td><a  type="button" href="category-add.php?edit=<?php echo $bcatch['catid']?>">UPDATE</a></td>
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