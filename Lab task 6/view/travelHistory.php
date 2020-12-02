<?php

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>


<!DOCTYPE html>
<html>
<head>
	<title>Travel History</title>
</head>
<body>
	<center>
		<h3>Travel History</h3>
	</center>

	<table border="1 px">
		<tr>
			<td>Fligh Id</td>
			<td>Date</td>
			<td>Status</td>
			<td>Amount</td>	
		</tr>
		<tr>
			<td><a href="">976d</a>
			</td>
			<td>12-3-2020</td>
			<td>Completed</td>
			<td>4500</td>
		</tr>
		<tr>
			<td><a href="">7yu</a></td>
			<td>12-12-2020</td>
			<td>Booked</td>
			<td>7800</td>
		</tr>

	</table>
<br><br>
<a href="customerhome.php">Go Back to Home</a>

</body>
</html>

<?php
}
else{
	header("Location:login.php");
}
?>