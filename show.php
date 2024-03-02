<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php	

	$conn=mysqli_connect("localhost","root","","visitor_data");

	$result=mysqli_query($conn,"select * from visitor");
	
	echo "<table width='50%'>
	<tr style='background-color:#ff5b5b;color:white;'>
	<th>name</th>
	<th>mobile</th>
    <th>emirates_id</th>
	<th>reason</th>
	<th>meeting</th>
	</tr>";
	while ($row=mysqli_fetch_array($result))
	{
		echo "<tr align='center'>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['emirates_id']."</td>";
		echo "<td>".$row['reason']."</td>";
		echo "<td>".$row['meeting']."</td>";
		echo "</tr>";
	} echo "</table>";
?>
<a href="value.php">Home</a>
</body>
</html>