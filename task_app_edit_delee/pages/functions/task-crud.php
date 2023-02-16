<?php

// Create the reusable functions below

function normalize_submitted_data(array $submittedData): array
{
   //TODO
}
function validate_normalized_data(array $normalizedData): array
{
   //TODO
}
function load_all_tasks_data(): array
{
   //TODO
}
function save_all_tasks(array $tasksData): void
{ 
   global $normalizedData;
        $tasksJsonFile = __DIR__ . '/../../data/tasks.json';
        if (file_exists($tasksJsonFile)) {
            $jsonData = file_get_contents($tasksJsonFile);

            $tasksData = json_decode($jsonData, true);
        } else {
            $tasksData = [];
        }

        $tasksData[] = [
            'username' => $_SESSION['authenticated_user'],
            'task' => $normalizedData['task'],
            'id' => count($tasksData) > 0 ? count($tasksData) + 1 : 1
        ];
        file_put_contents($tasksJsonFile, json_encode($tasksData, JSON_PRETTY_PRINT));
}


function load_task_data(int $id): array
{
    if(!empty($id)){
        $tasksJsonFile = __DIR__ . '/../../data/tasks.json';
        $content = file_get_contents($tasksJsonFile);
        $arrayform = json_decode($content, true);
        foreach($arrayform as $array){
            if($array['id'] === $id){
               return $array;
            }
        }
    }
      return [];
}


function save_task_data(array $modifiedTaskData): void
{
    if(!empty($modifiedTaskData)){
        $tasksJsonFile = __DIR__ . '/../../data/tasks.json';
     }
}

?>