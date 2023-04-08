<?php


$age = 20;
// true and true = true 
// ((($age > 10 and $age <15) or !($age ==20)) and !($age >=30)) xor $age ==20
if($age>30){
    echo "Hello Arees!";
}else if($age < 30){
    echo "Bye Nasar!";
}elseif($age>40){
    echo "Hello Sauban!";
}else{
    echo "Hello Moiz!";

}
echo "<br>";
// if($age <> 10){
//     echo "Hello!";
// }

    // Ternary Operator 

    $a = 5;
   $output = ($a>10)? "A is Smaller": "A is Greater";

    echo $output;

?>