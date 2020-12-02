<h2>Customer Home</h2>
<?php
session_start();


$handle = fopen("../controller/pictures/images.txt", 'r');
			while (!feof($handle)) 
			{
				$data = fgets($handle);
				$data = explode('-', $data);

				if( trim($data[0]) == $_SESSION["uname"] )
				{
					$pic = trim($data[1]);
					$pic = "../controller/".$pic; 
					break;
				}
				
			}




//print_r($GLOBALS);
$file=fopen("../controller/pictures/images.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	if($_SESSION["uname"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<img src="<?=$pic?>" width="300px" height="150px" /><br/><br/>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="../controller/edit.php">Edit Info</a><br/>
	<a href="../controller/picture.php">Change Photo</a><br/>
	<a href="../controller/show_allflights.php">Purchase Tickets</a><br/>
	<a href="../view/travelHistory.php">My Travel History</a><br/>

	<a href="../controller/logout.php">Log Out</a><br/>
	<p>This is a place after login</p>

	
<?php


}
else{
	header("Location:login.php");
}
?>