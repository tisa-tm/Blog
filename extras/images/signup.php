<?php
include "connection.php";

$name = $_POST["username"];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO `tbl_user`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo " <br> Signup Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>