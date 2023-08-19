<?php
include('connection.php');
session_start();

if(isset($_POST['logout'])){

    if(!isset($_SESSION['password']) || !isset($_SESSION['email'])){
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


$select_query = "SELECT * FROM `tbl_data` ";
$run_query = mysqli_query($connect , $select_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h1>TO DO LIST</h1>
    <form  method="post">
        <input type="submit"class="btn btn-danger s-10" value="Logout" name='logout'>
        <a class="btn btn-success" href="insert.php">ADD DATA</a>
        
    </form>
  
    <div class="container m-5">
        <table class="table table-bordered">
            <tr>

            <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th> Due Date</th>
                <th> Edit/Delete</th>
            </tr>
            <?php  
        while ($row = mysqli_fetch_array($run_query)) {  ?>
            <tr>

            <td> <?php echo $row['id'] ?> </td>
                <td> <?php echo $row['Name'] ?> </td>
                <td> <?php echo $row['Description'] ?> </td>
                
                <td> <?php echo $row['Date'] ?> </td>
             

             
                

              <td> 
                <a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                
                 </td>
            </tr>
            <?php  
            }
            ?>
</table>
</div>

</body>
</html>
