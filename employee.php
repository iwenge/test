<?php 
include "connection.php";
$create = mysqli_query($con, "CREATE TABLE `employee` (
  `id` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `passport` text NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL
)");

if (isset($_POST['submit'])) {
	// insert employee records to db
	$id = random_int(1000000000, 9999999999);
	// echo $id;
	$insert = mysqli_query($con, "INSERT INTO employee(id, fname, 	lname, 	gender, 	dob, 	passport, 	address, 	country, 	state ) VALUES ('$id', '".$_POST['fname']."','".$_POST['lname']."', '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['passport']."', '".$_POST['address']."', '".$_POST['country']."', '".$_POST['state']."')");
	if ($insert) {
		echo "success";
	}
	else {
		echo mysqli_error($con);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Employee</title>
</head>
<body>
<!-- Create employee form -->
<form method="post" action="employee.php">
	<table>
		<tr>
			<th colspan="2">Employe Date</th>
		</tr>
		<tr>
			<td>First Name:</td> <td><input type="text" name="fname" required></td>
		</tr>
		<tr>
			<td>Last Name:</td> <td><input type="text" name="lname" required></td>
		</tr>
		<tr>
			<td>Gender</td> <td><input type="radio" name="gender" required>Male <input type="radio" name="gender" value="Female" required>Femail</td>
		</tr>
		<tr>
			<td>Date of Birth</td><td><input type="date" name="dob" required></td>
		</tr>
		<tr>
			<td>Passport</td><td><input type="file" name="passport" required></td>
		</tr>
		<tr>
			<td>Address</td><td><textarea name="address" required></textarea></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><select name="country">
					<option selected="selected" disabled="disabled">--Select Country--</option>
					<option>Nigeria</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>State</td>
			<td><select name="state">
					<option selected="selected" disabled="disabled">--Select State--</option>
					<option>Abuja</option>
					<option>Lagos</option>
				</select>
			</td>
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