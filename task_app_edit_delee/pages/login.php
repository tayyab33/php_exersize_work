<?php

include(__DIR__ . '/../bootstrap.php');

// You shouldn't store passwords anywhere, but for testing purposes: these hashes are made of the same password: "test"
$users = [
   'tayyab' => '$2y$10$38qFSYRtWaADX70LCRcrzu3jP/Dn35klBfrA69nDwjim3xllaBeWm'
];

if (isset($_POST['username'], $_POST['password'])) {

    if (isset($users[$_POST['username']])) {
        $expectedPasswordHash = $users[$_POST['username']];

        if (password_verify($_POST['password'], $expectedPasswordHash)) {

            $_SESSION['authenticated_user'] = $_POST['username'];

            header('Location: list-tasks.php');
            exit;
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
?>