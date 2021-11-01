
<?php 
	include 'config/config.php';

	$sql="SELECT * FROM booking bf JOIN add_event ae
			ON bf.event_id=ae.id";
	$result=mysqli_query($conn,$sql);
	
	
	//"select * from booking join add_event on booking.eventid=add_event.id";
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
              <b class="mb-0">Event List</b>
					<a href="add-event.php" class="btn btn-Danger">Add</a>
					<a  class="btn btn-Danger">Update</a>
            </div>
				
		
			
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">booking_id </th>
                    <th scope="col" class="sort" data-sort="budget">user_id</th>
					<th scope="col" class="sort" data-sort="status">event_id</th>
                    <th scope="col" class="sort" data-sort="status">event_Image</th>
					
					<th scope="col" class="sort" data-sort="status">event_name</th>
					<th scope="col" class="sort" data-sort="status">User_name</th>
                    <th scope="col" class="sort" data-sort="description">perprice</th>
                    <th scope="col" class="sort" data-sort="createddate">gst</th>
					<th scope="col" class="sort" data-sort="createddate">	quantity</th>
					<th scope="col" class="sort" data-sort="createddate">	totalprice</th>
					<th scope="col" class="sort" data-sort="createddate">	status</th>
					<th scope="col" class="sort" data-sort="createddate">	createddate</th>
				
					
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
					  <?php 
					  //print_r($result);
					 // print_r($result);
						while($bcatch=mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $bcatch['booking_id']?></td>
					<td><?php echo $bcatch['user_id']?></td>
					<td><?php echo $bcatch['event_id']?></td>
					<td><img  src="<?php echo 'image/upload/'.$bcatch['event_image'];?>" alt="" style=" height:100px; border-radius:100px;"></td>
					<td><?php echo $bcatch['eventname']?></td>
					<td><?php echo $bcatch['username']?></td>
					<td><?php echo $bcatch['perprice']?></td>
					<td><?php echo $bcatch['gst']?></td>
					<td><?php echo $bcatch['quantity']?></td>
					<td><?php echo $bcatch['totalprice']?></td>
					<td><?php echo $bcatch['status']?></td>
					<td><?php echo $bcatch['createddate']?></td>
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