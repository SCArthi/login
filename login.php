<!DOCTYPE html>
<html>
<head>
	<title>Login Page Trial</title>
</head>
<body bgcolor="#90ee90">
	<form action="login.php" method="POST">
		<table border="2" align="center" bgcolor="#ff00ff">
			<tr>
				<td colspan="2" align="center">Login Form</td>
			</tr>
			<tr>
				<td>Email id :-</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password :-</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	mysqli_connect("localhost","root","");
	mysqli_select_db('demo1');	// our database name should be added here

	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="INSERT INTO login (email,password) VALUES ('$email','$password')";

		if (mysql_query($query)) // to run the query 
		{
			echo "You have logged in successfully !";
		}
	}
?>