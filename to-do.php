<?php

// Step 1: Define File Constant
define("TASKS_FILE", 'tasks.json');


// Step 2: Create Function to save tasks (json data)
function loadTasks(){
    if(!file_exists(TASKS_FILE)){
        return [];
    }
    $data = file_get_contents(TASKS_FILE);
    return $data ? json_decode($data, true) : [];
}
$tasks = loadTasks();


// Step 3: Create Function to load saved tasks
function saveTasks(array $tasks): void{
    file_put_contents(TASKS_FILE, json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}


// Step 4: Add task after submitted form
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['task']) && !empty(trim($_POST['task']))){
        $tasks [] =[
            'name' => htmlspecialchars(trim($_POST['task'])),
            'done' => false
        ];
        saveTasks($tasks);
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }
}






?>

<!-- UI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    <style>
        body {
            margin-top: 20px;
        }
        .task-card {
            border: 1px solid #ececec; 
            padding: 20px;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
        .task{
            color: #888;
        }
        .task-done {
            text-decoration: line-through;
            color: #888;
        }
        .task-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        ul {
            padding-left: 20px;
        }
        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="task-card">
            <h1>To-Do App</h1>

            <!-- Add Task Form -->
            <form method="POST">
                <div class="row">
                    <div class="column column-75">
                        <input type="text" name="task" placeholder="Enter a new task" required>
                    </div>
                    <div class="column column-25">
                        <button type="submit" class="button-primary">Add Task</button>
                    </div>
                </div>
            </form>

            <!-- Task List -->
            <h2>Task List</h2>
            <ul style="list-style: none; padding: 0;">
                <!-- TODO: Loop through tasks array and display each task with a toggle and delete option -->
                <!-- If there are no tasks, display a message saying "No tasks yet. Add one above!" -->
                
                     <li>No tasks yet. Add one above!</li>
                    <!-- if there are tasks, display each task with a toggle and delete option -->
                 
                    
                        <li class="task-item">
                            <form method="POST" style="flex-grow: 1;">
                                <input type="hidden" name="toggle" value="">
                           
                            <button type="submit" style="border: none; background: none; cursor: pointer; text-align: left; width: 100%;">
                        <span class="task">
                          Task 1
                        </span>
                    </button>
                     </form>

                     <form method="POST">
                <input type="hidden" name="delete" value="">
                <button type="submit" class="button button-outline" style="margin-left: 10px;">Delete</button>
                     </form>
                        </li>

            </ul>

        </div>
    </div>
</body>
</html>