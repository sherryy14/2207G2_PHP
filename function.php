<?php

// function abc(){
//     echo "This is my name <br>";
// };

// abc();

function fullName($fname= "Hamza",$lname = "Youtuber"){
    echo "First Name: $fname and Last Name: $lname <br>";
}

fullName("Nasar","Khan");
fullName("Arees","Shah");
fullName();

function even($no = 5){
    echo "<h2>Loop till $no </h2>";
    echo "<ul>";
    for($i =0; $i<= $no; $i++){
        if($i % 2 == 0){
            echo "<li>$i Even</li>";
        }
        if($i % 2 == 1){
            echo "<li>$i Odd</li>";
        }
    }
    echo "</ul>";
}


even(20);
// even(10);
// even(100);
even();

function sum($a, $b){
    $c = $a+$b;
    return $c;

}

echo "4 + 6 = ".sum(4,6). "<br>";
echo "24 + 26 = ".sum(24,26). "<br>";


?>