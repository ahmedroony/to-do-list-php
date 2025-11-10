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
        <tr>
            <th>id</th>
            <th>title</th>
            <th>isdone</th>
            <th>show</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <tr>
            <td><?php
            
            ?></td>
            <td>empty</td>
            <td>empty</td>
            <td><a href="<?= url('show')  ?>">show</a></td>
            <td><a href="<?= url('edit')  ?>">edit</a></td>
            <td><a href="<?=url('destroy')?>">delete</a></td>
        </tr>
    </table>
</body>
</html>