<?php

// define a class

class Fruit{

    // property

   public $name;
   public $color;


// setter method for name 

public function set_name($name){
    $this->name = $name;
}


// getter method for name 

public function get_name(){
    return $this->name;
}

}

// define the object 

$apple = new Fruit();
$apple->set_name("Apple");

// define for mango 

$mango = new fruit();
$mango->set_name("Mango");

// print out result

echo $mango->get_name();
echo "<br/>";
echo $apple->get_name();




?>