<?php
session_start();

if(isset($_POST['logout'])){

    if(!isset($_SESSION['user'])){
        echo "<script> 
            window.location.href = 'login.php'
      </script>";
    }else{
        session_unset();
        session_destroy();
        echo "<script> 
            window.location.href = 'login.php'
      </script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo  $_SESSION['user'] ?></h1>

    <form  method="post">
        <input type="submit" value="Logout" name='logout'>
    </form>
</body>
</html>