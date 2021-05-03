<?php
    //Include config file
    require_once "config.php";
    //Define variables and initialize with empty values
    $matric_number="";
    $password="";
    $confirm_password="";
    $matric_number_err="";
    $password_err="";
    $confirm_password_err="";
    

    //Processing form when data is submitted
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    	//Validate matric number
    	if (empty(trim($_POST["matric_number"]))) {
    		$matric_number_err="Please enter the matric number";

    	}
    	else{
    		//Prepare a select statement
    		$sql="SELECT matric_number FROM students where matric_number=? ";
    	}

    		if($stmt=mysqli_prepare($link,$sql)){
    			//Bind variables to the prepared statement as parameters
    			mysqli_stmt_bind_param($stmt,"s",$param_matric_number);

    			//set parameters
    			$param_matric_number=trim($_POST["matric_number"]);

    			//attempt to execute the prepared statement
    			if (mysqli_stmt_execute($stmt)) {
    				//store result

    				mysqli_stmt_store_result($stmt);

    				if(mysqli_stmt_num_rows($stmt)==1){
    					$matric_number_err="matric number already taken";
    				}
    				else{
    					$matric_number=trim($_POST["matric_number"]);
    				}

    				
    				
    				//close statement
    				mysqli_stmt_close($stmt);
    			}
    		
    		//validate password
    		if (empty(trim($_POST['password']))) {
    			$password_err="please enter a password";
    		}
    		elseif (strlen(trim($_POST["password"]))< 6) {
    			$password_err="Password must have at least 6 characters";
    			
    		}
    		else{
    			$password=trim($_POST['password']);
    		}
    		//validate confirm password
    		if (empty(trim($_POST['confirm_password']))) {
    			$confirm_password_err="Please confirm password";
    		}
    		else{
    			$confirm_password=trim($_POST['confirm_password']);
    			if (empty($password_err)&& ($password !=$confirm_password)) {
    				$confirm_password_err="passwords do not match";
    			}
    		}
    		//check input errors before inserting into database
    		if (empty($matric_number_err) && empty($password_err) && empty($confirm_password_err)) {
    			//Prepare an insert statement
    			$sql="INSERT INTO students(matric_number,password) values (?,?)";

    			if ($stmt==mysqli_prepare($link,$sql)) {
    				#Bind variables to the prepared statement as parameters
    				mysqli_stmt_bind_param($stmt,"ss",$param_matric_number,$param_password);

    				//set parameters
    				$param_matric_number=$matric_number;
    				$param_password=password_hash($password, PASSWORD_DEFAULT);//Creates a password hash

    				//Attempts to execute the prepared statement
    				if (mysqli_stmt_execute($stmt)) {
    					//Redirect to login page
    					header("location:login.php")

    				{
    				
    				//Close statement
    				mysqli_stmt_close($stmt)
    			}
    		
    		//Close connection
    		
    	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account</p>

        <form method="POST" action="">
            <div class='form-group'>
            <label>Matric number</label>
            <input type="text" name="matric_number"  value="" >
            <span class="invalid feedback"><?php echo $matric_number_err; ?></span>
            </div>

            <div class='form-group'>
            <label>Password</label>
            <input type="password" name="password"  >
            <span class="invalid feedback"><?php echo $password_err; ?></span>
            </div>



            <div class='form-group'>
            <label>Confirm password</label>
            <input type="password" name="confirm_password"  >
            <span class="invalid feedback"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class='form-group'>
            <input type='submit'class='btn btn-primary' value='submit'>
            <input type='reset'class='btn btn-secondary ml-2' value='reset'
            </div>
            <p>Already have an account?<a href='login.php'>login here</a></p>
        </form>

    </div>

</body>
</html>