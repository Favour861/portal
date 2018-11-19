<?php
	$con = mysqli_connect("localhost","root","","portal");
	$session = $_GET['nc'];
	$cp=$_GET['cp'];
	$newp=$_GET['newp'];
	$cnewp=$_GET['cnewp'];
	// $fac=$_GET['fac'];
	// $dept=$_GET['dept'];
	$uselect = mysqli_query($con, "SELECT * from info_tb where username='$session' or id='$session'");
	$s="";
	$pw="";
	while ($s=mysqli_fetch_array($uselect)){
		$pw=$s['password'];
	}
	if($cp==$pw){
		if($newp==$cnewp){
		$edit=mysqli_query($con, "UPDATE info_tb set password='$newp' where username='$session' or id='$session'");
		echo "<script>window.open('dashboard.php','_self')</script>";
		}else{
			echo "<script>alert('Password Does not match')</script>";
			echo "<script>window.open('changepassword.php','_self')</script>";
		}
	}else{
		echo "<script>alert('Invalid Current Password')</script>";
		echo "<script>window.open('changepassword.php','_self')</script>";
	}
?>