<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {

echo $content = fread($handle, filesize($file)); //Each byte equals one character
    
fclose($handle);
}
else {
    echo "The application was not able to write on the file";
}

?>