<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>

<?php include "includes/header.php"; ?>
<div class="container">
   <div class="col-sm-6">
   <h1 class="text-center">Delete</h1>
   <form action="login_delete.php" method="post">
        <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>
    
       <label for="Password">Password</label>
        <div class="form-group">
        <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
        <select name="id" id="">
           <?php showAllData(); ?>
        </select>
       </div>
        
        <input type="submit" name="submit" value="Delete" class="btn btn-primary">
    </form>
</div>
</div>
<?php include "includes/footer.php";?>   