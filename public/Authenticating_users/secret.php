<?php 
   session_start();
 
   if(!isset($_SESSION['authenticated_user'])){
      header('Location: login.php');
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Secret</title>
</head>
<body>
<p>Here's something special for users who are logged in:</p>
<p><img src="elephpant-line-128.png" alt="An elephpant"></p>
<p><a href="logout.php">Log out</a></p>
</body>
</html>