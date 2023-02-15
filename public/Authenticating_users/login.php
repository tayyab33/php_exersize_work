<?php 
session_start();
   $users = [
       'tayyab' => '$2y$10$eafglteYd0TOUFLkKzjMhOtiVlbnMZlR1Vw3gveNllRnWHwVfROGK',
   ];
   if(isset($_POST['username'], $_POST['password'])){
    if(isset($users[$_POST['username']])){
        $expectedPasswordHash = $users[$_POST['username']];
        if(
             password_verify($_POST['password'], $expectedPasswordHash)
        ){
             $_SESSION['authenticated_user'] = $_POST['username'];
            header('Location: secret.php');
            exit;
        }
    }
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php
var_dump($_POST);
?>
<form method="post">
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>
