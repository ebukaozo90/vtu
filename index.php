<?php

// define a class

class Fruit{

    // property

   public $name;
   public $color;

   // constructor 

   public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;

   }


// getter method for name 

public function get_name(){
    return $this->name;
}

// getter method for name 

public function get_color(){
    return $this->color;
}

}

// define the object 

$apple = new Fruit("Apple", "Blue");

// define for mango 

$mango = new fruit("mango", "yellow");

// print out result

// echo $mango->get_name();
echo $mango->name;
echo "<br/>";
// echo $apple->get_name();
echo $apple->name;


echo "<br/>";
echo "<br/>";

// echo $mango->get_color();
echo $mango->color;
echo "<br/>";
// echo $apple->get_color();
echo $apple->color;



?>