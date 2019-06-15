<?php
    include "db.php";
    include "functions.php";
    
    if(isset($_POST['submit'])){
        deleteData();
    }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-xs-6 text-center">
        <h1 class="text-center">Delete</h1>

            <form action="login_delete.php" method="post">
                <select name="id" id="id">
                    <?php 
                       showAllData();
                    ?>
                </select>
                <hr>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control" value="CREATE">
                </div>    
            </form>
        </div>
    </div>
</body>




</html>
