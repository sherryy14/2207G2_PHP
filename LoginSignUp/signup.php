<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form class="row g-3" method="post">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" name="fname" placeholder="Enter Your First Name" >
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" name="lname" placeholder="Enter Your Last Name">
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername" name="uname" aria-describedby="inputGroupPrepend2" required placeholder="Enter Username">
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationDefault03" name="email" required>
  </div>
 
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationDefault03" name="password" required>
  </div>
 
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <input class="btn btn-primary" type="submit" name="signup" value="Sign Up">
    <a href="login.php">Already Have An Account?</a>
    <h6 id="valid" class='text-success'></h6>
    <h6 id="invalid" class='text-danger'></h6>
  </div>
</form>
    </div>
</body>
</html>



<?php
include "config.php";
session_start();

if(isset($_SESSION['user'])){
    echo "<script> 
        window.location.href = 'index.php'
    </script>";
}
if (isset($_POST['signup'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   

    // if ($conn) {
    //     echo "Connected";
    // }


    $users = "SELECT * FROM `users` WHERE `username`= '$uname' OR `email` =' $email'";
    $fetchUsers = mysqli_query($conn, $users);

    $noOfUsers = mysqli_num_rows($fetchUsers);


    if ($noOfUsers > 0) {
        echo "<script>document.getElementById('invalid').innerText = 'User already exist' </script>";

    } else {

        $query = "INSERT INTO `users` ( `firstname`, `lastname`, `username`, `email`, `password`) VALUES ( '$fname', '$lname', '$uname', '$email', '$password')";

        $result = mysqli_query($conn, $query);

        echo "<script>document.getElementById('valid').innerText = 'User Registered' </script>";
        echo "<script>
        setTimeout(()=>{
            window.location.href = 'login.php'
        },1000)
        </script>";
    }


}


?>