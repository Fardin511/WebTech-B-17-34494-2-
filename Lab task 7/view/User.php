<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:index.php");
}
?>
<html>
	<head>
		<title>User interface</title>
		<link href="css/User.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<form>
			<div class="menu">
				<div class="main">
					<div class="header">
						<h1>Airport Manager</h1>
					</div>
					<div class="HEADERTEXT">
						<h2>Welcome to Airport Manager Portal</h2>
					</div>
					<div class="left">
						<h2>Your Activity</h2>
						<hr>
						<div class="activity" allign="center">
							<a href="User.php"><h4>Home</h4></a>
							<a href="Prev_Res.php"><h4>Previous Result</h4></a>
							<a href="User_Account.php"><h4>Account</h4></a>
							<a href="Logout.php"><h4>Logout</h4></a>
						</div>
					</div>
					
					<div class="context">
						<p>"This is airport manager portal.Only airport manager can use this portal."</p>
					</div>
					<div class="footer">
						<h3>Contact with us: +8801721212525 or:</h3>
						<div class="mail">
							<a href="http://www.gmail.com"><img src="images/images16.jpg" width="50" height="40"></a>
						</div>
						<div class="fb">
							<a href="http://www.facebook.com"><img src="images/images(14).jpg" width="50" height="40"></a>
						</div>
						<div class="tweet">
							<a href="http://www.tweeter.com"><img src="images/images(18).jpg" width="50" height="40"></a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>