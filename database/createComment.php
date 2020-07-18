<?php
require "connection.php";

$userid = $_POST['userid'];
$statement = $conn->prepare("SELECT * FROM tbl_user WHERE sn = ?");
$statement->bind_param("i",$userid);
$statement->execute();
$result = $statement->get_result(); 
$user = $result->fetch_assoc();
$username = $user['username'];
$statement->close();

$comment = $_POST['comment'];
$postid = $_POST['postid'];

$statement_insert = $conn->prepare("INSERT INTO `tbl_comment`(`userid`, `username`, `postid`, `cmt`) VALUES (?, ?, ?, ?)");
$statement_insert->bind_param("isis",$userid,$username,$postid,$comment);
$statement_insert->execute();

//header('Location: ../view/displayPostForm.php');
$statement_insert->close();
$conn->close();
 ?>