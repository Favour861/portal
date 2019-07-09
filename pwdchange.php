<?php
	$con = mysqli_connect("localhost","root","","portal");
	$session = $_GET['nc'];
	$cp=$_GET['cp'];
	$newp=$_GET['newp'];
	$cnewp=$_GET['cnewp'];
	// $fac=$_GET['fac'];
	// $dept=$_GET['dept'];
	$rcp = sha1($cp);
	$uselect = mysqli_query($con, "SELECT * from info_tb where username='$session' or id='$session'");
	$s="";
	$pw="";
	while ($s=mysqli_fetch_array($uselect)){
		$pw=$s['password'];
	}
	if($rcp==$pw){
		if($newp==$cnewp){
		$rnewp = sha1($newp);
		$edit=mysqli_query($con, "UPDATE info_tb set password='$rnewp' where username='$session' or id='$session'");
		$pwdchgd = "Password changed successfully";
		include 'dashboard.php';
		}else{
			$ntmtch = "Password does not match";
			include 'changepassword.php';
		}
	}else{
		$curinv = "Invalid current Password";
		include 'changepassword.php';
	}
?>