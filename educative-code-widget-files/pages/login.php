<?php
include(__DIR__ . '/../bootstrap.php');

$users = [
        'tayyab' => '$2y$10$1aCoD0qyd0zAoYpHehwL8u08vkuHbdOVQQyVt.GD/mMeampmlW4LK',
   	];

if (isset($_POST['username'], $_POST['password'])) {
    // The user has submitted the login form

    if (isset($users[$_POST['username']])) {
        // The provided username is correct, now validate the password
        $expectedPasswordHash = $users[$_POST['username']];

        if (
            password_verify($_POST['password'], $expectedPasswordHash)
        ) {
            // The provided password is also correct

            // Remember the username of the user who just logged in
            $_SESSION['authenticated_user'] = $_POST['username'];

            // Redirect to /secret.php
            header('Location: secret.php');
            exit;
        }
    }
}?>
<?php
$title = 'Login';
include(__DIR__ . '/../_header.php'); ?>

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
