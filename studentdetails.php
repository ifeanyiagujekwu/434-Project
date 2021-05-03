<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="studb.php" id="form1">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="female">Female</td>
				<td><input type="radio" name="gender" value="male">Male</td>
			</tr>
			<tr>
				<td>Department:</td>
				<td><input type="text" name="dept"></td>
			</tr>
			<tr>
				<td>Level:</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Register"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>