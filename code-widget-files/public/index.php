<?php
$urlMap = [
    '/login' => 'login.php',
    '/logout' => 'logout.php'
    // Add URL mappings for the new pages
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
if (isset($urlMap[$pathInfo])) {

    include(__DIR__ . '/../pages/' . $urlMap[$pathInfo]);
} else {

    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include(__DIR__ . '/../pages/404.php');
}