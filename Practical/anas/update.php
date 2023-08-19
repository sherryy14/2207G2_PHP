<?php
include("connection.php");
$id=$_GET['id'];
$query ="SELECT * FROM `tbl_data` WHERE id='$id'";
$run =mysqli_query($connect,$query );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
    <form action=""method="POST" enctype="multipart/form-data">
    <div class="conatiner mt-3">    
<
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
</form>
 
  <button type="submit"name="btnsubmit" class="btn btn-primary">UPDATE</button>
</form>
    </form>
  <?php
  if(isset($_POST['btnsubmit'])){
    $username = $_POST['u_name'];
    $des = $_POST['u_des'];
    $date = $_POST['date'];   
    $update = "UPDATE `tbl_data` SET `Name`=' $username ',`Description`=' $des',`Date`='$date'
     WHERE id ='$id'";
    $run = mysqli_query($connect,$update);
    if($run){
        header("location:index.php");
    }

    
  }
  ?>
</body>
</html>