<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php	

	$conn=mysqli_connect("localhost","root","","visitor_data");

	$meeting=$_GET['p'];
		if($meeting==1)
		{
			$sel_meeting="principal";
		} else if($meeting==2)
		{
			$sel_meeting="vice-principal";
		} else if($meeting==3)
		{
			$sel_meeting="staff";
		} else if($meeting==4)
		{
			$sel_meeting="student";
		}

	$result=mysqli_query($conn,"select * from visitor where meeting='$sel_meeting'");
	
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
<a href="insertAJAX.php">Home</a>
</body>
</html>