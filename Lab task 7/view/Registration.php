<?php
if(isset($_POST['back']))
{
	header("Location:index.php");
}
include_once("core/user_service.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(!isset($_POST['gender']))
	{
		echo "select  gender";
	}
	$mark = 0;
    $result=addNewUser($_POST['name'],$_POST['mail'],$_POST['pass'],$_POST['con'],$_POST['age'],$_POST['gender']);
	$new_user=addNewResult($_POST['name'],$_POST['mail'],$_POST['pass'],$_POST['con'],$_POST['age'],$_POST['gender'], $mark);
	
}
if(isset($_POST['back']))
{
	header("Location:index.php");
}
?>
<html>
	<head>
		<title>Registration</title>
		<link href="css/Registration.css" rel="stylesheet" type="text/css" />
	</head>
	<body background="images/exam.jpg">
		<form  method="POST" onsubmit="return validation()">
			<div class="main">
				<div class="header">
					<h4>New User Registration</h4>
					<hr>
				</div>
				<div class="name">
					<h3>Name:</h3>
					<input type="text" id="name" name="name" placeholder="Enter your name">
				</div>
				<div class="mail">
					<h3>Email:</h3>
					<input type="text" id="mail" name="mail" placeholder="Enter your mail">
				</div>
				<div class="Age">
					<h3>Age:</h3>
					<input type="text" id="age" name="age" placeholder="Enter your age">
				</div>
				<div class="gender">
					<h3>Gender:
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</div>
				<div class="Password">
					<h3>Password:</h3>
					<input type="password" id="pass" name="pass" placeholder="Enter your password">
				</div>
				<div class="Confirm">
					<h3>Confirm Password:</h3>
					<input type="password" id="con" name="con" placeholder="Enter your password again">
				</div>
				<div class="register">
					<hr>
					<input type="submit" value="Register" name="submit">
					<hr>
				</div>
		
			</div>
		</form>
		<script>
			function validation()
			{
				if(document.getElementById('name').value=="" || document.getElementById('mail').value==""||document.getElementById('age').value==""||document.getElementById('pass').value==""|| document.getElementById('con').value=="")
				{
					alert('name can not be empty');
					return false;
				}
			}
		</script>
	</body>
</html>
