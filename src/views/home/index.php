<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h1,a {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin: 0 0 25px 0;
            letter-spacing: 1px;
            text-transform: uppercase;

            h1::after {
                content: "";
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 4px;
                border-radius: 3px;
                background: linear-gradient(90deg, #4facfe, #00f2fe);
            }
            a::after {
                content: "";
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 4px;
                border-radius: 3px;
                background: linear-gradient(90deg, #4facfe, #00f2fe);
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 30px 40px;
        }

        /* ---------- Header Section ---------- */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            font-weight: 600;
            font-size: 28px;
            color: #2c3e50;
        }

        .btn-add {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 15px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 172, 254, 0.3);
        }

        /* ---------- Table Styling ---------- */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
        }

        thead {
            background: #4facfe;
            color: #fff;
        }

        th,
        td {
            padding: 14px;
            text-align: center;
            font-size: 15px;
        }

        tbody tr {
            background: #fff;
            transition: background 0.3s ease;
        }

        tbody tr:nth-child(even) {
            background: #f7fbff;
        }

        tbody tr:hover {
            background: #eef7ff;
        }

        /* ---------- Buttons ---------- */
        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: #fff;
            font-size: 13px;
            transition: 0.2s ease;
        }

        .btn-show {
            background: #6c63ff;
        }

        .btn-edit {
            background: #f39c12;
        }

        .btn-delete {
            background: #e74c3c;
        }

        .btn:hover {
            opacity: 0.85;
            transform: scale(1.05);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                gap: 10px;
            }

            th,
            td {
                font-size: 13px;
                padding: 10px;
            }

            .btn {
                padding: 5px 8px;
            }
        }
    </style>
    </style>
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
                <td><a class="btn btn-show" href="<?= url('show?id=' . $task['id'])?>">show</a></td>
                <td><a class="btn btn-edit " href="<?= url('edit?id=' . $task['id']) ?>">edit</a></td>
                <td><a class="btn btn-delete " href="<?= url('destroy?id=' . $task['id']) ?>">delete</a></td>
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
