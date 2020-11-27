<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    
    function addNumber($number1, $number2){
        
        $sum =$number1 + $number2;
        
        return $sum;
        
    }
    $result = addNumber(34,87);
    
    echo $result;
    
    ?>
</body>
</html>