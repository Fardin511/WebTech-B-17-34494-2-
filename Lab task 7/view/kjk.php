<?php
	if(isset($_POST['exam']))
	{
		session_start();
		$con = mysqli_connect("localhost","root","","online_exam_system");
		$x = $_SESSION['name'];
		date_default_timezone_set('Asia/Dhaka');
		$date = date('m/d/Y h:i:s a', time());
		$scr = $_POST['res'];
		$sql ="Insert into Score(Num,Date_Time,Score) Values('$x','$date', $scr)";
		$s ="SELECT * FROM result WHERE Id = $x";
		$result = mysqli_query($con,$s);
		
		
		
	}
?>