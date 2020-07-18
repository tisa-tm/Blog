<?php 
session_start();
require ('C:/xampp/htdocs/Medical Forum/database/connection.php');
require ('C:/xampp/htdocs/Medical Forum/view/slant.html');

$postid = $_POST['postid'];
$statement = $conn->prepare("SELECT * FROM tbl_posts WHERE sn = ?");
$statement->bind_param("i",$postid);
$statement->execute();
$result = $statement->get_result(); 
$article = $result->fetch_assoc();

$postTitle = $article['title'];
$postContent = $article['content'];
$postAuthor = $article['username'];

$statement->close();
?>

<!DOCTYPE html>
<head>
	<title><?php echo $postTitle;?></title>
	<link rel="stylesheet" type="text/css" href="/Medical Forum/resources/css/comment.css">
</head>
<body>
	<!-- to decide which navigation to display -->
	<?php
	if(isset($_SESSION['userid'])){

		require ('C:/xampp/htdocs/Medical Forum/view/userNavigation.php');
	}
	else{
		require ('C:/xampp/htdocs/Medical Forum/view/navigation.php');
	}
	?>

	<div id = 'slanted2' style = 'transform: rotateX(180deg); border-radius: 0;'>
	   <div id = 'heading2'>
	   		<h1><?php echo $postTitle;?></h1>
	   		<span style='font-weight: bold; text-align: center;'><?php echo $postAuthor;?></span>
	   </div> 
	    <svg id = 'svg2' viewBox='0 0 100 100' preserveAspectRatio='none'><polygon points='0,100 100,80 100,100' /></svg>
	</div>
	<div id = 'alignment2'>
		
	    <p><?php echo $postContent;?></p>
	    <br><br>

	    <h1>Comments</h1>
	        
		<?php
		//to comment
		if(isset($_SESSION['userid'])){
		echo"<form id = 'commentBox' action = '../database/createComment.php' method = 'post'>";
			echo"<input type = 'hidden' name = 'userid' value = ".$_SESSION['userid'].">";
			echo"<input type = 'hidden' name = 'postid' value = ".$postid.">";
	    	echo "<textarea rows='4' cols='100' placeholder = 'Write Comment' name='comment' style = 'width: 100%;'></textarea><br>";
			echo"<button name = 'postComment' type = 'submit'>Post</button>";
	    echo"</form>";
		}
		else{
			echo "Login to comment";
			echo "<br>";
		}
		echo "<br>";
		//to display comment
		$sql = "SELECT * FROM `tbl_comment` WHERE postid = $postid ORDER BY commentid desc";
		$result_comment = $conn->query($sql);
		
		if($result_comment->num_rows > 0){
		    while($row = $result_comment->fetch_assoc()){
			    echo"<div id = 'comment' style = 'margin: 0;'>";	
			    	echo"<p id = 'commenterUsername' style = 'font-weight: bold;'>".$row['username']."<p>
			    	<p id = 'comment'>".$row['cmt']."</p>";
			    echo "</div>";
			    echo "<br>";
		   	}
		   }
		else{
			echo "no comments yet";
		}
		$conn->close();
		 ?>
	</div> 
</body>	
</html>