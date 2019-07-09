
<?php 
	if(isset($_POST['lname'])){
	$id="";
	$con = mysqli_connect("localhost","root","","portal");
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$dob = $_POST['dob'];
	$gdr = $_POST['gender'];
	$pn=$_POST['upn'];
	$em=$_POST['uem'];
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	$faculty = $_POST['fac'];
	$dept = $_POST['dept'];
	$upwd=sha1($pwd);
		$upnex = mysqli_query($con, "SELECT phonenumber from info_tb where phonenumber='$pn'");
		$uemex = mysqli_query($con, "SELECT email from info_tb where email='$em'");
		$unex = mysqli_query($con, "SELECT username from info_tb where username='$user'");
		if(!isset($upnex)){
			$pnex = '* Phone Number already exist';
		}
		if(!isset($uemex)){
			$emex = '* Email already exist';
		}
		if(!isset($unex)){
			$nex = '* Username already exist';
		}
		if($pwd!==$cpwd){
			$pwdmis = '* Password mismatch';
		}
		if($lname==""){
			$lncnb = '* This field cannot be empty';
		}
		if($fname==""){
			$fncnb = '* This field cannot be empty';
		}
		if($mname==""){
			$mncnb = '* This field cannot be empty';
		}
		if($dob==""){
			$dobcnb = '* This field cannot be empty';
		}
		else if($gdr==""){
			$gdrcnb = '* This field cannot be empty';
		}
		if($gdr==""){
			$gdrcnb = '* This field cannot be empty';
		}
		if($pn==""){
			$pncnb = '* This field cannot be empty';
		}
		if($em==""){
			$emcnb = '* This field cannot be empty';
		}
		if($user==""){
			$uscnb = '* This field cannot be empty';
		}
		if($pwd==""){
			$pwcnb = '* This field cannot be empty';
		}
		
		if(isset($pwdmis)||isset($lncnb)||isset($fncnb)||isset($dobcnb)||isset($pncnb)||isset($emcnb)||isset($uscnb)||isset($pwcnb)||isset($gdrcnb)||isset($pnex)||isset($emex)||isset($nex)){
			$regfail = "Registration unsuccessful due to following reasons";
			$err = "An error occurred";
			include 'register.php';

		}
		else{
		$query=mysqli_query($con,"INSERT into info_tb (lastname,firstname,middlename,userdate,gender,phonenumber,email,username,password,faculty,dept) values ('$lname','$fname','$mname','$dob','$gdr','$pn','$em','$user','$upwd','$faculty','$dept')");
		$matno = mysqli_query($con,"SELECT * from info_tb where username='$user'");
		$mn="";
		while ($n=mysqli_fetch_array($matno)) {
			$mn=$n['id'];
		}
		$success = "Registration successful, Your Matric Number is <span class='text-white'>".$mn."</span><br>Proceed to <a href='login.php' class='text-white'>Sign in</a>";
		include 'register.php';
		}
	}else{
		echo "<script>window.open('register.php','_self')</script>";
	}
?>