
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <script>
    document.getElementById('data').innerText = 'Data Inserted'
</script> -->
<body>
    <form action="signup.php" method="post">
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">

        <input type="submit" value="Submit" name="submit">
    </form>


    <h2 id="conn"></h2>
    <h2 id="data"></h2>
</body>

</html>


<?php



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

                // connection, connection name, password, database name 
    $conn = mysqli_connect('localhost','root','','formhandle');

    $query = "INSERT INTO `form` (`username`, `email`, `passowrd`) VALUES ('$username', '$email','$password')";


    $result = mysqli_query($conn,$query);

    

    if($result){
        echo "<script>
        document.getElementById('data').innerText = 'Data Inserted'
    </script>";
    }else{
        echo "<script>
        document.getElementById('data').innerText = 'Data Not Inserted'
    </script>";
    }

    if($conn){
        
        echo "<script>
        document.getElementById('conn').innerHTML = 'Connection Established'
    </script>";
    }
}

?>
