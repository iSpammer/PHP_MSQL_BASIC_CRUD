<?php
    include "db.php";
    include "functions.php";

    $result = readData();

    

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
        <div style="margin-top: 2rem;">
            <h1 class="text-center">Read</h1>

            <?php 
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="jumbotron">
                <?php
                    print_r($row);
                ?>
            </div>
            <?php
                }
            ?>

        </div>
    </div>
</body>

</html>
