<?php
	$con = mysqli_connect("localhost","root","","employeedb");
	if (mysqli_connect_errno())
	{
		echo "Could not connect to MySQL : " . mysqli_error();
	}

	$sql = "CREATE TABLE account(
		accountid INT NOT NULL AUTO_INCREMENT,
		firstname VARCHAR(30),
		lastname VARCHAR(30),
		age INT,
		PRIMARY KEY(accountid))";
	if (mysqli_query($con, $sql))
		echo "Table is created.";
	else
		echo "Error creating table.";

	mysqli_close($con);
?>
