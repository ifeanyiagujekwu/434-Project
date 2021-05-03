<?php


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


if (isset($_POST["submit"])) {
    $conn=mysqli_connect("localhost","root","","admin");

if ($conn==false) {
	die("Error connecting to database". mysqli_connect_error());

}

	/*$sql1="Create database admin";
	if (mysqli_query($conn,$sql1)) {
		echo "Database created";
		# code...
	}
	else{
		echo "error creating".mysqli_error($conn);
	}
 $table= "Create table info(
              Username VARCHAR(30) NOT NULL PRIMARY KEY,
              Email VARCHAR(30) NOT NULL,
              Password VARCHAR(10) NOT NULL)";*/
    

	



	

$sql="INSERT INTO info (Username,Email,Password) 
	      VALUES('$name','$email','$password')";
if (mysqli_query($conn,$sql)) {
	echo "";
    }
else{
	echo "Error inserting values" . mysqli_error($conn);
	
}

mysqli_close($conn);
}
	



?>

	