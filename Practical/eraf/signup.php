
<?php
include('connection.php');


if(isset($_POST["btnsubmit"]))
{



    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    

    $query = "INSERT INTO `user`(`u_name`, `u_email`, `u_password`) VALUES ('$name','$email','$password')";

    if(mysqli_query($connect,$query))
    {
        echo "<script>
		alert('Account Created');
		window.location.href='login.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

<style>
   .container{
    border:2px solid gray;
  }
  .container input{
    width:500px;
    margin-left:300px;
  }
  label{
    margin-left:300px;
  }
  .container{
    height:400px;
    box-shadow:0px 4px 8px 0px;
  }
  button{
margin-left:300px;
  }
  input{
    box-shadow:0px 4px 8px 0px;
  }
</style>
</head>

<body style="background-color:pink;"><br>
<div class="container">
<form action="" method="POST">
    <h1 style="text-align:center">Sign Up</h1>
  <div class="mb-3"><br>
    <label for="exampleInputEmail1" class="form-label">NAME</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">EMAIL</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>


  
 <a href="task.php"><button type="submit" name="btnsubmit" class="btn btn-danger">Register</button></a>
 <a href="task.php"> Login </a>
</form>
</div>
</body>
</html>
