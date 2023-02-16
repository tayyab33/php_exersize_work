<?php
include(__DIR__ . '/../bootstrap.php');
include(__DIR__ . '/functions/task-crud.php');
if (!isset($_SESSION['authenticated_user'])) {
    header('Location: login.php');
    exit;
}
 if(isset($_POST['task'])){
    
 }

 $id = $_GET['id'];
 $data = load_task_data($id);
  $normalizedData = [
        'task' => $data['task'] ?? ''
    ];
$title = 'Edit task';
include(__DIR__ . '/../_header.php');
?>
<?php
// including form snippet
include __DIR__ . '/snippets/_task-form.php';

include(__DIR__ . '/../_footer.php');

?>