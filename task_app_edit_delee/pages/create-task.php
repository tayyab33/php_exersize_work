<?php
include(__DIR__ . '/../bootstrap.php');
include(__DIR__ . '/functions/task-crud.php');
// Make the required changes to the code below
// Use the new functions and the form snippet

if (!isset($_SESSION['authenticated_user'])) {
    header('Location: login.php');
    exit;
}

$formErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $normalizedData = [
        'task' => $_POST['task'] ?? ''
    ];

    if ($normalizedData['task'] === '') {
        $formErrors['task'] = 'Task can not be empty';
    }

    if (count($formErrors) === 0) {
       if(save_all_tasks($_POST)){
        header('Location: list-tasks.php');
        exit;
    }
    }
}

$title = 'New task';
include(__DIR__ . '/../_header.php');
?>
<?php
// including form snippet
include __DIR__ . '/snippets/_task-form.php';

include(__DIR__ . '/../_footer.php');
?>
