<?php

class Car {
    function moveWheel() {
        echo "Wheels move";
    }
}

if(method_exists("Car","moveWheel")) {
    echo "It does exists";
}
else {
    echo "It's not here";
}

?>