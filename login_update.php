<?php
    include "db.php";
    include "functions.php";
    
    if(isset($_POST['submit'])){
        updateData();
    }
   
?>


<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php" ?>
    <div class="container">
       
       <div class="col-xs-6 text-center">
           <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <select name="id" id="id">
                    <?php 
                       showAllData();
                    ?>
                </select>
                <hr>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control" value="UPDATE">
                </div>
            </form>
        </div>
    </div>
<?php include "includes/footer.php" ?>

