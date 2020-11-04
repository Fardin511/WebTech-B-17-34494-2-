<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 

    if (empty($_POST["uname"])) {
        $userErr = "You Forgot to Enter Your Username!";
    } else {
        $username = test_input($_POST["uname"]);
        }
    if(!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
     
      else {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
