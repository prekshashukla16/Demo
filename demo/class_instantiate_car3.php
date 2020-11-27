<?php

class Car {
    
    var $wheels = 4;
    var $engine = 1;
    var $doors = 4;
    
    function MoveWheel() {
        echo "Wheels move";
        $this->wheels = 10;
    }
    
    function createDoors() {
        $this->doors = 6;
    }
}

$bmw = new Car();
$truck = new Car();
//$bmw->moveWheel();
echo $bmw->wheels."<br>";

echo $truck->wheels = 10 ."<br>";

$truck->createDoors();

echo $truck->doors = 10;
?>