<?php
include(__DIR__ . '/../bootstrap.php');
if(isset($_SESSION['authenticated_user'])){
    unset($_SESSION['authenticated_user']);
    header('location: login.php');
}