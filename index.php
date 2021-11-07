<?php 
 session_start(); 
 
		include 'admin/config/config.php';
		$qcat="select * from category";
		$qcatres=mysqli_query($conn, $qcat);
		
		$qcat1="select * from category";
		$qcatres1=mysqli_query($conn, $qcat1);
		//print_r($qcatres);
		//$catid=$_GET['cat'];
		//$catid=false;
			//print_r($catid);
			$qcat2="select * from category";
		$qcatres2=mysqli_query($conn, $qcat2);
		
		$qcat3="select * from category";
		$qcatres3=mysqli_query($conn, $qcat3);
		
		if(isset($_GET['cat'])){
					$catid=$_GET['cat'];
		$sql="select * from add_event where catid='".$catid."'";
	
		}else{
			$sql="select * from add_event ";
		}
		$result=mysqli_query($conn, $sql);
	
	//$id=$_GET['id'];
	//print_r($id);
	//$catid=$_GET['cat'];
	
	
	$psql="select * from promotion";
	$stcatch=mysqli_query($conn,$psql);
	//$pcatch=mysqli_fetch_array($catch);
	//print_r($pcatch);

	
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

		<section>
			<div class="sec2">
				<div class="">
					<div  id="my"class="owl-carousel owl-theme">
						 <?php 
						while($pcatch = mysqli_fetch_array($stcatch)){
					?>
						<div class="item"><a href="<?php echo $pcatch['url']?>"><img src="<?php echo 'admin/image/promotion/'.$pcatch['image'];?>"></a></div>
						
						
										<?php
				  }
				  ?>
					</div>
					</div>
				</div>
			
		</section>
		<section class="sec3">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="tt">
							<div >
								<p class="tt1">Filter</p>
										<div id="accordion">

										  <div class="card tt67">
											<div class="tt89">
											  <button class="card-link" data-toggle="collapse" href="#collapsethree">
											   <i class="fas fa-chevron-down"></i> Date
											  </button>
											</div>
											<div id="collapsethree" class="collapse">
											  <div class="card-body">
											 		  	 <?php 
									
						while($pcalp3 = mysqli_fetch_array($qcatres3)){
							
					?>
					<a  type="button" class="  " href="index.php?cat=<?php echo $pcalp3['catid']?>"> <button><?php echo $pcalp3['cat_name'];?></button></a>
						
									
										<?php
							
				  
						}
				  ?>
						 
											  
												<button>Today</button>
												 <button>Tommorrow</button>
												 <button>This Weekend</button>
											  </div>
											</div>
										  </div>
										  
										  <div class="card tt67">
											<div class="tt89">
											  <button class="card-link" data-toggle="collapse" href="#collapseOne">
											   <i class="fas fa-chevron-down"></i> Language
											  </button>
											</div>
											<div id="collapseOne" class="collapse">
											  <div class="card-body">
											  	 <?php 
									
						while($pcalp2 = mysqli_fetch_array($qcatres2)){
							
					?>
					<a  type="button" class="  " href="index.php?cat=<?php echo $pcalp2['catid']?>"> <button><?php echo $pcalp2['cat_name'];?></button></a>
						
									
										<?php
							
				  
						}
				  ?>
												<button>English</button>
												 <button>Hindi</button>
												 <button>Punjabi</button>
												 <button>Gujarati</button>
											  </div>
											</div>
										  </div>
										  
										   <div class="card tt67">
											<div class="tt89">
											  <button class="card-link" data-toggle="collapse" href="#collapsetwo">
											   <i class="fas fa-chevron-down "></i>Categories
											  </button>
											</div>
											<div id="collapsetwo" class="collapse">
											  <div class="card-body">
								 <?php 
									
						while($pcalp1 = mysqli_fetch_array($qcatres1)){
							
					?>
					<a  type="button" class="  " href="index.php?cat=<?php echo $pcalp1['catid']?>"> <button><?php echo $pcalp1['cat_name'];?></button></a>
						
									
										<?php
							
				  
						}
				  ?>
											  </div>
											</div>
										  </div>
										  
										  <div class="card tt67">
											<div class="tt89">
											  <button class="card-link" data-toggle="collapse" href="#collapsefive">
											   <i class="fas fa-chevron-down "></i>More filter
											  </button>
											</div>
											<div id="collapsefive" class="collapse">
											  <div class="card-body">
												<button>Online Streaming</button>
												<button>Outdoor Events</button>
												<button>Kids Events</button>
												
											  </div>
											</div>
										  </div>
										  
										  

										  

										</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="tt">
							<div class="tt1">
								Events In National Capital Region(NCR)
							</div>
							<div class="tt3">
									 <?php 
									 $count=null;
						while($pcalp = mysqli_fetch_array($qcatres)){
							if($count>2){
					?>
					<a  type="button" class="btn qs qs909 " href="index.php?cat=<?php echo $pcalp['catid']?>"> <?php echo $pcalp['cat_name']?></a>
						
									
										<?php
							}
										$count++;
				  
						}
				  ?>
					
							</div>
							<div class="row">
							 <?php 
						while($catch = mysqli_fetch_array($result)){
					?>
								<div class="col-lg-3 col-md-4 col-6">
								<div class="tt90">
									<div class="ty">

									<a href="detail.php?id=<?php echo $catch['id']; ?>">	<img src="<?php echo 'admin/image/upload/'.$catch['event_image']?>" alt=""></a>
									</div>
									<div>
										<p class="tt6">
											<?php echo $catch['event_name'];?>
										</p>
										<p class="tt7">
											<?php echo $catch['location']?>
										</p>
										<p class="tt7">
											<?php echo $catch['type_event'];?>
										</p>
										<p class="tt7 tt8">
											Rs.<?php echo $catch['price'];?>
										</p>
									</div>
									
									</div>
								</div>
								<?php
				  }
				  ?>
						
								
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
		<script>
		
		
			$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});
		$(document).ready(function(){
			$('#change').keyup(function(){
				var input=$(this).val();
				var data={'T_input':input};
				$("#searchwrap").html("");
				$.ajax({
					type:'POST',
					url:'admin/ajax/searching.php',
					data:data,
					success:function(res){
						var data = $.parseJSON(res);
						for(var i = 0; i<data.length; i++){
							$("#searchwrap").append("<li><a href=detail.php?id=10 class=al>"+data[i].event_name+"</a></li>");
							//$("#searchwrap").append("<a href=(+data[i].id+)>"+data[i].id+"</a>");
							//console.log(data);
						}
					}
				});
			});
		});
			
	
	</script>	
	
	
	</body>
</html>