<?php
$cred=array();

$file=fopen("cred.txt","r") or die("file error");
while($c=fgets($file)){
	$ar=explode("-",$c,3);
	$cred[$ar[0]]=$ar[1];
	print_r($ar);
}

$flag=0;
session_start();
foreach($cred as $k=>$v) {
	if($_REQUEST["uname"]==$k && md5($_REQUEST["pass"])==$v){
		          echo "Login success";
		          $_SESSION["valid"]="yes";
				  $_SESSION["uname"]=$_REQUEST["uname"];
				  $_SESSION["pass"]=$_REQUEST["pass"];
				  $flag=1;
				 {setcookie('uname',$_REQUEST,'pass',$_REQUEST,time()+60*60*7);}

			      break;

	}
		 
}

if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
}

	if($flag==1){
		header("Location:../view/airportmanagerhome.php");}




?>