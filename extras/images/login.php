<?php
include "connection.php";

$name = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO ``(`name`, `password`) VALUES ('$name','$password')";

if ($conn->query($sql) === TRUE) {
    echo " <br> Signup Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>