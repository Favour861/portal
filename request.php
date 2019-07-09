<?php session_start() ?>


	<?php 
	if(isset($_GET['username'])){
	$uname=$_GET['username'];
	$pword=$_GET['password'];
	$upword=sha1($pword);
	$con = mysqli_connect("localhost","root","","portal");
	$uselect = mysqli_query($con, "SELECT * from info_tb where username='$uname' or id='$uname'");
	$s="";
	$pw="";
	$mat="";
	while ($s=mysqli_fetch_array($uselect)){
		$pw=$s['password'];
		$mat=$s['id'];
	}
		if($upword==$pw&&$uname!==""){
			$_SESSION['userlog']=$uname;
			$_SESSION['userpass']=$pword;
			// http_redirect('get', 'dashboard.php');
			echo "<script>window.open('dashboard.php','_self')</script>";
		}else if($uname==$mat&&$uname!==""&&$pword==$pw){
			$_SESSION['userlog']=$uname;
			$_SESSION['userpass']=$pword;
			// http_redirect('get', 'dashboard.php');
			echo "<script>window.open('dashboard.php','_self')</script>";
		}
		else{
			$msg = 'Invalid Username or Password';
			include('login.php');
			//echo "<script>window.open('loginfail.php','_self')</script>";
		}     
	}else{
		echo "<script>window.open('login.php','_self')</script>";
	}
?>
	