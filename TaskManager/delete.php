<?php
session_start();

$deleteSuccess = false;
$deleteError = false;

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "task_manager";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM tasks WHERE id = $id";
    $result = $connection->query($sql);

    if ($result) {
        $deleteSuccess = true;
        $_SESSION['successMessage'] = "Task deleted successfully!";
        header("location: /index.php");
        exit;
    } else {
        $deleteError = true;
    }
}

include_once 'views/index_view.php';


