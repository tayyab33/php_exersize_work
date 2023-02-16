<?php
$urlMap = [
    'login' => 'login.php',
    'logout' => 'logout.php',
    'list-tasks' => 'list-tasks.php',
    'tasks' => 'tasks.php',
    'create-task' => 'create-task.php',
    '404' => '404.php',
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
print_r($pathInfo);
if (isset($urlMap[$pathInfo])) {
    include(__DIR__ . '../pages/' . $urlMap[$pathInfo]);
} else {

    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include(__DIR__ . '/../pages/404.php');
}