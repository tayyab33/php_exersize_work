<?php

session_start();

unset($_SESSION['authenticated_user']);

header('Location: login.php');
exit;