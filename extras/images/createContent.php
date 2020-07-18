<?php
require "connection.php";


$author = $_POST['author'];
$title = $_POST["title"];
$content = $_POST["content"];
$date = date("Y/m/d");
$image = $_POST['image'];
$target = "images/".basename($image);

if (move_uploaded_file($image, $target)) {
	echo"Image uploaded successfully";
}else{
	echo"Failed to upload image";
}
$statement = $conn->prepare("INSERT INTO tbl_posts (`date`, `content`, `title`, `author`, `image`) VALUES (?, ?, ?, ?, ?)");
$statement->bind_param("dssss",$date,$content,$title,$author,$image);
$statement->execute();
?>
<script type="text/javascript">
	window.alert("Posted"); 
</script>
<?php
require_once "displayContentForm.php";
$statement->close();
$conn->close();
 ?>