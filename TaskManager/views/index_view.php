<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(taskId) {
            if (confirm('Are you sure you want to delete this task?')) {
                window.location.href = '/delete.php?id=' + taskId;
            }
        }
    </script>
</head>
<body>
<div class="container my-5">
    <?php
    if (isset($_SESSION['successMessage'])) {
        echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>{$_SESSION['successMessage']}</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
             ";
        unset($_SESSION['successMessage']);
    }
    if (isset($_GET["deleteError"]) && $_GET["deleteError"] == 1) {
        echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Failed to delete task!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
    }
    ?>
    <h2>List of Tasks</h2>
    <a class="btn btn-primary" href="/create.php" role="button">Add a new task</a>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_assoc()){
            echo "
                 <tr>
                 <td>$row[id]</td>
                 <td>$row[task_name]</td>
                 <td>$row[task_description]</td>
                 <td>$row[created_at]</td>
                 <td>
                     <button class='btn btn-danger btn-sm' onclick='confirmDelete($row[id])'>Delete</button>
                 </td>
             </tr>
                 ";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
