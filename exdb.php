<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$department=$_POST['dept'];
$password=$_POST['password'];



	/*$sql="Create database examiner";
	if (mysqli_query($conn,$sql)) {
		echo "Database created";
		# code...
	}
	else{
		echo "error creating".mysqli_error($conn);
	}*/
	if (isset($_POST["submit"])) {
    $conn=mysqli_connect("localhost","root","","examiner");

if ($conn==false) {
	die("Error connecting to database". mysqli_connect_error());

}
 $table= "Create table info(
              Name VARCHAR(30) NOT NULL PRIMARY KEY ,
              Email VARCHAR(30) NOT NULL,
              Gender VARCHAR(10) NOT NULL,
              Department VARCHAR(20) NOT NULL,
              Password VARCHAR(10) NOT NULL)";
    if (mysqli_query($conn,$table)) {
		echo "Table created";
	
	}
	else{
		echo "error creating table".mysqli_error($conn);
	}

	

$sql="INSERT INTO info (Name,Email,Gender,Department,Password) 
	      VALUES('$name','$email','$gender','$department','$password')";
if (mysqli_query($conn,$sql)) {
	echo "Values successfully inserted";
    }
else{
	echo "Error inserting values" . mysqli_error($conn);
	
}

mysqli_close($conn);
}
	






