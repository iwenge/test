<?php
include "connection.php";
error_reporting(0);
echo "login successfull";
echo "<br>";

if (isset($_POST['submit'])) {
	$get = mysqli_query($con, "SELECT * FROM employee WHERE id='".$_POST['id']."' ");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="dashboard.php">
		<input type="text" name="id" placeholder="search employee"><br>
		<input type="submit" name="submit" value="submit">
	</form>

<?php 
while ($val = mysqli_fetch_assoc($get)) {
?>
<table border="2">
	<tr>
		<td><?php echo $val['fname'] ?></td><td><?php echo $val['lname'] ?></td><td><?php echo $val['dob'] ?></td>
	</tr>
</table>
<?php } ?>
</body>
</html>