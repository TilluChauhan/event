<!DOCTYPE>
<html>
	<head>
		<!---head--->
		<?php include 'include/head.php';?>
		<link rel="stylesheet" href="css/custom.css">
		
	</head>
	<body>
	
		<section class="form">
			<div class="container">
			<div class="mop90">
				<div class="mp37"><i>BOOK MY SHOW</i></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12 mp4">
						<img src="image/pp3.jpg" class="mp">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
					<div class="mp1">
						<div class="mp35"><i class="fas fa-users"></i></div>
						<div class="mp2">Login User</div>
						<div action="/action_page.php">
						  <div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="logemail">
						  </div>
						  <div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="logpass">
						  </div>
						  <div class="form-group form-check">
							<label class="form-check-label">
							  <input class="form-check-input" type="checkbox"> Remember me
							</label>
						  </div>
						  <div class="mp66">
						  <button type="submit" id="login" class="btn">Login</button>
						  </div>
						</div>
						<a  href="">Forget Password</a>
						<p>Do not have account?<a  href="signup.php">register</a></p>
						</div>
					</div>
					</div>
					</div>
				</div>
			
		</section>
		
		 
		<!---Script--->
		<?php include 'include/script.php'?>
		<!----Script--->
		<script>
			$(document).ready(function(){
				$("#login").click(function(){
					var email=$("#logemail").val();
					console.log(email);
					var pass=$("#logpass").val();
					
					var obj = {
						'T_email' : email,
						'T_pass' : pass,
					}
					
					$.ajax({
						type:'POST',
						url:'admin/ajax/login.php',
						data:obj,
						success:function(response){
							console.log(response);
							if(response == 1){
								window.location.href = "index.php";
							}else{
							 
									//window.alert("Pls enter your correction information");
								//swal( "Please correct your information");
							swal("Something get wrong!", "Please correct your information","warning");
	//swal("Something get wrong!", "Please correct your information", "error");
							//swal("Something get wrong!", "Please correct your information", "info");
							//swal("Something get wrong", "Please correct your information");
							}
							
						}
					});
				});
			})
		</script>
	</body>
</html>