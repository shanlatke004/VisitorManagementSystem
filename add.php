<!DOCTYPE html>

<html>
	<head>
		<title>Add Data</title>
	</head>
	<body>
		<?php
			
	$conn=mysqli_connect("localhost","root","","visitor_data");

			$name = $_POST['name'];
			$mobile = $_POST['mobile'];
            $emirates_id = $_POST['emirates_id'];
			$reason = $_POST['reason'];
			$meeting = $_POST['meeting'];


			$query = "insert into visitor (name,mobile,emirates_id,reason,meeting) values('$name','$mobile','$emirates_id','$reason','$meeting')";

			if(mysqli_query($conn,$query)){
				?>
				<script >
					alert("Inserted Successful!");
					location.href="insertAJAX.php";
				</script>
				<?php
			}
        else{
				echo "Unsuccessful";
			}
		?>
	</body>
</html>