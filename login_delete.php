<?php
    include "db.php";
    include "functions.php";
    
    if(isset($_POST['submit'])){
        deleteData();
    }
   
?>


<?php include "includes/header.php" ?>
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
<?php include "includes/footer.php" ?>