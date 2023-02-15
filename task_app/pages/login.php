<?php 
include(__DIR__ . '/../bootstrap.php');
   if(isset($_POST['name'], $_POST['password'])){
   	$users = [
        'tayyab' => '$2y$10$1aCoD0qyd0zAoYpHehwL8u08vkuHbdOVQQyVt.GD/mMeampmlW4LK',
   	];
     if($users[$_POST['name']]){
     	 $expectedpassword = $users[$_POST['name']];
           var_dump($expectedpassword);
     	 if(password_verify($_POST['password'], $expectedpassword)){
     	 	$_SESSION['authenticated_user'] = $_POST['name'];
     	 	header('Location: task.php');
     	 	exit;
     	 }
     }

   }
 ?>

<?php 
 $title = 'login';
  include __DIR__ .'/../_header.php';
 ?>
<body>
     <form method="post">
     	  <input type="text" name="name">
     	  <input type="password" name="password">
     	  <button>login</button>
     </form>
<?php 
  include __DIR__ .'/../_footer.php';
 ?>