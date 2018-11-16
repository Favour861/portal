<!Doctype html>
<html>
<head>
	<title>LOG IN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery3.3.1.js"></script>
</head>
	<script>
		
	</script>
	<style type="text/css">
		body{
			background: #E6E6FA;
		}
		nav{
			box-shadow: 2px 2px 5px lightgreen;

		}
		.nav li a{
			text-decoration: none;
			font-weight: bold;


		}
		.nav li a:hover{
			opacity: 0.7;
		}
		#page-bound{
			background: url(homepage.jpg);
			background-repeat: no-repeat;
			background-size: cover;
 			position: absolute;
 			height: 594px;
		}
		input{
			color: green !important;
		}
	</style>
<body>
	<nav class="navbar navbar-expand-md bg-success">
		<div class="container-fluid" style="padding: 10px;">
			<button href="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#x">
				<span class="navbar-toggler-icon bg-white"></span>
			</button>
			<div class="collapse navbar-collapse" id="x">
				<ul class="nav nav-bar">
					<li class="nav-item pl-3"><a href="#" class="text-white">Home</a></li>
					<li class="nav-item pl-3"><a href="#" class="text-white">Take a tour</a></li>
					<li class="nav-item pl-3"><a href="#" class="text-white">Courses Offered</a></li>
					<li class="nav-item pl-3"><a href="#" class="text-white" style="opacity: 0.9;">Student's Portal</a></li>
					<li class="nav-item" style="position: absolute;right: 100px"><a href="register.php" class="text-white">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid" id="page-bound">
		<div class="row">
			<div class="col-md-6 pl-md-5 col-sm-12" style="font-family: Aharoni; padding-top: 100px; color: #D8D8D8; text-shadow: 2px 2px 5px green">
				<h1>WELCOME TO</h1><br>
				<h1>RUBY COLLEGE</h1><br>
				<h1>OF ENVIRONMENTAL</h1><br>  
				<h1>STUDIES</h1>
			</div>
			<div class="col-md-3 offset-2" style="background: rgba(230,230,230,90%); margin-top: 100px; border-radius: 5px; padding-bottom: 20px;">
				<h4 align="center" style="border-bottom: 1px solid green; padding: 10px;">Login Here</h4>
				<div class="form mt-4">
					<p class="bg-danger text-white" style="border-radius: 5px; text-align: center">Invalid Username or Password</p>
					<form class="" action="dashboard.php" method="post">
						<label>Username:</label>
						<input  class="form-control" type="text" name="username" placeholder="Matric No" name="">
						<label>Password:</label>
						<input class="form-control"  type="Password" name="password" placeholder="password">
						<button class="btn btn-success mt-3" style="width: 100%">SIGN IN</button>
						<p class="form-text" align="center">No account yet? Register <a href="register.php">here</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	// $uname=$_POST['username'];
	// $pword=$_POST['password'];
	// $con = mysqli_connect("localhost","root","","portal");
	// $uselect = mysqli_query($con, "SELECT password from info_tb where 'username'='$uname'");
	// 	if($pword==$uselect){
	// 		echo "<script>window.open('dashboard.php','_self')</script>";
	// 	}else{
	// 		echo "<script>window.open('request.php','_self')</script>";
	// 	}
	
?>
</body>
</html>