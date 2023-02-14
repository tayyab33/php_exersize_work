<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
 <?php
  $numberOfkittens = (int) $_GET['number'] ?? 1;
if ($numberOfkittens < 1) {
    $numberOfKittens = 1;
}
  for($i=0; $i<=$numberOfkittens;$i++){ ?>
  Cat <?php echo $i; ?>
   <img src="/cat.jpg" alt="Cat <?php echo $i; ?>" >
 <?php }
 ?>