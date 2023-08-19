<?php
include('connection.php');

include('navbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search Data</title>

    <style>
        body{
            background-color:pink;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <form method="post">
<input type="text" placeholder="Search Data" name="search"> 
<button class="btn btn-dark btn-sm" name="submit" >Search</button>

        </form>
        <div class="container my-5">
            <table class="table">
      <?php
      if(isset($_POST['submit'])){
        $search=$_POST['search'];

        $sql = "Select * from `practical` where p_id='$search'
        or p_name='$search'
        or p_description='$search'
        or p_date='$search'";
        $result=mysqli_query($connect,$sql);

        if($result){
            $num=mysqli_num_rows($result);
            echo $num;
            if(mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th> ID </th>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                </tr>
                </thead>
          ';

          while($row=mysqli_fetch_assoc($result)){
         echo  '<tbody>
         <tr>


         <td>'.$row['p_id'].'</td>
         <td>'.$row['p_name'].'</td>
         <td>'.$row['p_description'].'</td>
         <td>'.$row['p_date'].'</td>


         </tr>;
         </tbody>';
          }
         


            }else{
                echo '<h2 class="text-danger">Data not Found</h2>';
            }
        }
      }
      ?>
      
        
        
        </table>

        </div>
    </div>
</body>
</html>