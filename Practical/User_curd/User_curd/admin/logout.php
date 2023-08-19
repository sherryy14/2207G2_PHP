<?php 

session_start();

if(isset($_SESSION['user'])){
    session_unset();
    session_destroy();
    header("Location: main_login.php");
  }

?>