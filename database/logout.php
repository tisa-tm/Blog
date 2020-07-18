<?php
session_start();
if(isset($_SESSION['userid'])){
	unset($_SESSION['userid']);
	session_destroy();
	// echo "hwy";
	header('Location: ../index.php');
}
?> 