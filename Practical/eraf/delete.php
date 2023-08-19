<?php

include('connection.php');
$id = $_GET['id'];
$delete_query = "DELETE FROM `practical` WHERE p_id=$id";
$run_query = mysqli_query($connect,$delete_query);
if($run_query){
    header("location:table.php");

}
else{
    echo "not deleted";
}
?>