<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		body{
			font-family: Arial,Helvetica, sans-serif;
			font-size: 14px;
		}
		label{
			font-weight: bold;
			width: 100px;
			font-size: 24px;
		}
		.box{
			border: black solid 1px;
			width: 300px;
		}

	</style>
</head>
<body bgcolor="#FFFFFF">
	<div  align="center">
		<div style="width: 30px; border: solid 1px #3333333;" align="left">
			<div style="background-color: #3333333; color: #FFFFFF; padding: 3px;"><b>Login</b></div>
			<div style="margin: 30px;">
				
				<form action="login.php" method="POST">
					<label>Username:</label><input type="text" name="name" class="box"><br>
					<label>Email:</label><input type="email" name="email" class="box"><br>
					<label>Password:</label><input type="password" name="password" class="box"><br>
					<input type="submit" value="submit" name="submit"><br>
				</form>

			</div>
			
		</div>
		
	</div>

</body>
</html>




