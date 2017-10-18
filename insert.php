<?php
	$con = mysqli_connect("localhost","root","","employeedb");
	if (mysqli_connect_errno())
	{
		echo "Could not connect to MySQL : " . mysqli_error();
	}

	$sql = "INSERT INTO account(firstname,lastname,age) VALUES('anna','beech',12), ('misha','collins',13), ('ina','anach',22)";

	if (mysqli_query($con, $sql))
		echo "Record added";
	else
		echo "Error adding records.";

	mysqli_close($con);
?>

