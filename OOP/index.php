<?php 

class Mobiles{
    // properties /// Public is a access modifier
    public $name;
    public $model;
    public $price;
    public $ram;
    public $rom;
    public $battery;
    
    // function __destruct()
    // {
    //     echo "Person Destruct Function";
    // }

    // constructor function invokes automatically once an object created 
    function __construct($name, $price, $model){
        $this->name = $name;
        $this->price = $price;
        $this->model = $model;

        echo "$this->name price is $this->price and has model $this->model<br>";
    }


    // methods 
    function spec($ram, $rom, $battery){
        $this->ram = $ram;
        $this->rom = $rom;
        $this->battery = $battery;
        echo "Ram $this->ram GB and Rom $this->rom GB and Battery $this->battery mAh <br>";
    }

    // function __destruct(){
    //     echo "Class has ended";
    // }

    // function type($name){
    //     $this->name = $name;

    //     echo "$this->name has touch functionality<br>";
    // }

    // function price($name,$price){
    //     $this->name = $name;
    //     $this->price = $price;
    //     echo "$this->name price is $this->price<br>";

    // }

}

$v1 = new Mobiles("Vivo","$400","Y33s");
$v1->spec(4,128,4500);

$v2 = new Mobiles("Vivo","$450","Y2s");
$v2->spec(3,64,4500);


// $m4 = new Mobiles()

// $m1 = new Mobiles();
// $m1->type("iPhone");

// $m2= new Mobiles();
// $m2->price('Samsung',"$999")


echo "<br><br>";

class Players{
    public $name;
    public $age;
    public $ctg;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

        echo "Players Name: $this->name and Age $this->age <br>";
    }
    
    // function category($ctg){
    //     $this->ctg = $ctg;
        
    //     echo "Players Category: $this->ctg";

    // }
}

$p1 = new Players("Sami",25);
// $p1->category("Batsman")

// Category inherit Players 
// Category(Child) of Parent (players)
class Category extends Players{

    protected $type;
    protected $gender = "Mem team";
    function __construct($name,$type){
        $this->type = $type;
        $this->name = $name;
        echo "Player Category is $this->type and Name $this->name<br>";
    }

    protected function Gender($gender){
        $this->gender = $gender;
        echo $this->gender;
    }
}

$c1 = new Category("Shahryar","Bowler");


class Team extends Category{
    public $team;

    function __construct($name,$type,$team){
        $this->type = $type;
        $this->team = $team;
        $this->name = $name;
        echo "Iska naam $this->name or ye hai aik $this->type or ye is $this->team sy khelta hai<br>";

    }

    function ABC(){
        echo $this->gender;
    }
}

$t1 = new Team("Arees","Bowler","Pakistan");

echo "team name:". $t1->team;

$t1->ABC();

?>