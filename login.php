<?php 
include "connection.php";

if (isset($_POST['submit'])) {
	$get = mysqli_query($con, "SELECT * FROM account WHERE username='".$_POST['username']."' AND password='".sha1($_POST['password'])."'");
	$check = mysqli_num_rows($get);
	if ($check==1) {
		header("refresh:1; url=dashboard.php");
	}
	else {
		echo mysqli_error($con);
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body>
<!-- Create employee form -->
<form method="post" action="login.php">
	<table>
		<tr>
			<th colspan="2">Employe Date</th>
		</tr>
		<tr>
			<td>Username:</td> <td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td>Password:</td> <td><input type="password" name="password" required></td>
		</tr>
		
		<tr>
			<td colspan="2">
				<input type="submit" value="submit" name="submit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>