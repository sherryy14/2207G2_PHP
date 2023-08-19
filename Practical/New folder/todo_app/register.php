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
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="login-box" id="register-container">
    <h2 class="text-center mb-4" id="register-heading">Register</h2>
    <form method="post" id="register-form">
        <div class="user-box" id="username-box">
            <input type="text" name="username" id="username-input" required>
            <label for="username-input" id="username-label">Username</label>
        </div>
        <div class="user-box" id="password-box">
            <input type="password" name="password" id="password-input" required>
            <label for="password-input" id="password-label">Password</label>
        </div>
        <div class="user-box text-center" id="login-link-box">
            <a href="index.php" id="login-link">Already Registered?</a>
        </div>

        <input type="submit" name="register" class="btn-login mt-2" id="register-btn" value="Register">
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>