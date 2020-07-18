<?php
require "connection.php";

$title = $_POST["title"];
$content = $_POST["content"];
$date = date("Y/m/d");
$image = $_POST['image'];
$target = "images/".basename($image);
session_start();
$userid = $_SESSION['userid'];

// if (move_uploaded_file($image, $target)) {
// 	echo"Image uploaded successfully";
// }else{
// 	echo"Failed to upload image";
// }
$statement_author = $conn->prepare("SELECT * FROM tbl_user where sn = ?");
$statement_author->bind_param("i",$userid);
$statement_author->execute();
$result = $statement_author->get_result()->fetch_assoc();
$author = $result['username'];
echo $author;

$statement = $conn->prepare("INSERT INTO tbl_posts (`date`, `content`, `title`, `image`, `userid`, `username`) VALUES (?, ?, ?, ?, ?, ?)");
$statement->bind_param("dsssis",$date,$content,$title,$image,$userid,$author);
$statement->execute();

// <!-- <script type="text/javascript">
// 	window.alert("Posted"); 
// </script> -->

header('Location: ../view/displayContentForm.php');
$statement->close();
$conn->close();
 ?>