<?php
session_start();
include "connection.php";

$name = $_POST["username"];
$email = $_POST['email'];
$password = $_POST['password'];

$sql_username = "SELECT * FROM tbl_user WHERE username = '$name'";
$sql_email = "SELECT * FROM tbl_user WHERE email = '$email'";
$result_username = $conn->query($sql_username);
$result_email = $conn->query($sql_email);

if($result_username->num_rows > 0){
	$name_error = "Username taken";
	$_SESSION['error'] = $name_error;
	header('Location: ../index.php');
}
else if($result_email->num_rows > 0){
	$email_error = "Email taken";
	$_SESSION['error'] = $email_error;
	header('Location: ../index.php');
}
else{
	$sql = "INSERT INTO `tbl_user`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";

	if ($conn->query($sql) === TRUE) {
	    echo " <br> Signup Successful";
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>