<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "medicalforum";

$conn = new mysqli("$host","$user","$password","$database");


if(!$conn){
	die("connection fail");
}
?>