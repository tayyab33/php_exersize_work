<?php
 $title = $title ?? "PHP for the web";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
   <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Homepage.php">Homepage</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="list-tours.php">List tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Homepage.php">Name</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="random.php">Random number</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="picture.php">Pictures</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="secret.php">Secret picture</a>
            </li>
        <?php
        if (isset($_SESSION['message'])) {
            ?>
                <li class="navbar-text">
                    You are logged in as:
                    <?php echo $_SESSION['message']; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>
            <?php
        } else {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log in</a>
            </li>
            <?php
        }
        ?>
        </ul>
    </nav>