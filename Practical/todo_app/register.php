<?php
session_start();
include "config.php";

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username` = '$username'";
    $fetchUsers = mysqli_query($conn, $query);
    $noOfUsers = mysqli_num_rows($fetchUsers);

    if ($noOfUsers > 0) {
        echo "<script>alert('User already exists')</script>";
    } else {
        $query = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('User Registered')</script>";
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Registration failed')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-box">
        <h2 class="text-center mb-4">Register</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="user-box text-center">
                <a href="index.php">Already Registered?</a>
            </div>

            <input type="submit" name="register" class="btn-login mt-2" value="Register">

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>