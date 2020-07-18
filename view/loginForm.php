<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resources/css/form.css">
	<link rel="stylesheet" type="text/css" href="resources/css/form.css">
</head>
<body>
	<div class = "popupContainer" id = "loginForm">
		<form action = "/Medical Forum/database/login.php" id = "popupForm" method = "post">
			<label>Username</label><br>
			<input type = "text" name = "username"><br><br>
			<label>Password</label><br>
			<input type = "password" name = "password"><br>
			<br><br>
			<button type = "submit" id = "loginButton">Login</button>
			<button type = 'button' id = "closeButton1" class = "closeBtn">Close</button>
		</form>
	</div>
	<script type="text/javascript" src = "resources/js/forum.js"></script>
</body>
</html>