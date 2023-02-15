<?php
 $title = $title ?? "PHP for the web";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
</head>
<body>
    <?php include(__DIR__ . '/_flash_message.php'); ?>