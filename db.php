<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
//        echo "Connected to database"."<br>";
    }
    else{
        die("<h3 class='btn btn-danger'>Database connection failed </h3>"."<br>");
    }
?>
