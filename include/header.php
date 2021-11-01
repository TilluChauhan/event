<?php 
	if(isset($_SESSION['login'])){
	$us=$_SESSION['login'];
	$sql="select  * from loginuser where cid='".$us."' ";
	$resultq=mysqli_query($conn, $sql);
	//print_r($resultq);
	}
	?>

<section class="sec0">
			<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="q1">
								<div class="qq1"><img src="image/demo11.png" alt="#"></div>
								<div class="qq2">
									<div class="qq4"><i class="fas fa-search"></i></div>
									<div class="qq3">
										<input type="text" class="form-control form-control-sm tp" placeholder="Search for movies,Events,Plays,Sports and Activities" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="q1">
								<div class="qq5">
									
									  
									  <?php 
										if(isset($_SESSION['login']) && $_SESSION['login'] != ''){
											?>
									<?php while($qaz=mysqli_fetch_array($resultq)){
											?>	
											<div class="dropdown">
										
											<button class="njkl" data-toggle="collapse" data-target="#demo"> <img src="<?php echo 'admin/image/user/'.$qaz['image']?>" style="width:30px; border-radius:80px;"><span class="njo1"><?php echo $qaz['name']?></span></button>
												<div class="mklp">
												<div id="demo" class="collapse njo">
												
													<div class="ax1">Welcome profile</div>
													<div class="ax2"><i class="fas fa-envelope"></i><span><?php echo $qaz['email']?></span></div>
													<div class="ax2"><i class="fas fa-mobile-alt"></i><?php echo $qaz['mobile']?></div>
													<button class="bbhj1"><a class="dropdown-item  qq90" href="order.php">My Order</a></button>
													<button class="bbhj1"><a class="dropdown-item  qq90" href="logout.php">Logout</a></button>
													</div>
												</div>
							
											

		
											<?php
										}
										?>	
																						
											<?php
										} else {
											?>
			

												<!--<a  href="Signup.php" class="btn qq90">Signup</a>-->
												
		
												<a  href="login.php"  class="btn qq90">Login</a> 
												
												</div>
											
											<?php
										}
									  ?>
									  
									  
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		