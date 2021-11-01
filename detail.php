	<?php 


include 'admin/config/config.php';
 session_start();
 $user_id = null;
 
	if(isset($_SESSION['login']) && $_SESSION['login'] != null){
		$user_id = $_SESSION['login'];
	}
	//print_r($user_id);
	$id=$_GET['id'];
	$sid=$id;
	
	$sql="select * from add_event where id='".$sid."' ";

	$result=mysqli_query($conn,$sql);
	$catch=mysqli_fetch_array($result);
	
	$usersql="select * from loginuser where cid='".$user_id."' ";
	$uresult=mysqli_query($conn,$usersql);
	$ucatch=mysqli_fetch_array($uresult);
	//print_r($ucatch);
	
	
	$dsql="select * from add_event where feature=1 " ;
	$dresult=mysqli_query($conn, $dsql);
	//print_r($dresult);
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
	
		
		<section class="sec9">
			<div class="container">
										
			
				
				<div class="row ro2">
				
					<div class="col-lg-12 col-md-12">
				
						<div class="aa" style="background-image:url(<?php echo 'admin/image/detail_Image/'.$catch['detail_image']?>);">
							
						</div>
						<div class="aa29">

						<img src="<?php echo 'admin/image/detail_Image/'.$catch['detail_image']?>" alt="">
						
						</div>
				
					</div>
				
				
				</div>
				
			</div>
		</section>
							
		<section class="sec9 sc00">
			<div class="container">
						<div class="row ro2" >
							<div class="col-lg-12 col-md-12">
								<div class="ss">
									<div class="ss1">
				
										<p class="ss2"><?php echo $catch['event_name'];?></p>
										<p class="ss3"><?php echo $catch['type_event'];?><?php echo $catch['description'];?></p>
					
									</div> 
									<div class="ss4">
										
												<button data-toggle="modal" data-target="#myModal" >BOOK</button>
											
													
												
									</div>
								</div>

							</div>

						</div>

	<?php include 'include/modal.php';?>
						<div class="row ro2" >
							<div class="col-lg-12 col-md-12">
								<div class="dd">
													<?php $sedate= new Datetime($catch['start_date'])?>
									<?php $eedate= new Datetime($catch['end_date'])?>
									<?php echo $sedate->format('d M Y');?> To <?php echo $eedate->format('d M Y');?><i class="fas fa-map-marker-alt"></i> <span><?php echo $catch['location']?> | Rs.<?php echo $catch['price']?></span>
								</div>
							</div>
						</div>
			</div>
				
			
		</section>
		
		<section class="sec10">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="ff">
						<p class="ff3">VOICE</p>
							<div class="ff1">
								
								<div class="ff90"><img src="image/demo31.jpg"></div>
								<div class="ff2 ff5">Kunal Verma</div>
							</div>
						</div>
						
						<div class="gg">
							<div class="gg1">Share This Event</div>
							<div class="gg2"><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="ff">
							<div class="hh">
								<p class="hh1">Click on interested to stay updated about this events.</p>
								<div class="hh2">
									<div class="hh3">
										<p class="hh4"><i class="fas fa-thumbs-up"></i>108</p>
										<p class="hh5">People have shown interest recently</p>
									</div>
									<div class="hh3  hh6">
										<button>Interested?</button>
									</div>
								</div>
							</div>
						</div>
						
						<div class="hh7"> 
							<h5>About</h5>
							<p class="hh8"><?php echo $catch['detail']?>
							</p>
							
							<button  class="hj" data-toggle="collapse" data-target="#demo">Read more</button>

							 <div id="demo" class="collapse hj1">
								If you attended his show in the last one year, send your friends.

								Note: Social distancing will be followed. Mask is compulsory.
							</div>
							<div>
								 <div class="card tt67">
											<div class="tt89">
											  <button class="card-link" data-toggle="collapse" href="#demo1">
											   Terms & Condition<i class="fas fa-chevron-down ji"></i> 
											  </button>
											</div>
											 <div id="demo1" class="collapse ji1">
												<?php echo $catch['term'];?>
										</div>
										  </div>
								
								
							</div>
							
							
							<p class="hk1">
								You may also like
							</p>
							<div class="owl-carousel owl-theme">
							<?php while($drow=mysqli_fetch_array($dresult)){
								?>
								<div class="item jk2">
								<a href="detail.php?id=<?php echo $drow['id']?>"><img  class="jk1" src="<?php echo 'admin/image/upload/'.$drow['event_image']?>"></a>
								<div class="fgh">
									<?php echo $drow['event_name']?>
									</div>
								</div>
								<?php
							}?>
								
								
								
							</div>
									
						</div>
					</div>
					<div class="col-lg-3 col-md-12">
						<div class="ff">
							<div class="jj"><i class="fas fa-ticket-alt"></i>Contact ticketing & Fast-track Enrty with M-ticket<br>
								<span><a  class="jj1" href="#">Learn How ></a></span>
								
							</div>
							<p class="jj2">National Capital Region (NCR)</p>
							
							
							
							<div class="card tt67">
											<div class="tt89">
											  <button class="card-link jj3" data-toggle="collapse" href="#collapsefive">
											  Helium Comedy Studio:new Delhi <i class="fas fa-chevron-down"></i> 
											  </button>
											</div>
											<div id="collapsefive" class="collapse">
											  <div class="card-body jj4">
												La Vie En Rose Cafe, 253, Westend Marg, Saiyad Ul Ajaib Extension, Saket, Delhi, NCR 110016, India
											  </div>
											  <div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13995.178286314647!2d77.27073472947521!3d28.725684668096097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfea946d59bf9%3A0x88174d24db34ee98!2sShiv%20Vihar%2C%20Karawal%20Nagar%2C%20Delhi%2C%20110094!5e0!3m2!1sen!2sin!4v1635432468184!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
											</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</section>
		

		
		
		
		
		<!---footer--->
		<?php include 'include/footer.php';?>
		<!---footer--->
		 <!---Script--->
		<?php include 'include/script.php'?>
		<!----Script--->
		<script >
		
		
			$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
});
	$(document).ready(function(){
		//event  
	$("#cars").change(function(){
		 var Ticket = $(this).val();
		 var price="<?php echo $catch['price']?>";
		 var event_price=price*Ticket;
		 //alert(id);
		 //alert(price);
		 
		 var gst=event_price*0.18;
		 var total=parseInt(gst+event_price);
		$('#event_price').html(event_price);
		$('#gst').html(gst);
		$('#total').html(total);
		 //console.log(event_price);
		 //console.log(gst);
		//console.log(total);
		
		
		
		 

});

	$('#mop').click(function(){
			var price="<?php echo $catch['price']?>";
			var username="<?php echo $ucatch['name']?>";
			//console.log(username);
			var eventname="<?php echo $catch['event_name']?>";
		
		
			//console.log(image);
				//var imagename="<php echo $catch['event_image']>";
			//console.log(imagename);
			var event_id="<?php echo $catch['id']?>";
			var user_id="<?php echo $user_id?>";
			var event_price=$('#event_price').html();
			var ticket=$('#cars').val();
			//console.log(ticket);
			var gst=$('#gst').html();
			var total=$('#total').html();
		
		
			//console.log(price);

			//console.log(event_id);
			//console.log(user_id);
			
			//console.log(gst);
			//console.log(event_price);
			//console.log(total);
		
			
			var data={T_event_id:event_id,T_eventname:eventname, T_user_id:user_id,T_username:username,T_price:price,T_eventprice:event_price,T_gst:gst,T_total:total,T_ticket:ticket}
			
			$.ajax({
				type:'POST',
				url:'admin/ajax/buy.php',
				data:data,
				
				success:function(resp){
					//console.log(resp);
					if(resp==1 ){
										//swal({  
										  //title: "Good job!",  
										  //text: "Click!",  
										  //icon: "success",  
										 // button: "oh yes!",  
										  
								//});  
								
						swal("Gud Job!", "Your Booking is successfeully","success");
						$("#myModal").modal('hide');
						
						//window.location.href = "detail.php";
						//location.reload();
					}else{
						
						swal("Something get wrong!", "Please correct your information","warning");
					}
				
				}
				
				
			});
			
 
			
		});
	
	

	
		
	});
		</script>
		
	</body>
</html>