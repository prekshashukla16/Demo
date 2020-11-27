<?php

$file = "example.txt";

if($handle = fopen($file, 'w')) {

fwrite($handle, 'I like php');
    
fclose($handle);
}
else {
    echo "The application was not able to write on the file";
}

?>