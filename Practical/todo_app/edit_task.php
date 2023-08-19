<?php
session_start();

include "config.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: dashboard.php');
    exit;
}

$taskId = $_GET['id'];
$taskId = mysqli_real_escape_string($conn, $taskId);

$query = "SELECT * FROM tasks WHERE id = '$taskId'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $task = mysqli_fetch_assoc($result);
} else {
    header('Location: dashboard.php');
    exit;
}

if (isset($_POST['save_task'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $dueDate = $_POST['due_date'];

    $name = mysqli_real_escape_string($conn, $name);
    $description = mysqli_real_escape_string($conn, $description);
    $dueDate = mysqli_real_escape_string($conn, $dueDate);

    $query = "UPDATE tasks SET name = '$name', description = '$description', due_date = '$dueDate' WHERE id = '$taskId'";
    mysqli_query($conn, $query);

    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="login-box">
        <h2 class="text-center mb-4">Edit Task</h2>
        <form method="post" action="edit_task.php?id=<?php echo $taskId; ?>">
            <div class="user-box">
                <input type="text" name="name" value="<?php echo $task['name']; ?>" required>
                <label>Task Name</label>
            </div>
            <div class="user-box">
                <textarea name="description" required
                    style="width: 100%; height: 100px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;"><?php echo $task['description']; ?></textarea>
                <label>Description</label>
            </div>
            <div class="user-box">
                <input type="date" name="due_date" value="<?php echo $task['due_date']; ?>" required>
                <label>Due Date</label>
            </div>
            <input type="submit" class="btn btn-primary btn-login" name="save_task" value="Save">
        </form>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>