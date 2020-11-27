<?php

class Car {
    
    var $wheels = 4;
    var $engine = 1;
    var $doors = 4;
    
    function moveWheel() {
        $this->heels = 10;
    }
    
    function createDoors() {
        $this->doors = 6;
    }
}

class Plane extends Car {
    var $wheels = 3;
}

$jet = new Plane();

echo $jet->wheels;

//if(class_exists("Plane")) {
    //echo "yes"
//}

?>