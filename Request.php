<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    if (empty($fname)) {
        echo "Name is empty 1";
    } else {
        echo $fname;
    }
}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty 2";
    } else {
        echo $name;
    }
}
?>

</body>
</html>