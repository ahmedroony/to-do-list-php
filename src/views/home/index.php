<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <ul>
    </ul>
    <h1>Home</h1>
    <a href="<?= url('create') ?>">add new task</a>
    <table>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Is Done</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
                <?php
            if(!empty($tasks)):?>
                <?php foreach($tasks as $task):?>
            <tr>
                <td><?= htmlspecialchars($task['id']) ?></td>
                <td><?= htmlspecialchars($task['title']) ?></td>
                <td><?= $task['isdone'] ? 'done' : 'notdone' ?></td>
                <td><a href="<?= url('show') ?>">show</a></td>
                <td><a href="<?= url('edit') ?>">edit</a></td>
                <td><a href="<?= url('destroy') ?>">delete</a></td>
            </tr>
            <?php endforeach;?>
            <?php else: ?>
            <tr>
                <td>no tasks found</td>
            </tr>
            <?php endif; ?>
            </tr>
        </table>
</body>

</html>
