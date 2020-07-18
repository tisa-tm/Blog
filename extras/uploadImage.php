<?php
require "connection.php";
if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];

$folder = 'imagef/';

move_uploaded_file($filetmpname, $folder.$filename);

$statement = "INSERT INTO `tbl_image`(`image`) VALUES (?)";
$statement->bind_param("s",$filename);
$statement->execute();
$statement->close();

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method = "post" enctype = "multipart/form-data" >
		<input type="file" name="uploadfile" />
		<input type="submit" name="uploadfilesub" value="upload"/>
	</form>
</body>
</html>