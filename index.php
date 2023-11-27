<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link rel="stylesheet" href="stylee.css">
    <style>
        body {
            background-image: url(_DSC8269.JPG);
            font-family: Arial, sans-serif;
            height: 100%;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .todo-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            margin-top: 30px;
        }

        h2 {
            text-align: center;
            color: #2ecc71;
        }

        input[type="text"] {
            width: 70%;
            padding: 10px;
            box-sizing: border-box;
        }

        .add-btn {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2ecc71;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .edit-btn, .delete-btn {
            padding: 6px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #2ecc71;
            border: 1px solid #2ecc71;
            border-radius: 3px;
        }

        .delete-btn {
            color: #e74c3c;
            border: 1px solid #e74c3c;
        }
        @media (max-width: 600px) {
    input[type="text"] {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .todo-container {
        padding: 10px;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <form action="insert.php" method="post">
            <div class="todo-container">
                <h2>Todo List</h2>
                <input type="text" name="list" placeholder="Add a new task">
                <button class="add-btn" type="submit">Add</button>
            </div>
        </form>

        <!-- Display data from localhost -->
        <?php
        include "config.php";
        $sql = mysqli_query($con, "SELECT * FROM `tabletodo` ");
        $perulangan = 1;
        ?>

        <!-- Display data -->
        <div class="todo-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Activity</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td><?php echo $perulangan++ ?></td>
                            <td class="text-black "><?php echo $row['List'] ?></td>
                            <td><a href="update.php? ID=<?php echo $row['Id'] ?>" class="edit-btn">Edit</a></td>
                            <td><a href="delete.php? ID=<?php echo $row['Id'] ?>" class="delete-btn">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>