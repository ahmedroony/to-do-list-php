<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #e3f2fd);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #2b2d42;
            font-size: 2.2rem;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        a.center-link {
            display: inline-block;
            text-decoration: none;
            color: white;
            background: linear-gradient(90deg, #2196f3, #00bcd4);
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        a.center-link:hover {
            transform: translateX(-50%) scale(1.05);
            background: linear-gradient(90deg, #42a5f5, #26c6da);
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #2196f3;
            color: white;
            padding: 10px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h1>edit New Task</h1>
    <form action="<?= $action ?>" method="post">
        <input type="text" name="title" value="<?= $task['title'] ?>">
        <input type="checkbox" name="isdone" value="1"<?= !empty($task['isdone']) ? 'checked' : '' ?>>
        <input type="submit" value="save change">
    </form>
</body>

</html>
