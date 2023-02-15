<?php
$title = $title ?? 'PHP for the Web';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
        <link rel="stylesheet" href="/bootstrap.min.css">
    </head>
<body>

<!-- Create the navigation bar here -->
