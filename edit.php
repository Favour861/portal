<?php session_start() ?>

<!Doctype html>
<html>
<head>
	<title>DASHBOARD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../jquery3.3.1.js"></script>
</head>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#toggler").click(function(){
				// if(toggler.innerHTML=="X"){
				// 	toggler.innerHTML="&#8801;";
				// }else if(toggler.innerHTML=="&#8801;"){
				// 	toggler.innerHTML="X";
				// }
				$("#sb").slideToggle(200);
			});
		});
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
		/*#page-bound{
			background: url(homepage.jpg);
			background-repeat: no-repeat;
			background-size: cover;
 			position: absolute;
 			height: 594px;
		}*/
		input{
			color: green !important;
		}
		h6 a{
			color: white;
		}
		h6 a:hover{
			color: white;
			font-weight: bold;
			text-decoration: none;
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
					<li class="nav-item" style="position: absolute;right: 100px"><a href="signout.php" class="text-white">Sign Out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 bg-success" id="sb" style="border-top: 2px solid white; padding-top: 20px">
				<div class="row">
					<div class="col-12" style="text-align: center;">
					<img src="ppix.jpg" class="rounded-circle" width="100px" style="border: 2px solid white">
					<h5 class="text-white" id="dashname"></h5>
					<h6 class="text-white"><b>Dashboard</b></h6>
					</div>
				</div>
				<div class="row" style="border-top: 0.1px solid lightgreen; font-family: segoe UI">
					<div class="col-12 text-white">
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green;  margin-top: 25px;"><a href="dashboard.php"><img src="info3.png" width="25px" style="margin-right: 10px;">Basic Info</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href="edit.php"><img src="edit.png" width="25px" style="margin-right: 10px">Edit info</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href=""><img src="courses.png" width="25px" style="margin-right: 10px">Courses</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href=""><img src="fee.png" width="25px" style="margin-right: 10px">Tuition fee</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href=""><img src="receipt.png" width="25px" style="margin-right: 10px">Receipt</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href=""><img src="result.png" width="25px" style="margin-right: 10px">CGPA</a></h6>
						<h6 style="margin-bottom: 25px; border-bottom: 1px solid green"><a href="changepassword.php"><img src="pwd.png" width="25px" style="margin-right: 10px">Change Password</a></h6>
						<h6 style=""><a href="signout.php"><img src="signout.png" width="25px" style="margin-right: 10px">Sign Out</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-10">
				<div><span id="toggler" style="color: green; font-size: 30pt; cursor: pointer;user-select:none;-moz-user-select:none">&#8801;</span>
				</div>
				<div class="form">
				<form action="editor.php" method="get">
				<h5>Personal Information</h5>
					<div class="row mt-3">
						<div class="col-md-6">
							<label>Full Name:</label><br>
							<input class="form" type="text" id="lname" name="lname" style="width: 32.5%; border-radius: 3px; border: 1px solid lightgrey; height: 40px; padding-left: 10px" placeholder="Last name">
							<input class="form" type="text" id="fname" name="fname" style="width: 32.5%; border-radius: 3px; border: 1px solid lightgrey; height: 40px; padding-left: 10px" placeholder="First name">
							<input class="form" type="text" id="mname" name="mname" style="width: 32.5%; border-radius: 3px; border: 1px solid lightgrey; height: 40px; padding-left: 10px" placeholder="Middle name"><br>
							<label>Gender:</label>
							<input class="form-control" type="text" name="gdr" id="gdr" style="width: 100%">
							<label>Date of Birth:</label>
							<input class="form-control" type="text" name="dob" id="dob" style="width: 100%">
						</div>
						<div class="col-md-6">
							<label>Phone Number:</label>
							<input class="form-control" type="text" name="pn" id="upn" style="width: 100%">
							<label>E-mail:</label>
							<input class="form-control" type="text" name="em" id="uem" style="width: 100%">
							<label>Username on Portal:</label>
							<input class="form-control" type="text" style="width: 100%" id="user" name="user">
						</div>
					</div>
				<h5 class="mt-3">Educational Information</h5>
					<div class="row mt-3">
						<div class="col-md-6">
							<label>Matric Number:</label>
							<input class="form-control" type="text" name="mat" id="mat" disabled style="width: 100%">
							<label>Current Level:</label>
							<input class="form-control" type="text" name="lvl" disabled value="100" style="width: 100%">
						</div>
						<div class="col-md-6">
							<label>Faculty:</label>
							<input class="form-control" type="text" name="fac" id="fac" disabled style="width: 100%">
							<label>Depatment:</label>
							<input class="form-control" type="text" name="dept" id="dept" disabled style="width: 100%">
						</div>
					</div>
					<div class="row">
					<div class="col-12 mt-5" style="text-align: center;">
					<button class="btn btn-success" style="width: 20%">Submit</button>
					</div>
					</div>
				</form>
				</div>

			</div>
		</div>
	</div>
<?php 
	if(isset($_SESSION['userlog'])){
		$session = $_SESSION['userlog'];
		$con = mysqli_connect("localhost","root","","portal");
		$query = mysqli_query($con, "SELECT * from info_tb where username='$session' or id='$session'");
		$col="";
		$lname="";
		while($col=mysqli_fetch_array($query)){
			$lname=$col['lastname'];
			$fname=$col['firstname'];
			$mname=$col['middlename'];
			$gdr=$col['gender'];
			$dob=$col['userdate'];
			$number=$col['id'];
			$pn=$col['phonenumber'];
			$em=$col['email'];
			$fac=$col['faculty'];
			$dept=$col['dept'];
		}
		echo "<script>user.value='".$session."'</script>";
		echo "<script>lname.value='".$lname."'</script>";
		echo "<script>fname.value='".$fname."'</script>";
		echo "<script>mname.value='".$mname."'</script>";
		echo "<script>gdr.value='".$gdr."'</script>";
		echo "<script>dob.value='".$dob."'</script>";
		echo "<script>mat.value='".$number."'</script>";
		echo "<script>fac.value='".$fac."'</script>";
		echo "<script>dept.value='".$dept."'</script>";
		echo "<script>upn.value='".$pn."'</script>";
		echo "<script>uem.value='".$em."'</script>";
		echo "<script>dashname.innerHTML='".$lname.' '.$fname."'</script>";
	}
	else{
		echo "<script>window.open('login.php','_self')</script>";
	}


?>
</body>
</html>