<?php
include('connection.php');
if(isset($_POST['btn_submit'])){
    $username = $_POST['u_name'];
    $des = $_POST['u_des'];
    $date = $_POST['date'];    




 $query ="INSERT INTO `tbl_data`( `Name`, `Description`,`Date`) VALUES 
 ('$username','$des','$date')";

    $run = mysqli_query($connect, $query);
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="conatiner mt-3">    
<form method="POST" >
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="u_name"class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" name="u_des"class="form-control" id="exampleInputEmail1">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Due Date</label>
    <input type="text" name="date" class="form-control" id="exampleInputPassword1">
  </div>

<button type="submit"  name="btn_submit" class="btn btn-primary">ADD</button>
</form>
</div>
</body>
</html>