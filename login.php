<?php
	/*$username=$_POST['name'];
	//$email=$_POST['email'];
	$password=$_POST['password'];


	if ($username && $password) {
		$conn=mysqli_connect("localhost","root","","admin");
		if ($conn==false) {
			die("error connecting".mysqli_connect_error());
			
		}
		$query=mysqli_query("SELECT * FROM info WHERE Username='$username'");
		$numrows=mysqli_num_rows($query);

		if (!$numrows==0) {
			while ($row=mysqli_fetch_assoc($query)) {
				$dbname=$row['name'];
				//$dbemail=$row['email'];
				$dbpassword=$row['password'];
			}
			if ($username=$dbname) {
					if ($password=$dbpassword) {
						echo "youre in";
					}
					else{
						echo "wrong password";
					}
				}
			}
			else{
				echo "nAME IS WRONg";
			}
		}*/
	

	include('config1.php');
	session_start();

	if(isset($_POST["submit"]))  {
		//username and password sent from the form
		$username=trim($_POST['name']);
		$email=trim($_POST['email']);
		$password=trim($_POST['password']);


		$sql="SELECT * id FROM students WHERE email = '$email'";

		$result=mysqli_query($db,$sql);
 
		if (!$result) {
			die('user does not exist');
		}

		$row=mysqli_fetch_array($result,MYSQLI_ASSOC());

		//if result matched $username and $password,table row must be 1

		if ($count==1) {
			session_register('name');
			$_SESSION['login_user']=$username;
			header("location: welcome.php");
			echo "successful";

		}
		else{
			$error="Your login name or password is invalid";
			echo($error);
		}

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<style type="text/css">
		a{
			color: black;
			padding: 20px;
			font-size: 20px;
			border: 20px;
			background-color: #aaeebb;
			margin: 10px;
			border: 1px solid grey;


		}
		.div1{
			display: inline-block;
			margin: 10px;
			list-style: none
			padding: 20px;
			font-family: ariel;

		}
	</style>
</head>
<body>
    	<div>
		<h1>Welcome back,  Admin</h1>
		<div class="div1">
			<nav>
				<a href="check.php">Home</a>
				<a href="studentdetails.php">Create account for students</a>
				<a href="">Create account for examiners</a>
				<a href="">Delete user</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div>
    
</body>
</html>


