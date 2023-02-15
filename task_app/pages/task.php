<?php 
include(__DIR__ . '/../bootstrap.php');
   if(!$_SESSION['authenticated_user']){
   	 header('location: login.php');
   	 exit;
   }
   $username = $_SESSION['authenticated_user'];
   if(isset($_POST['task'])){
   	$_SESSION['tasks'][$username][] = $_POST['task'];
   }
    if(isset($_POST['task'])){
      $_SESSION['task'][$username][] = $_POST['task'];
    }
   $allTasks = isset($_SESSION['tasks'][$username]) ? $_SESSION['tasks'][$username] : [];
   $title = 'task';
   include __DIR__ .'/../_header.php';
 ?>

  <h2>Tasks</h2>
  <ul class="tasks">
  	<form method="post">
       <input type="text" name="task">
       <button>add</button>
   </form>
  	<?php 
        foreach ($allTasks as $task) { ?>
           <li><?php echo htmlspecialchars($task, ENT_QUOTES); ?></li>
        	<?php
        }
  	  ?>
  </ul>
  <?php include(__DIR__ . '/../_footer.php'); ?>