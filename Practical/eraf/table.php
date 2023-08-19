<?php

include('navbar.php');
include('connection.php');
$fetch_query = "SELECT * FROM `practical`";
$run_query = mysqli_query($connect, $fetch_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
  body{
    background-color:pink;
  }
 
  h1{
    color:orange;
  }
  th{
    color:purple;
  }
  td{
    color:red;
  }
  .container{
    border:2px solid gray;
  }
</style>
<body>

<h1 style="text-align:center">Your Task</h1>
 
  <a href="./task.php"><button type="submit" name="btnsubmit" class="btn btn-danger">Add tasks</button></a>
<hr style="width:200px;margin-left:580px;color:white;height:10px">
    <div class="container mt-5">
<table class="table table_bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Description</th>
      <th scope=>Date</th>
      <th>Edit/Delete</th>
    
      
     
    </tr>
  </thead>
  
    <?php
   
    while ($row = mysqli_fetch_array($run_query)) { ?>
     <tr>
<td> <?php echo $row['p_id'];?></td>
<td> <?php echo $row ['p_name'];?></td>
<td><?php echo $row ['p_description'];?></td>
<td><?php echo $row ['p_date'];?></td>
<td>
<a class="btn btn_success" href="update.php?id=<?php echo $row['p_id']?>" >Update</a>
<a class="btn btn_danger" onclick="return confirm('are you sure? you want to delete')"  href="delete.php?id=<?php echo $row['p_id'] ?>">Delete</a>
</td>

</tr>
    <?php
    }
    ?>
  

</table>
</div>
</body>
</html>