<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="resources/css/forum.css"> -->
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

</body>
</html>

<?php
session_start();
if(isset($_SESSION['userid'])){
	require ('C:/xampp/htdocs/Medical Forum/view/userNavigation.php'); 
	require ('C:/xampp/htdocs/Medical Forum/database/connection.php');
	require ('C:/xampp/htdocs/Medical Forum/view/slant.html');
	$userid = $_SESSION['userid'];

	$sql_post = "SELECT * FROM `tbl_posts` WHERE userid = $userid";
	
	$result_post = $conn->query($sql_post);
	

	echo "<div id = 'display'>";
	if($result_post->num_rows > 0){
	    while($row = $result_post->fetch_assoc()){
	    	echo"<div id = 'content'>";
	    	echo"<div id = 'slanted' style = 'transform: rotateX(180deg); '>";
	        echo"<h1 id = 'heading'>".$row['title']."</h1>";
	        echo "<svg viewBox='0 0 100 100' preserveAspectRatio='none'><polygon points='0,100 100,80 100,100' /></svg>";
	        echo"</div>";
	        echo"<div id = 'alignment'>";

	        //to display username or name of the author
	        echo"<span style='font-weight: bold;'>".$row['username']."</span>";
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
}

else{
	header("Location: ../index.php");
}
?>