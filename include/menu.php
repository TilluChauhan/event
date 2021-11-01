
<?php 
	include 'admin/config/config.php';
	$catsql="select * from category";
	$catresult=mysqli_query($conn,$catsql);
	
	//print_r($catarresult);
?>
<section class="sec1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="w1">
												
							<nav class="navbar navbar-expand-md  navbar-dark w45">
						 

								  <!-- Toggler/collapsibe Button -->
								  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
									<span class="navbar-toggler-icon"></span>
								  </button>

								  <!-- Navbar links -->
								  <div class="collapse navbar-collapse" id="collapsibleNavbar">
									<ul class="navbar-nav ">
									<li class="nav-item">
										<a class="nav-link" href="http://localhost/Event/index.php">Events</a>
									  </li>
									  <?php 
										$count = null;
									  while($catarresult=mysqli_fetch_array($catresult)){
										  if($count<=2){
											?>
											<li class="nav-item">
									
										  	<a class="nav-link" href="index.php?cat=<?php echo $catarresult['catid']?>"><?php echo $catarresult['cat_name'];?></a>
									
											</li>
									  	  <?php  
											  
										  }
										  $count++;
										  
									  }?>
									
									  
									  
									 
									</ul>
									<ul class="navbar-nav  ml-auto">
									  <li class="nav-item ">
										<a class="nav-link " href="#">Live Show</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link " href="#">Coporates</a>
									  </li>
									  <li class="nav-item ">
										<a class="nav-link" href="#">Offers</a>
									  </li>
									   <li class="nav-item">
										<a class="nav-link" href="#">Gift Cards</a>
									  </li>
									  
									</ul>
								  </div>
								  
						</nav>
						</div>
					</div>
				</div>
			</div>
			
		</section>