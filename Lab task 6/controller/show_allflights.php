<!DOCTYPE html>
<html>
<head>
	<title>Purchase Tickets</title>
</head>
<body>
<center><h3>All Flights</h3></center>
<table border="1 px">
	<tr>
		<th>Flight Id</th>
		<th>From</th>
		<th>To</th>
		<th>Departure Time</th>
		<th>Price</th>
		<th>Purchase</th>
	</tr>
	<tr>
		<td>345</td>
		<td>Dhaka</td>
		<td>Rajshahi</td>
		<td>3:45</td>
		<td>3500 Tk</td>
		<td>
			<input type="number" name="qty" placeholder="Select Quantity"><br>
			<button>Purchase</button>
		</td>
	</tr>
	<tr>
		<td>789</td>
		<td>Thailand</td>
		<td>Ohio</td>
		<td>3:50</td>
		<td>45000 Tk</td>
		<td>
			<input type="number" name="qty" placeholder="Select Quantity"><br>
			<button>Purchase</button>
		</td>
	</tr>
	<tr>
		<td>ABC</td>
		<td>Rangpur</td>
		<td>Denmark</td>
		<td>3:45</td>
		<td>60000 Tk</td>
		<td>
			<input type="number" name="qty" placeholder="Select Quantity"><br>
			<button>Purchase</button>
		</td>
	</tr>
</table>
<br><br>
<a href="../view/customerhome.php">Go Back to Home</a>
<br><br><hr>


</body>
</html>

<?php include '../view/footer.php';?>