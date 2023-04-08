<?php
    // echo "Hello World!";
    // echo 234;
    // echo 23.4;

    $myName = 'Nasar';
    $age = 2.4;
    $alive = true;
    $a = null;


    // print $myName;
    // echo "<h1>My name is <u>" . $myName . "</u><br> My age is " . $age ."</h1>";

    // echo "First msg" , " Second msg";
    // print "First msg" , " Second msg";
//     echo $a;
//    var_dump($a);

   $fname = "Muhammad Shahryar";
   $lname = 'Shahryar';

   echo strlen($fname);
   echo "<br>";
   echo str_word_count($fname);
   echo "<br>";
   echo strrev($lname);
   echo "<br>";
   echo strpos($fname,"Shahr");
   echo "<br>";
   echo str_replace("Steve","Diana","Hello Diana");
   echo "<br>";
   echo ucwords("this is php");

   $b = "hello";
   var_dump(is_numeric($b));

   echo "<br>";
   echo (pi()*3);
   echo "<br>";
   echo "<br>";
   echo "<br>";
   
   $x = 5;
   $y = 5;
   
   echo "Add: " . $x + $y;
   echo "<br>";
   echo "Sub: " . $x - $y;
   echo "<br>";
   echo "Mult: " . $x * $y;
   echo "<br>";
   echo "Div: " . $x / $y;
   echo "<br>";
   echo "Mod: " . $x % $y;
   echo "<br>";
   echo "Sqr: " . $x ** $y;
   echo "<br>";
   echo "Post Increment: " . $x++ ;
//    echo "Value Increased: " . $x ;
   echo "<br>";
   echo "Equal to ".$x == $y;
   
   echo "<br>";
   $num1 = 5;
   $num2 = 10;

   echo $num1.=$num2;
   echo "<br>";
   
   


?>