<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resources/css/form.css">
	<link rel="stylesheet" type="text/css" href="resources/css/form.css">
<body>
	<div id = "signupForm" class = "popupContainer">
		<form action = "/Medical Forum/database/signup.php" id = "popupForm" method = "POST">
			<?php 
			session_start();
			if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
				echo "<br>";
			?>
			<script type="text/javascript">
				document.getElementById('signupForm').style.display = "block";
			</script>
			<?php
				unset($_SESSION['error']);
				session_destroy();
				}
			?>
			<label>Username</label><br>
			<input type = "text" name = "username"><br><br>
			<label>Email</label><br>
			<input type = "text" name = "email"><br><br>
			<label>Password</label><br>
			<input type = "password" name = "password"><br>
			<br><br>
			<button type = 'submit' id = "signupButton">Signup</button>
			<button type = 'button' id = "closeButton" class = "closeBtn">Close</button>
		</form>
	</div>
	<script type="text/javascript" src = "resources/js/forum.js"></script>
	<!-- <script type="text/javascript" src = "../resources/js/forum.js"></script> -->
</body>
</html>