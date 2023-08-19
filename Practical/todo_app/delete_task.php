<?php
session_start();

include "config.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: dashboard.php');
    exit;
}

$taskId = $_GET['id'];
$taskId = mysqli_real_escape_string($conn, $taskId);

$query = "DELETE FROM tasks WHERE id = '$taskId'";
mysqli_query($conn, $query);

header('Location: dashboard.php');
exit;
