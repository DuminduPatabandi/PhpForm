
<?php 

	require('connection.php');

	$sql = "SELECT * FROM person WHERE FullName='$_POST[username]' AND NIC='$_POST[password]'";

	$token = mysqli_query($conn,$sql);
	$cookie = mysqli_fetch_assoc($token);
	if($cookie) {
		header('Location:index.php');
	} else {
		echo 'Incorrect Username or Password';
	}
	mysqli_close($conn);
?>