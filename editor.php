<?php
	$con = mysqli_connect("localhost","root","","portal");
	$session = $_GET['user'];
	$lname=$_GET['lname'];
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$gdr=$_GET['gdr'];
	$dob=$_GET['dob'];
	$uname=$_GET['user'];
	$up=$_GET['pn'];
	$ue=$_GET['em'];
	// $fac=$_GET['fac'];
	// $dept=$_GET['dept'];
	$edit=mysqli_query($con, "UPDATE info_tb set lastname='$lname', firstname='$fname', middlename='$mname', gender='$gdr', userdate='$dob', phonenumber='$up', email='$ue', username='$uname' where username='$session' or id='$session'");
	echo "<script>window.open('dashboard.php','_self')</script>";
?>