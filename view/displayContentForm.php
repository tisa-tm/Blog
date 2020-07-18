<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
	<!-- <div id = "posted"></div> -->
	<?php
	session_start();
	if(isset($_SESSION['userid'])){
		require ('C:/xampp/htdocs/Medical Forum/view/userNavigation.php');
	}
	else{
		require ('C:/xampp/htdocs/Medical Forum/view/navigation.php');
	}
	require ('C:/xampp/htdocs/Medical Forum/database/connection.php');
	require ('C:/xampp/htdocs/Medical Forum/view/slant.html');

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
		        echo"<div id = 'alignment' class = 'content'>";
			        echo"<span style='font-weight: bold;'>".$row['username']."</span>";
			        echo"<p>".$row['content']."</p>";
		        echo"</div>";     
		        
		        echo"<form method = 'post' action = 'displayPostForm.php'>
		        	<input name = 'postid' type = 'hidden' value = ".$row['sn'].">
		        	<button id = 'viewButton' type='submit' name = 'view'>View</button>
		        </form>";
		        echo "<br><br><br>";
	        echo"</div>";

	    }
	}

	else{
	    echo"No posts";
	}

	echo "</div>";
	$conn->close();
 ?>
 <script type="text/javascript" src = "resources/js/forum.js"></script>
</body>
</html>
