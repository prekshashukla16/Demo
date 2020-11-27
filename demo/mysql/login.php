<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    
    if($connection) {
        echo "We are connected";
    }
    else {
        echo "Connection failed.";
    }
    
   // echo $username;
    //echo $password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <div class="col-sm-6">
       <form action="login.php" method="post">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>
    
       <label for="password">Password</label>
        <div class="form-group">
        <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
    </div>
    </body>
</html>