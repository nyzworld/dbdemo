<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "employeedb");
if (mysqli_connect_errno())
	{
		echo "Could not connect : ". mysqli_error();	
	}
$str = "Select * from account";
$data = mysqli_query($con, $str);
$output = "";
while ($row = mysqli_fetch_array($data))
{
	$output = $output . $row['firstname'] . " " . $row['lastname'] .  "\n" ;
}	
echo $output;

mysqli_close($con);
?>

<script>
var output = <?php echo json_encode($output); ?>;
alert(output);
</script>
</body>
</html>