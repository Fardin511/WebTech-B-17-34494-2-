<?php
session_start();

// $host  = "localhost";
// $user = "root";
// $password = "";
// $db = "ats";
// mysqli_connect($host, $user, $password);
// mysqli_select_db($db);
	function validate($str) 
	{
		return trim(htmlspecialchars($str));
	}

	$count = 0;

if (isset($_REQUEST['sbt'])) 
	{
		$uname =  validate($_REQUEST['uname']) ;
		$pass = validate($_REQUEST['pass']) ;

		

		if(empty($uname) || empty($pass))
		{
			echo 'Null Submission found';
		}
		else
		{
			$con = mysqli_connect('127.0.0.1', 'root', '', 'ats');

			$sql = "SELECT * FROM airportmanager WHERE User_name = '$uname' AND Password = '$pass'";
			$result = mysqli_query($con, $sql);

				if($result == 1)
				{
					$_SESSION["uname"] = $uname;
					$_SESSION["valid"]= "yes";
					$_SESSION["pass"]= $pass;

					if(!empty($_REQUEST['remember']))
					{
						setcookie('username', $uname, time()+36000 , '/');
						setcookie('password', $pass, time()+36000 , '/');
					} 


					header("location:../view/customerhome.php");



				}
				else
				{
					echo "Invalid Username or Password <br>";
			
				}
			}
		}
		


?>