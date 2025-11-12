<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updata</title>
</head>

<body>
    <h1>edit New Task</h1> 
    <form action="<?=$action?>" method="post">
        <input type="text" name="title" value="<?= $task['title']?>">
        <input type="checkbox" name="isdone" value="1"<?= !empty($task['isdone'])?'checked':''?>>
        <input type="submit" value="save change">
    </form>
</body>
</html>
