<?php
session_start();
include "config.php";

$userId = $_SESSION['user_id'];

$query = "SELECT username FROM users WHERE id = '$userId'";
$result = mysqli_query($conn, $query);
$userData = mysqli_fetch_assoc($result);
$userName = $userData['username'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Task Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h6>Welcome, <?php echo $userName; ?>!</h6>
                <div class="d-flex justify-content-end">
                    <a href="logout.php" class="btn btn-success top-right">Logout</a>
                </div>
                <h1 class="mt-5">Your Tasks</h1>
                <div class="d-flex justify-content-end">
                    <a href="add_task.php" class="btn btn-primary">Add New Task</a>
                </div>

                <form class="d-flex w-50" role="search" method="post">
                    <input class="form-control me-2" name="search_query" type="text" placeholder="Search"
                        aria-label="Search">
                    <input class="btn btn-outline-primary" type="submit" name="search" value="Search">
                </form>

                <?php include 'task_list.php'; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>