<?php

// Indexed Array 
$arr = array(10, 3.4, 30, 40, 50);

// echo $arr[0];
// echo $arr[1];

echo "<ul>";
for ($i = 0; $i < 5; $i++) {

    echo "<li>$arr[$i]</li>";
}
echo "</ul>";


$emp1 = ['Nasar', 'wajeeh', 'qaiser', 'moiz', 'hamza'];

foreach ($emp1 as $e) {
    echo "Employee Name: " . "$e" . "<br>";
}

// Associative Array 
$std = array(
    "nasar" => 20,
    "wajeeh" => 25,
    "hamza" => 22
);
// asort($std);

echo "<pre>";
print_r($std);
echo "</pre>";
//  ArrayName alias Name 
foreach ($std as $s) {
    echo "Student: $s <br>";
}

ksort($std);
//  ArrayName alias Key/Property => ValueName 
foreach ($std as $key => $value) {
    echo "Student Age: $value Student Name: $key <br>";
}
//  $abc = array(
//     array("Moiz", 24, "Angular JS Developer"),
//     array("Moiz", 24, "Angular JS Developer"),
//     array("Moiz", 24, "Angular JS Developer"),
//  );

$emp = [
    // 0     1       2
    ["Moiz", 24, "Angular JS Developer"], //0
    ["Ahmed", 20, "PHP Developer"],     //1
    ["Zaryab", 18, "App Developer"],    //2
    ["Arees", 12, "React JS Developer"], //3
];

foreach($emp as $insideArr){
    // echo "<pre>";
    // print_r($e);
    // echo "</pre>";

    foreach($insideArr as $values){
        echo "$values  <br>";
    }
}


    ?>