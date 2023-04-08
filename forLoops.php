<?php

// for($a=0; $a<=10;$a=$a+1){
//     echo "*";
// }

// -------Forward Counting -------
// for($i =0; $i<=10;$i=$i+2){
//     echo $i ."<br>";
// }

// for($i =0; $i<=10;$i--){
//     echo $i ."<br>";
// }

// -------backward Counting -------
// for($j = 10; $j >=0; $j--){
//     echo "No. ".$j ."<br>";
// }

// -------Table -------

// Fixed x Itrate = Multiply 
//  2 x 1 = 2
//  2 x 2 = 4

// $no = 9;
// for($t = 1; $t<=10; $t++){
//     echo $no ." x ". $t . " = ". $no*$t ."<br>";
// }

// for($o =0; $o<=5;$o++){
//     for($i = 0; $i<=5;$i++){
//         echo "*";
//     }
//     echo "<br>";
// }

// for($i = 0; $i <=100; $i++){
//     if($i == 50){
//         break;
//     }
//     echo $i . "<br>";
// }

for($i = 0; $i <=50; $i++){
    if($i == 30){
        continue;
    }
    echo $i . "<br>";
}



?>