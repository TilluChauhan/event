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
						<img src="image/pop2.jpg" class="mp">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
					<div class="mp1">
						<div class="mp35"><i class="fas fa-users"></i></div>
						<div class="mp2">Resgister User</div>
						<div action="/action_page.php">
						 <div class="form-group">
							<label for="name">Enter Name</label>
							<input type="text" class="form-control" placeholder="Enter name" id="name">
						  </div>
						  <div class="form-group">
							<label for="name">Image</label>
							<input type="file" class="form-control" id="uimage">
						  </div>
						  <div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
						  </div>
						  <div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="pwd">
						  </div>
						  <div class="form-group">
							<label for="name">Enter Mobile</label>
							<input type="text" class="form-control" placeholder="Enter mobile" id="mobile">
						  </div>
						  <div class="form-group form-check">
							<label class="form-check-label">
							  <input class="form-check-input" type="checkbox"> Remember me
							</label>
						  </div>
						  <div class="mp66">
						  <button  id="sign" class="btn">Signup</button>
						  </div>
						</div>
						<a  href="#">Forget Password</a>
						<p>Do not have account?<a  href="#">register</a></p>
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
	
	
			$('#sign').click(function(){
			var name = $('#name').val();
			var image=$("#uimage")[0].files[0];
			var email=$('#email').val();
			var pass=$('#pwd').val();
			var mobile=$('#mobile').val();
			console.log(image);
			//console.log(name);
			//console.log(email);
			//console.log(pass);
			//console.log(mobile);
			
			var data=new FormData();
			data.append('T_name',name);
			data.append('T_image',image);
			data.append('T_email',email);
			data.append('T_pass',pass);
			data.append('T_mobile',mobile);
			console.log(data);
			
			$.ajax({
				type:'POST',
				url:'admin/ajax/signup.php',
				contentType:false,
				processData:false,
				data:data,
				success:function(response){
					//console.log(response);
					if(response == 1){
							window.location.href = "login.php";
							
						} else{
					
						
					}
				}
			});
			
			
	});
	
	
	
	
});	
		</script>
	</body>
</html>