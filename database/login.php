<?php
include "connection.php";

$name = $_POST['username'];
$password = $_POST['password'];

if(isset($name)){ 
	$sql = "select * from tbl_user where username ='$name' AND password ='$password' ";
	$result = $conn->query($sql);

	if($result->num_rows == 1){ 
		$user = $result->fetch_assoc();
		session_start();
		$_SESSION['userid'] = $user['sn'];
		header('Location: ../view/welcomePage.php');
		exit;
	}
	else{
		header('Location: ../index.php');
	}
}

$conn->close();

?>