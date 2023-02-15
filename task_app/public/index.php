<?php
$urlMap = [
   'login' => '/login.php',
   'logout' => '/logout.php',
   'task' => '/task.php',
   '404' => '/404.php',
   '/' => '/login.php',
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
if (isset($urlMap[$pathInfo])) {
    // Load a specific page script
    header('Location: ../pages' . htmlspecialchars($urlMap[$pathInfo], ENT_QUOTES));
    
} else {
    // Return a 404 status code
     header('Location: ../pages/404.php');
}