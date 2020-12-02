<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
	Select image to upload : <input type="file" name="fileToUpload">
	<input type="submit" value="Upload File" name="sbt"></pre>
</form>
<?php
}
else{
	header("Location:../view/login.php");
}
?>
<br><br>
<a href="../view/customerhome.php">Go Back to Home</a>

