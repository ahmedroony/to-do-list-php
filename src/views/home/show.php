<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        .card {
            width: 400px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h2 {
            margin-bottom: 20px;
        }

        .status {
            padding: 8px 15px;
            border-radius: 8px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 20px;
        }

        .done {
            background: #4caf50;
            color: white;
        }

        .not-done {
            background: #e53935;
            color: white;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background: #2196f3;
            color: white;
            border-radius: 6px;
            margin-top: 15px;
        }
    </style>
</head>
</head>
<body>
    <h3>show</h3>
    <a href="<?= url('show?id=' . $task['id']) ?>">Show</a>
</body>
</html>