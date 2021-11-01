
<?php 
	include 'config/config.php';
	$sql="select * from add_event";
	$result=mysqli_query($conn, $sql);
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
					<a href="add-event.php" class="btn btn-Danger">Add</a>
					<a href="category-add.php" class="btn btn-Danger">Category</a>
            </div>
				
		
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
					 <th scope="col" class="sort" data-sort="budget">Catid</th>
                    <th scope="col" class="sort" data-sort="budget">Image</th>
                    <th scope="col" class="sort" data-sort="status">Event-name</th>
                    <th scope="col" class="sort" data-sort="description">description</th>
                    <th scope="col" class="sort" data-sort="createddate">type_event</th>
					<th scope="col" class="sort" data-sort="createddate">price</th>
					<th scope="col" class="sort" data-sort="createddate">Detail_image</th>
					<th scope="col" class="sort" data-sort="createddate">Start_date</th>
					<th scope="col" class="sort" data-sort="createddate">End_date</th>
					<th scope="col" class="sort" data-sort="createddate">Location</th>
					
					<th scope="col" class="sort" data-sort="createddate">Update</th>
					<th scope="col" class="sort" data-sort="createddate">Delete</th>
					
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
						while($catch = mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $catch['id'];?></td>
					<td><?php echo $catch['catid'];?></td>
					<td><img  src="<?php echo 'image/upload/'.$catch['event_image'];?>" alt="" style=" height:80px; border-radius:80px;"></td>
					
			
					<td><?php echo $catch['event_name'];?></td>
					<td><?php echo $catch['description'];?></td>
					<td><?php echo $catch['type_event'];?></td>
					<td><?php echo $catch['price'];?></td>
					<td><img src="<?php echo 'image/detail_Image/'.$catch['detail_image']?>" alt="" style="height:90px;"></td>
					<td><?php echo $catch['start_date'];?></td>
					<td><?php echo $catch['end_date'];?></td>
					<td><?php echo $catch['location'];?></td>
					
				
					<td><a  href="../admin/add-event.php?edit=<?php echo $catch['id']; ?>">Edit</a></td>
					<td><a  href="../admin/ajax/delete_event.php?delete=<?php echo $catch['id']; ?>">Delete</a></td>
					
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

