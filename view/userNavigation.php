<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/Medical Forum/resources/css/navigation.css">
    <!-- <link rel="stylesheet" type="text/css" href="../resources/css/navigation.css"> -->
    <style type="text/css">
      #logoutButton{
        border: none;
        background-color: #32B4F7;
       /* color: white;
        font-family: "Segoe UI", Verdana, sans-serif;
        height: 70px;*/
    }
    </style>
</head>
<body>
<nav id="userNavi">
      <a class="nav-link" href="welcomePage.php">HOME</a>
      <a class="nav-link" href="displayContentForm.php">ARTICLES</a>
      <a class="nav-link" href="createContentForm.php">POST</a>
      <!-- <a id = "logoutLink" onclick="" class="nav-link" href="#" ">LOGOUT</a> -->
      <form action = "../database/logout.php" method = "get">
      	<button id = "logoutButton" class = "nav-link" type='submit' name = "logoutButton" style="float: right;">LOGOUT</button>
      </form>   
</nav>
</body>
</html>