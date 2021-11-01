<?php 
	include 'config/config.php';
	$sql="select * from slider_event";
	$result=mysqli_query($conn, $sql);
	
	
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
            </div>
			
			<?php
				$date   = new DateTime('2000-08-01');
				echo $date->format('d-M-Y');
			?>
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                    <th scope="col" class="sort" data-sort="budget">Slider_Image</th>
					<th scope="col" class="sort" data-sort="createddate">detail_Image</th>
                    <th scope="col" class="sort" data-sort="status">Event-name</th>
                    <th scope="col" class="sort" data-sort="description">description</th>	
					<th scope="col" class="sort" data-sort="createddate">Start_date</th>
					<th scope="col" class="sort" data-sort="createddate">End_date</th>
					<th scope="col" class="sort" data-sort="createddate">Location</th>
					<th scope="col" class="sort" data-sort="createddate">price</th>
						<th scope="col" class="sort" data-sort="createddate">Detail</th>
						<th scope="col" class="sort" data-sort="createddate">Term</th>
					<th scope="col" class="sort" data-sort="createddate">Update</th>
					
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
						while($catch = mysqli_fetch_array($result)){
					?>
				<tr>
				
					<td><?php echo $catch['id']?></td>
				<td><img  src="<?php echo 'image/slider/'.$catch['slider_image'];?>" style=" height:80px; border-radius:80px;"></td>
					<td><img src="<?php echo 'image/slider/'.$catch['detail_image']?>" style="height:80px; border-radius:80px;"></td>
					<td><?php echo $catch['event_name']?></td>
					<td><?php echo $catch['description']?></td>
					<td><?php echo $catch['start_date']?></td>
					<td><?php echo $catch['end_date']?></td>	
					<td><?php echo $catch['location']?></td>
					<td><?php echo $catch['price']?></td>
					<td><?php echo $catch['detail']?></td>
					<td><?php echo $catch['term']?></td>
						<td><a  href="../admin/add-slider.php?edit=<?php echo $catch['id']; ?>">Edit</a></td>
					
				
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

