<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "task_manager";

$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$description = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $description = $_POST["description"];

    do {
        if (empty($name) || empty($description)) {
            $errorMessage = "All fields are required";
            break;
        }

        if (strlen($name) < 3 || strlen($description) < 3) {
            $errorMessage = "Task name and description must be at least 3 characters long.";
        } else {
            $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$name', '$description')";
            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
            } else {
                $name = "";
                $description = "";
                $successMessage = "New task added successfully!";
                $_SESSION['successMessage'] = $successMessage;
                header("location: /index.php");
                exit;
            }
        }
    } while (false);
}

include_once 'views/create_view.php';

