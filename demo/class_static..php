<?php

class Car {
    
    static $wheels = 4;
    var $engine = 1;
    
    
    function MoveWheel() {
        Car::$wheels = 10;
    }
}

$bmw = new Car();
//$bmw->wheels; does not work

Car::MoveWheel(); //changes value by method

echo Car::$wheels;

?>