<?php
 isset($_COOKIE['language']) ?? "English"; 
   if(isset($_POST['language'])){
        setcookie('language', $_POST['language']);
   }

?>
<form method="post">
 <?php 
  $languages = [
     'English',
     'Dutch',
  ];
 ?>
 <select name="language">
   <?php foreach($languages as $language){ ?>
   <option value="<?php echo htmlspecialchars($language, ENT_QUOTES); ?>" 
   <?php if(isset($_COOKIE['language']) && $_COOKIE['language'] === $language)   {?> selected <?php }  ?>><?php echo htmlspecialchars($language, ENT_QUOTES); ?> </option>
 <?php  } ?>
 </select>
   <button> submit </button>
   <?php
  if(isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    echo $language == 'English' ? "congratulations" : ($language == 'Dutch' ? "gefeliciteerd" : "");
}
?>
</form>
