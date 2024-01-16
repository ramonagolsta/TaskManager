<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "task_manager";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM tasks";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

include_once 'views/index_view.php';
