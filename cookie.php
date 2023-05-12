<?php

$cookie = setcookie('food','burger', time() + 3600, '/');


if(isset($_COOKIE['food'])){

    

    echo "cookie is set <br> Cookie Value: $cookie <br> Cookie Name: ". $_COOKIE['food'];

}else{
    echo "cookie is not set";
};


    
$cookiedel = setcookie('food','', time() - 3600, '/');




?>