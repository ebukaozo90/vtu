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
// setter method for color 

public function set_color($color){
    $this->color = $color;
}


// getter method for name 

public function get_color(){
    return $this->color;
}

}

// define the object 

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Blue");

// define for mango 

$mango = new fruit();
$mango->set_name("Mango");
$mango->set_color("Red");

// print out result

echo $mango->get_name();
echo "<br/>";
echo $apple->get_name();


echo "<br/>";
echo "<br/>";

echo $mango->get_color();
echo "<br/>";
echo $apple->get_color();



?>