<?php

include(__DIR__ . '/../bootstrap.php');

if (!isset($_SESSION['authenticated_user'])) {
    header('Location: login.php');
    exit;
}

// Write your code here to create mark-as-done page