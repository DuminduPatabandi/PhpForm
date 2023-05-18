<?php 

	require('connection.php');


	$sql = "SELECT * FROM person WHERE NIC = '$_POST[nic_view]'";
	
	$result = mysqli_query($conn,$sql);
	$person = mysqli_fetch_assoc($result);	
	

	mysqli_close($conn);
?>



<html>
<head>
	<title>View Detais</title>
</head>

<body>
	
	<h2><?php echo $person['FullName']; ?></h2>
	<p><?php echo $person['Contact']; ?></p>
	<p><?php echo $person['NIC']; ?></p>


</body>

</html>