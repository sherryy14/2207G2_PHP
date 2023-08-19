<?php
session_start();

include "config.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['save_task'])) {
    $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $dueDate = $_POST['due_date'];

    $name = mysqli_real_escape_string($conn, $name);
    $description = mysqli_real_escape_string($conn, $description);
    $dueDate = mysqli_real_escape_string($conn, $dueDate);

    $query = "INSERT INTO tasks (user_id, name, description, due_date) VALUES ('$userId', '$name', '$description', '$dueDate')";
    mysqli_query($conn, $query);

    header('Location: dashboard.php');
    exit;
}