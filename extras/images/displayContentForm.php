<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<style type="text/css">
		#display{
			margin: 5% 10%;
		}
		#content{
			box-shadow: 2px 2px 5px gray,
						-2px -2px 5px lightgray;
			border-radius: 15px;
			margin: 5% 0;
		}
		#alignment{
			margin-left: 5%;
		}
		#posted{
			display: none;
		}
		#heading{
			margin-left: 5%; 
			padding-top: 30px;
			padding-bottom: 30px;
			/*margin: auto;*/
			transform: rotateX(180deg);
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<div id = "posted"></div>
	<?php
	require "connection.php";
	require "navigation.php";
	require "loginForm.php";
	require "signupForm.php";
	require "slant2.html";

	$sql = "SELECT * FROM `tbl_posts` ORDER BY sn desc";
	$result = $conn->query($sql);

	echo "<div id = 'display'>";
	if($result->num_rows > 0){
	    while($row = $result->fetch_assoc()){
	    	echo"<div id = 'content'>";
	    	echo"<div id = 'slanted' style = 'transform: rotateX(180deg); '>";
	        echo"<h1 id = 'heading'>".$row['title']."</h1>";
	        echo "<svg viewBox='0 0 100 100' preserveAspectRatio='none'><polygon points='0,100 100,80 100,100' /></svg>";
	        echo"</div>";
	        echo"<div id = 'alignment'>";
	        echo"<h6>".$row['author']."</h6>";
	        echo"<p>".$row['content']."</p>";
	        echo"</div>"; 
	        echo"</div>";
	    }
	}

	else{
	    echo"No posts";
	}
	echo "</div>";
	$conn->close();
 ?>
 <script type="text/javascript" src = "forum.js"></script>
</body>
</html>
