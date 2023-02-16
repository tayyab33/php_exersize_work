<?php

include(__DIR__ . '/../bootstrap.php');

// You shouldn't store passwords anywhere, but for testing purposes: these hashes are made of the same password: "test"
$users = [
    'matthias' => '$2y$10$1sXx3dPquOicIl53Y7XRdOqyS4P6flYXXpxHpTC83ZnusdxpEPtXe',
    'tomas' => '$2y$10$vruLMw5IRBI4WwGVfpwF2Om3VgULeTrd7yC3tHAURqVLaCW72unQy'
];

if (isset($_POST['username'], $_POST['password'])) {

    if (isset($users[$_POST['username']])) {
        $expectedPasswordHash = $users[$_POST['username']];

        if (password_verify($_POST['password'], $expectedPasswordHash)) {

            $_SESSION['authenticated_user'] = $_POST['username'];

            // ** Redirect to /list-tasks 
        }
    }
}
?>
<?php
$title = 'Login';
include(__DIR__ . '/../_header.php');
?>
    <form method="post">
        <div>
            <label for="username">
                Username:
            </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">
                Password:
            </label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
<?php
include(__DIR__ . '/../_footer.php');