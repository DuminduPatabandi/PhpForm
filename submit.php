<?php 

	require('connection.php');
	
	//Insert Data
	$sql = "INSERT INTO person (FullName,Contact,NIC,Course,Email) VALUES ('$_POST[fullname]','$_POST[contact]','$_POST[nic]','$_POST[course]','$_POST[email]')";

	if(mysqli_query($conn,$sql)) {
		header('Location:index.php');
		echo 'Registration Successfull';
	}else {
		echo 'Registration Failed';
	}

	
	mysqli_close($conn);
?>