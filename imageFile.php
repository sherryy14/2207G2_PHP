<?php

if(isset($_POST['submit'])){

// echo "<pre>";
// print_r($_FILES['image']);
// echo "</pre>";
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
// tmp_name , location 

if($img_size <= 200000){
    if(move_uploaded_file($tmp_name, "image/$img_name")){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully uploaded!</strong>Your image has been uploaded
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

      echo "<img src='image/$img_name' class=img-thumbnail w-25'>";
      
    }else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> Image could not upload.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        
    }

}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oops!</strong> Please choose image less than 2 Mbs.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Image</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

        <input type="file" name="image" id="" class='form-control w-25'>
        <input type="submit" value="Upload" name='submit' class='btn btn-primary'>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
