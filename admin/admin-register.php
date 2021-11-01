<?php
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['adminlog']) ){
		header("location:admin-login.php");
	}
	
	$add=true;
	$edit=null;
	$row=null;
	///$ad=$_GET['edit'];
	//print_r($ad);
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$add=false;
		
		$sql="select * from admin_register where id='".$id."' ";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		//print_r($result);
		//print_r($id);
	}
?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'includes/head.php';?>
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="image/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
                <img src="image/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=ad_upgrade_pro" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fas fa-shopping-cart mr-2"></i>
              </span>
              <span class="nav-link-inner--text">Upgrade to PRO</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome To Admin Panel</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for Admin Register.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="image/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="image/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <div role="form">
			  <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" value="<?php echo $row['name']?>"id="adname" placeholder="Enter name" type="text">
                  </div>
                </div>
				 <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="adimage" placeholder="" type="file">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="ademail" value="<?php echo $row['email']?>" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="adpass" value="<?php echo $row['password']?>" placeholder="Password" type="text">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" value="<?php echo $row['mobile']?>" id="admobile"  placeholder="Enter mobile" type="text">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
				<?php if($add){
					?>
					  <button type="button" id="adminsigin" class="btn btn-primary my-4">Sign up</button>
                </div>
					<?php
				}else{
					
					?>
					  <button type="button" id="adminupdatesigin" class="btn btn-primary my-4">Sign up Edit</button>
                </div>
					<?php
				}?>
                
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php include 'includes/script.php'; ?>
  <script>
	$(document).ready(function(){
		$('#adminsigin').click(function(){
			var name =$('#adname').val();
			var image=$('#adimage')[0].files[0];
			var email=$('#ademail').val();
			var pass=$('#adpass').val();
			var mobile=$('#admobile').val();
			console.log(name);
			console.log(image);
			console.log(email);
			console.log(pass);
			console.log(mobile);
			
			var data=new FormData();
			data.append('T_name',name);
			data.append('T_image',image)
			data.append('T_email',email);
			data.append('T_pass',pass);
			data.append('T_mobile',mobile);
			console.log(data);
			
			$.ajax({
				type:'POST',
				url:'ajax/admin-register.php',
				cache:false,
				contentType:false,
				processData:false,
				data:data,
				success:function(res){
					//console.log(res);
					if(res==1){
					swal("Good job!", "You clicked the button!", "success");
						// header("Location: event-list.php");
						 window.location.replace("admin-login.php");
						 
					}else{
						swal("Good job!", "You clicked the button!", "Warning");
					}
				}
			});
			
		});
		
		$('#adminupdatesigin').click(function(){
			var id="<?php echo $row['id']?>";
			var name =$('#adname').val();
			var image=$('#adimage')[0].files[0];
			console.log(image);
			if(image!= ''){
			var imagename="<?php echo $row['image'] ?>";	
			}
			
			console.log(imagename);
			var email =$('#ademail').val();
			var pass =$('#adpass').val();
			var mobile =$('#admobile').val();
			//console.log(name);
			//console.log(email);
			//console.log(pass);
			//console.log(mobile);
			
			var data=new FormData();
			data.append('U_id',id);
			data.append('U_name',name);
			data.append('U_image',image);
			data.append('U_imagename',imagename);
			data.append('U_email',email);
			data.append('U_pass',pass);
			data.append('U_mobile',mobile);
			
			$.ajax({
				type:'POST',
				url:'ajax/update_admin_register.php',
				contentType:false,
				processData:false,
				data:data,
				success:function(res){
					//console.log(res);
					if(res==1){
					swal("Good job!", "You have Successfully Update", "success");
						// header("Location: event-list.php");
						// window.location.replace("admin-login.php");
						 
					}else{
						swal("Something Get Wrong", "You have  Not Successfully Update", "Warning");
					}
				}
				
			});
		});
	});
  </script>
</body>

</html>