<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="row g-3" method="post">
           
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">email</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="email" class="form-control" name='email' id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
          

            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="validationDefault05" required>
            </div>
          
            <div class="col-12">
                <input class="btn btn-primary" type="submit" name="login" value="Login" /> 
                <a href="signup.php" class='ms-2'>Register Now?</a>
            </div>
            <h6 class="text-danger" id='invalid'></h6>
            <h6 class="text-success" id='valid'></h6>
        </form>
    </div>
</body>
</html>

<?php
include "connection.php";

session_start();

if(isset($_SESSION['user'])){
    echo "<script> 
        window.location.href = 'index.php'
    </script>";
}

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `tbl_practical` WHERE `email` = '$email' AND `password` = '$password'";

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);
    print_r($row);

    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    

$users = mysqli_num_rows($result);
echo $users;
if($users == 1 ){

    echo "<script>document.getElementById('valid').innerText = 'Successfully Login' </script>";
    echo "<script> setTimeout(()=>{
        window.location.href = 'index.php'
    },1000) </script>";
}else{
    echo "<script>document.getElementById('invalid').innerText = 'User Not Registered' </script>";
}


}

?>
