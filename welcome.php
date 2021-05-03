<?php
include 'session.php';
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
				<a href="action.php">Create account for students</a>
				<a href="">Create account for examiners</a>
				<a href="">Delete user</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div>
    
</body>
</html>


