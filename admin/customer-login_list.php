<?php 
	include 'config/config.php';
	//$sql="select * from slider_event";
	//$result=mysqli_query($conn, $sql);
	
	//$sql="select * from promotion";
	//$result=mysqli_query($conn,$sql);
	$sql="select * from loginuser";
	
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
              <b class="mb-0">Customer List</b>
            </div>
			
			
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                    <th scope="col" class="sort" data-sort="budget">Name</th>
					<th scope="col" class="sort" data-sort="createddate">email</th>
					<th scope="col" class="sort" data-sort="status">Password</th>
					<th scope="col" class="sort" data-sort="status">Mobile</th>
					<th scope="col" class="sort" data-sort="status">Status</th>
					<th scope="col" class="sort" data-sort="status">Create_date</th>
                  
					
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
							while($catch=mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $catch['cid'];?></td>
					<td><?php echo $catch['name'];?></td>
					<td><?php echo $catch['email'];?></td>
					<td><?php echo $catch['password'];?></td>
					<td><?php echo $catch['mobile'];?></td>
					<td><?php echo $catch['status'];?></td>
					<td><?php echo $catch['createdate'];?></td>
					
				
				</tr>	  
				<?php
							}
				  ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
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

