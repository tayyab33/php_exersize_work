<?php

include('bootstrap.php');

unset($_SESSION['authenticated_user']);

header('Location: login.php');
exit;