<?php
include('connection.php');
$id =$_GET['id'];
$select_query = "SELECT * FROM practical WHERE p_id='$id'";
$run_query1 = mysqli_query($connect,$select_query);
$fetch_data = mysqli_fetch_array($run_query1);

// Check is result set le grater then 0
// if (mysqli_num_rows($run_query1) > 0) {
// 	while($rowCatData = mysqli_fetch_array($run_query1)){
//   		echo$fetch_data['m_name'] .'<br>';
// 	}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form class="container" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">name</label>
  <input type="text" name="p_name"value="<?php echo $fetch_data['p_name'];?>"class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">email</label>
  <input type ="text" name="p_description" value="<?php echo $fetch_data['p_description'];?>"class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">password</label>
  <input type ="date" name="p_date" value="<?php echo $fetch_data['p_date'];?>"class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
</div>
<button type ="submit"name="update"class="btn btn_primary">update</button>
</form>
<?php
if(isset($_POST['update'])){
  $p_name = $_POST['p_name'];
  $p_description= $_POST['p_description'];
  $p_date= $_POST['p_date'];
  $update = "UPDATE `practical` SET `p_name`='$p_name',`p_description`='$p_description',`p_date`='$p_date' where p_id='$id'";
  $run = mysqli_query($connect,$update);
  if($run){
    header("location:table.php");
  }
}



?>
</body>
</html>