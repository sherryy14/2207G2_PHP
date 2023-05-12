<?php
$x = 5;
$y = 15;
function sum(){
    global $x, $y;
    $z = $x + $y;
    echo $z;
    $x = 10;
    echo "X inside fn: $x";  
}

echo "X outside fn: $x";

echo sum();

// $_GET;
// $_POST;
// $_SESSION;
// $_COOKIE;

function add(){

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
echo "<br><br>";
function plus(){
   static $num = 0;
    $num ++;
    echo $num;
}

plus();
plus();
plus();

echo "<br>";

// constact 
define("GREETING","Hello you! How are you today?");

echo constant("GREETING");

echo "<br>";
define("pi", '3.14134343');

echo constant("pi");


?>