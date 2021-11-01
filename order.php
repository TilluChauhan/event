<?php 
session_start(); 
		include 'admin/config/config.php';
		$us=$_SESSION['login'];
		//print_r($us);
		$sql="SELECT * FROM booking B JOIN add_event AE ON B.event_id=AE.id where B.user_id='".$us."'";
		$result=mysqli_query($conn, $sql);
		//print_r($result);
			//$sql="SELECT * FROM booking bf JOIN add_event ae
			//ON bf.event_id=ae.id";
	//$resultr=mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<!---head--->
		<?php include 'include/head.php';?>
	</head>
	<body>
		<!--header-->
		<?php include 'include/header.php';?>
<!--header-->
<!--menu-->
		<?php include 'include/menu.php';?>
<!--menu-->
	<section class="mn">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12">
					<div class="mn1">
						 <h2 style="text-align:center;">Order Table</h2>
         
  <table class="table table-dark table-striped">
    <thead>
	
      <tr class="qpl">
        <th>Booking id</th>
		
        <th>Event name</th>
         <th>Event image</th>
		<th>Event Price</th>
		<th>Event Ticket</th>
		<th>Gst</th>
		<th>Total Price</th>
		<th>order date</th>
		
		<th>Cancel Order</th>
		
      </tr>
    </thead>
    <tbody>
      
	  <?php while($order=mysqli_fetch_array($result)){
		  //print_r($order);
		  ?>
		  <tr class="qpl">
		  <td><?php echo $order['booking_id']?></td>
		   
		   <td><?php echo $order['eventname']?> </td>
		   <td><img src="<?php echo 'admin/image/upload/'.$order['event_image']?>" style="width:50px; border-radius:80px;"></td>
		   <td><?php echo $order['perprice']?> </td>
		   <td><?php echo $order['quantity']?> </td>
		   <td><?php echo $order['gst']?> </td>
		   <td><?php echo $order['totalprice']?> </td>
		  
		   <td><?php echo $order['createddate']?> </td>
		   <td><a type="button" class="btn btn-danger qp112" href="admin/ajax/delete_order.php?cancel=<?php echo $order['booking_id']?>">Cancel Order</a></td>
		</tr>
		  <?php
	  }
	  ?>
        
  
    </tbody>
  </table>
						
					</div>
				</div>
			</div>
		</div>
	</section>
		
		 <!---Script--->
		<?php include 'include/script.php'?>
		<!----Script--->
		<script>
		
		</script>
	</body>
</html>