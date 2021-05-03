<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$department=$_POST['dept'];
$level=$_POST['level'];
$password=$_POST['password'];



/*$sql="Create database student";
	if (mysqli_query($conn,$sql)) {
		echo "Database created";
		# code...
	}
	else{
		echo "error creating".mysqli_error($conn);
	}*/
if (isset($_POST["submit"])) {
    $conn=mysqli_connect("localhost","root","","student");

if ($conn==false) {
	die("Error connecting to database". mysqli_connect_error());

}

	
/* $table= "Create table info(
              Matric INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
              Name VARCHAR(40) NOT NULL,
              Email VARCHAR(30) NOT NULL,
              Gender VARCHAR(10) NOT NULL,
              Department VARCHAR(20) NOT NULL,
              Level INT(6) NOT NULL,
              Password VARCHAR(10) NOT NULL)";
    if (mysqli_query($conn,$table)) {
		echo "Table created";
	
	}
	else{
		echo "error creating table".mysqli_error($conn);
	}*/

	

$sql="INSERT INTO info (Name,Email,Gender,Department,Level,Password) 
	      VALUES('$name','$email','$gender','$department','$level','$password')";
if (mysqli_query($conn,$sql)) {
	echo "Values successfully inserted";
    }
else{
	echo "Error inserting values" . mysqli_error($conn);
	
}

mysqli_close($conn);
}
	









?>