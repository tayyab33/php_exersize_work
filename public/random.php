<!DOCTYPE html>
<?php $randomInt = random_int(1, 10); ?>
<html lang="en">
<head>
    <title>Your lucky number</title>
</head>
<body>
    <h1>Your lucky number is: <?php echo $randomInt ?></h1>
 <?php if ($randomInt > 5) { ?>
   <h2> Nice! </h2>
 <?php } ?>
<p>
   <a href="/kittens.php?number=<?php echo $randomInt; ?>">
    Now show me <?php echo $randomInt; ?> Kitterns!

</p>
</body>
</html>