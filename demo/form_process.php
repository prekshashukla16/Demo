<?php

if(isset($_POST['submit'])) {
    
    $names = array("Preksha", "Dev", "Vrutika", "Riddhi", "Charmi");
    $minimum = 5;
    $maximum = 10;
    
$name = $_POST['name'];
$password = $_POST['password'];

    if(strlen($name) < $minimum) {
        echo "Username has to be longer than ". $minimum."<br>";
    }
    
    if(strlen($name) > $maximum) {
        echo "Username can not be longer than ".$maximum."<br>";
    }
    
    if(!in_array($name,$names)) {
        echo "Sorry you are not allowed";
    }
    else{
        echo "Welcome";
    }
}

?>