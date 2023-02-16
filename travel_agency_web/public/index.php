<?php
$urlMap = [
    '/create-tour' => 'create-tour.php',
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/name' => 'name.php',
    '/pictures' => 'pictures.php',
    '/random' => 'random.php',
    '/secret' => 'secret.php',
    '/list-tours' => 'list-tours.php',
    '/' => 'homepage.php'

];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
 if(isset($urlMap[$pathInfo])){
     include(__DIR__ . '/../pages/' . $urlMap[$pathInfo] '.php');
 }else
 {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 NOT FOUND');
    include(__DIR__. '/../pages/404.php');
 }