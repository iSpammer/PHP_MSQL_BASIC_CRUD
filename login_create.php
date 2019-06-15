<?php 
include "db.php";
include "functions.php";

if(isset($_POST['submit'])){
   createData();
}
?>

<?php include "includes/header.php" ?>

<body>
    <div class="container">
        <div class="col-xs-6 text-center">
           <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary form-control" value="CREATE">
                </div>
            </form>
        </div>
    </div>
<?php include "includes/footer.php>"