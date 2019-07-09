<!-- <!Doctype html>
<html>
<head>
	<title>REGISTER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery3.3.1.js"></script>
</head>

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
<body id="body" style="display: none">
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
					<li class="nav-item" style="position: absolute;right: 100px"><a href="login.php" class="text-white">Sign in</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid" id="page-bound">
		<div class="row">
			<!-- <div class="col-md-4 pl-md-2 col-sm-12" style="font-family: Aharoni; padding-top: 100px; color: #D8D8D8; text-shadow: 2px 2px 5px green">
				<h1>WELCOME TO</h1><br>
				<h1>RUBY COLLEGE</h1><br>
				<h1>OF ENVIRONMENTAL</h1><br>  
				<h1>STUDIES</h1>
			</div> -->
			<div class="col-md-10 offset-1" style="background: rgba(230,230,230,90%); margin-top: 10px; border-radius: 5px; padding-bottom: 20px;">
				<h4 align="center" style="border-bottom: 1px solid green; padding: 10px;">Register Here</h4>
				<div class="form mt-4">
					<p id="success" align="center" class="bg-success" style="display: none; border-radius: 3px;">Registation successful. Proceed to <a href="login.php" class="text-white">Sign in</a></p>
					<p id="fail" align="center" class="bg-danger" style="display: none; border-radius: 3px;">Registation unsuccessful. Try <a href="register.php" class="text-white">again</a></p>
					<p id="matNo" align="center" style="display: none">Your Matric No is: <span id="mn"></span> </p> 
					<p class="text-danger" id="req" style="display: none;"><sup>*</sup>All fields required</p>

					<form class="" action="registration.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-6">
						<label>Lastname:</label>
						<input  class="form-control" type="text" name="lname"  required placeholder="Last Name">
						<label>Firstname:</label>
						<input  class="form-control" type="text" name="fname"  required placeholder="First Name">
						<label>Middlename:</label>
						<input class="form-control"  type="text" name="mname"  required placeholder="Middle Name">
						<label>Date of Birth:</label>
						<input  class="form-control" type="date" name="dob">
						<label>Gender:</label><br>

						<input type="radio" name="gender" value="Male" required  style="margin-right: 10px;">Male
						<input type="radio" name="gender" value="Female"  required style="margin-left: 50px; margin-right: 10px">Female<br>
							<label>Phone Number:</label>
						<input class="form-control" required type="text" name="pn" placeholder="Phone Number">
							</div>
							<div class="col-6">
						<label>Email:</label>
						<input class="form-control"  required type="email" placeholder="E-mail" name="em">
						<label>Faculty:</label><br>
						<select name="fac" id="faculty" onclick="selection()"  class="form-control">
							<option selected="selected">Select</option>
							<option>Faculty of Agric</option>
							<option>Faculty of Engineering</option>
							<option>Faculty of Pure and Applied Sciences</option>
						</select>
						<label>Department:</label>
						<select name="dept" id="department" class="form-control">
							<option selected>Select</option>
						</select>
						<label>Select a Username:</label>
						<input class="form-control"  type="text" name="user" required  placeholder="Username">
						<label>Password:</label>
						<input class="form-control"  type="Password" name="pwd"  required placeholder="Choose a Password">
						<label>Confirm Password:</label>
						<input class="form-control"  type="Password" name="cpwd"  required placeholder="Confirm Password">
						<p class="text-danger" id="mis" style="display: none"><sup>*</sup>Password mismatch</p>
					</div>
					
					</div>
					<div class="row">
						<div class="col-4 offset-4" style="text-align: center;">
						<button class="btn btn-success mt-3" style="width: 100%">REGISTER</button>
						<p class="form-text" align="center">Already have an account? Sign in <a href="login.php">here</a></p>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->