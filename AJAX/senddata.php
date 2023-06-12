<?php 

$conn = mysqli_connect('localhost','root','','sdtData');

$name = $_POST['sName'];
$class = $_POST['sClass'];
$age = $_POST['sAge'];

$query = "INSERT INTO `stdtable` ( `name`, `class`, `age`) VALUES ( '{$name}', '{$class}','{$age}')";
$res = mysqli_query($conn, $query);


?>