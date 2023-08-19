<?php
include "config.php";
session_start();


if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}

$errorMessage = "";

if (isset($_POST['login'])) {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username` = '$inputUsername' AND `password` = '$inputPassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        header('Location: dashboard.php');
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
    } else {
        $errorMessage = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="login-box" id="login-box">
    <h2 class="text-center mb-4" id="login-heading">Login</h2>
    <form method="post" id="login-form">
        <div class="user-box" id="username-box">
            <input type="text" name="username" id="username-input" required>
            <label for="username-input">Username</label>
        </div>
        <div class="user-box" id="password-box">
            <input type="password" name="password" id="password-input" required>
            <label for="password-input">Password</label>
        </div>
        <div class="user-box text-center" id="register-box">
            <a href="register.php" id="register-link">Don't have an account? Register here</a>
            <p class="error-message" id="error-message"><?php echo @$failed ?></p>
        </div>

        <input type="submit" name="login" class="btn-login" id="login-btn" value="Login">
    </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>