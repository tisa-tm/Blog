<doctype! html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="forum.css">
    </head>
<body>
<!--navigation-->
<?php 
require "navigation.php";
require "loginForm.php";
require "signupForm.php";
?> 
<!--jumbotron-->
<div class="introduction">
     <h1 class="introduction-heading">Welcome to Medical Forum</h1>
     <p>"Into the forest I go, to lose my mind and find my soul"</p>
     <button id="joinButton">Join us</button>    
</div>

<div id="slanted">
  <svg viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="0,100 100,70 100,100" />
  </svg>
  <div id = "slantedText">
  <h1>Share and Inspire</h1>
  <p>A space to post about your health journey. A free forum to meet people like you. Create your account today. Write your story and inspire people like you.</p><br><br><br>
  </div>
</div> 

<script type="text/javascript" src = "forum.js"></script>

</body>
</html>