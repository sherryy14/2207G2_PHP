<?php

$day = 10;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;

    default:
        echo "Invalid Day";

}


$marks = 90;

switch ($marks) {
    case ($marks >= 90 && $marks <= 100):
        echo "A++";
        break;
    case ($marks >= 80 && $marks < 90):
        echo "A";
        break;
    case ($marks >= 70 && $marks < 80):
        echo "B";
        break;
    case ($marks <70):
        echo "Fail";
        break;
    default:
        echo "Invalid Marks";
}




?>