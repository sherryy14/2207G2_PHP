<?php
include('connection.php');
// include('search.php');
include('navbar.php');
if(isset($_POST{'btnsubmit'})){
    $p_name = $_POST['name'];
    $p_description = $_POST['description'];
    $p_date = $_POST['date'];


    $query="INSERT INTO `practical`(`p_name`,`p_description`,`p_date`) VALUES ('$p_name','$p_description','$p_date')";
    $run = mysqli_query($connect,$query);
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
    <h1 style="text-align:center">ADD TASK</h1>
  <div class="mb-3"><br>
    <label for="exampleInputEmail1" class="form-label">NAME</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">DESCRIPTION</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">DATE</label>
    <input type="date" name="date" class="form-control" id="exampleInputPassword1">
  </div>


  
  <a href="table.php"><button type="submit" name="btnsubmit" class="btn btn-danger">Submit</button></a>
</form>
</div>
</body>
</html>