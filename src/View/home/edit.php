<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
</head>
<body>
    <h1>Edit Task</h1> 
    <form action="<?=$action?>" method="get">
        <label for="">Title</label>
        <input type="text" name="title">
        <label for="">Completed</label>
        <input type="checkbox" name="completed" >
        <input type="submit" value="update">
    </form>
</body>
</html>
