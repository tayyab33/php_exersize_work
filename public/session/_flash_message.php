<?php 
   if(isset($_SESSION['message'])){ ?>
     <p>
     	<?php 
          echo htmlspecialchars($_SESSION['message'], ENT_QUOTES);
     	 ?>

     </p>
  <?php 
   unset($_SESSION['message']);
}

// it's not a good idea to include this message file inside the public dir
 ?>