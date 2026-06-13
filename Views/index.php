<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Task Manager</title>
</head>
<body>
    <h1>Create/Manage your tasks:</h1>
    <form action="manageTasks.php" method="POST" enctype="multipart/form-data">
        <div class="containerTasks">
            <div class="inputAdd">
                <input type="text" id="newTasks" name="titleTask" placeholder="Add task">
                <input type="file" id="archive" name="archive">
                <button id="btn-add" type="submit">Add</button>
            </div>
            <ul id="list">
            </ul>
        </div>
    </form>
</body>
</html>