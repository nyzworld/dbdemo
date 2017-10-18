<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
     //establish or open mySQL db connection  
	 //mysqli_connect(<server_name>, <username>, <password>, <database_name>);
	 $con = mysqli_connect("localhost","test","1234");
	 if (!$con)
	 {
		 die ("Could not connect : " . mysqli_error($con));
	 }
?>
</body>
</html>







