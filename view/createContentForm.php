<?php
session_start();
if(isset($_SESSION['userid'])){
	require ('C:/xampp/htdocs/Medical Forum/view/userNavigation.php');
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>New Content</title>
		<style type="text/css">
			#createContent{
				display: flex;
				flex-direction: column;
				align-items: left;
				margin: 5% 10%
			}
			input, #content{
				box-shadow: 2px 2px 5px gray,
							-3px -3px 5px lightgray;
				border-radius: 10px;
				border: none;
			}
			#title, #author{
				align-self: center;
				width: 50%;
				height: 50px;
			}
			#content{
				width: 100%;
				height: 300px;
				vertical-align: text-top !important;
			}
			#postButton{
				background: #FBD100;
				border: none;
				border-radius: 15px;
				height: 30px;
				width: 100px;
				color: black;
			}
		</style>
	</head>
	<body>
	<form id = "createContent" action = "../database/createContent.php" method = "POST">
			<input id="title" type="text" name="title" placeholder ="Enter Title"><br>
			<textarea id="content" rows="4" cols="100" placeholder = "Write Here" name="content" form="createContent"></textarea><br>
			<input type="file" name="image">
			<button name = "post" id = "postButton" type = "submit">Post</button>
		</form>
	<script type="text/javascript" src = "resources/js/forum.js"></script>
	</body>
	</html>
<?php
}
else{
	header("Location: ../index.php");
}
?>
