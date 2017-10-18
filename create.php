<?php
	$con = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Could not connect to MySQL : " . mysqli_error();
	}

	$sql = "CREATE DATABASE employeeDB";
	if (mysqli_query($con, $sql))
		echo "DB is created";
	else
		echo "Error creating DB.";

	mysqli_close($con);
?>

