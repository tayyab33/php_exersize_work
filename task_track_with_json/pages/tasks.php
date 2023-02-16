<?php
include(__DIR__ . '/../bootstrap.php');
$file = include(__DIR__. '/../data/task.json');
if (!isset($_SESSION['authenticated_user'])) {
    header('Location: login.php');
    exit;
}
if(file_exists($file)){
    $getcontent = file_get_contents($file);
    $tasks = json_decode($getcontent, true);
}
 
$username = $_SESSION['authenticated_user'];
$formErrors =[];
if (isset($_POST['task']) && $_POST['task'] !== '') {
      $tasks = [
          'task_Name' => isset($_POST['task']) ? $_POST['task'] : '',
      ];
}
 if(empty($tasks['task_Name'])){
    $formErrors['task_Name'] = "please add task name first";
 }
 if(count($formErrors) === 0){
    $decode = json_encode($tasks, JSON_PRETTY_PRINT);
    file_put_contents($file, $decode);
 }

$title = 'Manage tasks';
include(__DIR__ . '/../_header.php');
?>
    <h1>Manage tasks</h1>
    <h2>New task</h2>
    <form method="post">
        <div>
            <label for="task">Task</label>
            <input type="text" id="task" name="task">
            <?php isset($formErrors) ? 
              $formErrors['task_Name']
            : ''; ?>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>

    <h2>Tasks</h2>
<?php
// The tasks array may not be set:
$allTasks = isset($_SESSION['tasks'][$username])
    ? $_SESSION['tasks'][$username]
    : [];
?>
    <ul class="tasks">
        <?php
        foreach ($allTasks as $task) {
            ?>
            <li><?php echo htmlspecialchars($task, ENT_QUOTES); ?></li>
            <?php
        }
        ?>
    </ul>
<?php
include(__DIR__ . '/../_footer.php');