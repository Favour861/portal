<!Doctype html>
<html>
<head>
	<title>REGISTER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

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
					<!-- <p id="success" align="center" class="bg-success" style="display: none; border-radius: 3px;">Registation successful. Proceed to <a href="login.php" class="text-white">Sign in</a></p> -->
						<?php if(isset($success))
					{ ?>
					<p class="bg-success" style="border-radius: 5px; text-align: center; font-size: 13pt"><?php echo $success ?></p>
				<?php } ?>
				<?php if(isset($regfail))
					{ ?>
					<p class="bg-danger" style="border-radius: 5px; text-align: center; font-size: 15pt"><?php echo $regfail ?></p>
				<?php } ?>
					<form class="" action="registration.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
						<label>Lastname:</label>
						<input  class="form-control" type="text" name="lname" id="ln"  placeholder="Last Name">
						<?php if(isset($lncnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $lncnb; ?></p>
						<?php } ?>
						<label>Firstname:</label>
						<input  class="form-control" type="text" name="fname" id="fn"  placeholder="First Name">
						<?php if(isset($fncnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $fncnb; ?></p>
						<?php } ?>
						<label>Middlename:</label>
						<input class="form-control"  type="text" name="mname" id="mn" placeholder="Middle Name">
						<?php if(isset($mncnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $mncnb; ?></p>
						<?php } ?>
						<label>Date of Birth:</label>
						<input  class="form-control" type="date" name="dob" id="db">
						<?php if(isset($dobcnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $dobcnb; ?></p>
						<?php } ?>
						<label>Gender:</label><br>
						<input type="radio" name="gender" checked value="" style="display: none">
						<input type="radio" name="gender" value="Male"   style="margin-right: 10px;">Male
						<input type="radio" name="gender" value="Female"   style="margin-left: 50px; margin-right: 10px">Female
						<?php if(isset($gdrcnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $gdrcnb; ?></p>
						<?php } ?>
						<p><label>Phone Number:</label>
						<input class="form-control"  type="text" name="upn" id="pn" placeholder="Phone Number"></p>
						<?php if(isset($pnex))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $pnex; ?></p>
						<?php } ?>
						<?php if(isset($pncnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $pncnb; ?></p>
						<?php } ?>
							</div>
							<div class="col-md-6">
						<label>Email:</label>
						<input class="form-control"   type="email" id="em" placeholder="E-mail" name="uem">
						<?php if(isset($emex))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $emex; ?></p>
						<?php } ?>
						<?php if(isset($emcnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $emcnb; ?></p>
						<?php } ?>
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
						<input class="form-control"  type="text" name="user" id="un"  placeholder="Username">
						<?php if(isset($uscnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $uscnb; ?></p>
						<?php } ?>
						<?php if(isset($nex))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $nex; ?></p>
						<?php } ?>
						<label>Password:</label>
						<input class="form-control"  type="Password" name="pwd"   placeholder="Choose a Password">
						<?php if(isset($pwcnb))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $pwcnb; ?></p>
						<?php } ?>
						<label>Confirm Password:</label>
						<input class="form-control"  type="Password" name="cpwd"   placeholder="Confirm Password">
						<?php if(isset($pwdmis))
						{ ?>
							<p class="text-danger" id="mis"><?php echo $pwdmis; ?></p>
						<?php } ?>
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
	</div>

<script type="text/javascript">
	function selection() {

		if(document.getElementById('faculty').value=="Select"){
			document.getElementById('department').innerHTML ="<option>Select</option>"
		}
		if(document.getElementById('faculty').value=="Faculty of Agric"){
			document.getElementById('department').innerHTML ="<option>Department of Agricultural Economics</option><option>Department of Animal Production and Health</option><option>Department of Agricultural Extention and rural development</option><option>Department of Animal Nutrition and Biotechnology</option><option>Department of Crop and Environmental Protection</option><option>Department of Crop Production and Soil science</option>";
		}if(document.getElementById('faculty').value=="Faculty of Engineering"){
			document.getElementById('department').innerHTML="<option>Computer Science and Engineering</option><option>Electronics and Electrical Engineering</option><option>Mechanical Engineering</option><option>Civil Engineering</option><option>Chemical Engineering</option><option>Food Science and Engineering</option><option>Agricultural Engineering</option>"
		}if(document.getElementById('faculty').value=="Faculty of Pure and Applied Sciences"){
			document.getElementById('department').innerHTML="<option>Pure and Applied Biology</option><option>Pure and Applied Chemistry</option><option>Pure and Applied Mathematics</option><option>Pure and Applied Physics</option><option>Statistics</option><option>Science and Laboratory Technology</option>"
		}
	}
	</script>
</body>
</html>