<?php 

  $urlMap = [
     'login' => 'login.php',
     'logout' => 'logout.php',
     'name' => 'name.php',
     'picture' => 'picture.php',
     'random' => 'random.php',
     'secret' => 'secret.php',
     '/' => 'index.php'
  ];
   if(isset($uslMap[$_SERVER['PATH_INFO']])){
   	include(__DIR__. '/' . $uslMap[$_SERVER['PATH_INFO']]);
   }else{
   	// show the homepage
   	$title = 'homepage';
   	include(__DIR__. '/../_header.php'); ?>
   	<h1>This is the homepage</h1>
   	<p><a href="random.php">Get Yourself a random number</a></p>

   	<?php include(__DIR__. '/../_footer.php');
   }
 ?>