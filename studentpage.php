<?php
	include 'config1.php';
	session_start();


	if (isset($_POST["submit"])) {
		//username and password sent from the form
		$matric=mysqli_real_escape_string($db,$_POST['matric']);
		$password=mysqli_real_escape_string($db,$_POST['password']);


		$sql="SELECT id from student WHERE Matric='$matric' and Password='$password'";
		$result=mysqli_query($db,$sql);


		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active=$row['active'];

		$count=mysqli_num_rows($result);

		//if result matched $matric and $password,table row must be 1

		if ($count==1) {
			session_register('matric');
			$_SESSION['login_user']=$matric;
			header("location: welcome.php");

		}
		else{
			$error="Your login name or password is invalid";
		}

	}
?>












<!DOCTYPE html>
<html>
<head>
	<title>Student Page</title>
</head>
<body>
	<h2>Student login</h2>
	<form method="POST" action="">
		<h4><a href="studentdetails.php">Don't have an account?Fill in your details here</a></h4>
		Matric number:<input type="text" name="matric" required><br>
		Password:<input type="password" name="password" required><br>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>