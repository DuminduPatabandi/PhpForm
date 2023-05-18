<?php 

	$conn = mysqli_connect("localhost:3307","root","","dbro_db");

	if(!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
	}


?>

