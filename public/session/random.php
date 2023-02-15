 <?php
   session_start();
 ?>
<h1> Your lucky number is : <?php echo $randomInt = random_int(1,10); ?> </h1>
   <?php include __DIR__ .'/_flash_message.php'; 
 ?>
 <?php if($randomInt > 5){ ?>
    <h2> Nice, 
         <?php echo htmlspecialchars($_SESSION['name'] ?? 'anonymous user', ENT_QUOTES); ?>!
      </h2>
  <?php } ?>