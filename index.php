<?php
class Fruit{
    //property
public $name;
public $color;

// define the method/functions 

public function set_name($name){
    $this->name = $name;

}

public function get_name(){
    return $this->name;
}

}


// define the objects 

$apple = new Fruit();
$apple ->set_name('Apple');

// Banana

$banana = new Fruit();
$banana ->set_name('Banana');

// get results 

echo $banana->get_name();
echo "<br />";
echo $apple->get_name();

?>