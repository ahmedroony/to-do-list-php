<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h3>List Of Tasks</h3>
    <a href="<?=$createTaskUrl?>">Add New Task</a>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>completed</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($tasks as $task) {
        ?>
            <tr>
                <td><?= $task->id ?></td>
                <td><?= $task->title?></td>
                <td><?= $task->completed ? 'completed' : 'in progress' ?></td>
                <td><a href="<?=$showTaskUrl."?id=".$task->id?>">View</a></td>
                <td><a href="<?=$editTaskUrl."?id=".$task->id?>">Edit</a></td>
                <td><a href="<?=$destroyTaskUrl."?id=".$task->id?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>