<?php
include("connection.php");
if(isset($_POST["signup"])){
    $f_name = $_POST ['f_name'];
    $l_name = $_POST ['l_name'];
    $email = $_POST ['email'];
    $password = $_POST['password'];
    $insert_query ="INSERT INTO `tbl_practical`(`f_name`,`l_name`,`email`, `password`) VALUES
    ('$f_name','$l_name','$email','$password')";
 $run_query = mysqli_query($connect, $insert_query);
 if($run_query){
   header ("location: login.php");
   echo"Successfully";
   
   
 }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container m-5">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control"name="f_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" class="form-control"name="l_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="signup"class="btn btn-primary">Sign Up</button>
</form>
    </div>

</body>
</html>