<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div id = "signupForm" class = "popupContainer">
		<form action = "signup.php" id = "popupForm" method = "POST">
			<label>Username</label><br>
			<input type = "text" name = "username"><br>
			<label>Email</label><br>
			<input type = "text" name = "email"><br>
			<label>Password</label><br>
			<input type = "password" name = "password"><br>
			<br><br>
			<button type = 'submit' id = "signupButton">Signup</button>
			<button type = 'button' id = "closeButton">Close</button>
		</form>
	</div>
	<script type="text/javascript" src = "forum.js"></script>
</body>
</html>