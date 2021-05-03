<?php


$matric=$_POST['matric'];
$password=$_POST['password'];


if (isset($_POST["submit"])) {
    $conn=mysqli_connect("localhost","root","","student");

if ($conn==false) {
	die("Error connecting to database". mysqli_connect_error());

}

	

$sql="INSERT INTO info (Matric,Password) 
	      VALUES('$matric','$password')";
if (mysqli_query($conn,$sql)) {
	echo "";
    }
else{
	echo "Error inserting values" . mysqli_error($conn);
	
}

mysqli_close($conn);
}
	



?>




<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<div>
		<h1>Welcome back Student</h1>
		<nav>
			<p>Home</p>
			<p>Course Registration</p>
			<p>Exam Docket</p>
			<p>News</p>
		</nav>
	</div>
	

</body>
</html>