<?php

$urlMap = [
    '/create-tour' => 'create-tour.php',
    '/list-tours' => 'list-tours.php',
    '/edit-tour' => 'edit-tour.php',
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/name' => 'name.php',
    '/pictures' => 'pictures.php',
    '/random' => 'random.php',
    '/secret' => 'secret.php',
    '/' => 'homepage.php'

];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';

if (isset($urlMap[$pathInfo])) {
    // Load a specific page script
    include(__DIR__ . '/../pages/' . $urlMap[$pathInfo]);
} else {
    // Produce a 404 response
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include(__DIR__ . '/../pages/404.php');
}