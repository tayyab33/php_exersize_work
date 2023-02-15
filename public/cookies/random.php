<h1> Your lucky number is : <?php echo $randomInt = random_int(1,10); ?> </h1>
 <?php if($randomInt > 5){ ?>
    <h2> Nice, 
      <?php
       $name = $_COOKIE['name'];
           if(isset($name)){
            if(strlen($name) > 25){
              $name = substr($name, 0, 25);
      }
      echo ',' . htmlspecialchars($name, ENT_QUOTES);
    }
       ?>!
      </h2>
  <?php } ?>