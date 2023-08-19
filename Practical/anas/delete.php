<?php
include('connection.php');
$id=$_GET['id'];
$query_delete = "DELETE FROM `tbl_data` WHERE id='$id'";
$run = mysqli_query($connect,$query_delete);

if($run)
{
    header("location:index.php");
}
?>