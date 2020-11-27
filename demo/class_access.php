<?php

class Car {
    
    public $wheels = 4;
    protected $engine = 1;
    private $doors = 4;
    
    function showProperty() {
        echo $this->doors;
}
}

$bmw = new Car();
$semi = new Semi();
class Semi extends Car {
    
}

echo $bmw->showProperty();

?>