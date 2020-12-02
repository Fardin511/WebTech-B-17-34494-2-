<?php

	session_start();

	function validate($str) 
	{
		return trim(htmlspecialchars($str));
	}


        $uname = validate($_REQUEST['uname']);
		$email = validate($_REQUEST['email']);
		$pass1 = validate($_REQUEST['pass']);
		$pass2 = validate($_REQUEST['confpass']);

if(empty($uname) || empty($pass1) || empty($pass2) || empty($email))
{
	echo "No fields can be empty..";
}
else if($pass1 != $pass2) 
{
	echo "Password is not matching..";
}
else
{
	$data = "\r\n".$uname.'-'.$pass1.'-'.$email;
	$file = fopen('cred.txt', 'a');
			 fwrite($file, $data);
			 fclose($file);

			 echo '<h2>Registered</h2>';
			 echo '<a href="../view/login.php">Login</a>';	
}










?>