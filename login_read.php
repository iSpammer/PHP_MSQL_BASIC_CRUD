<?php
    include "db.php";
    include "functions.php";

    $result = readData();

    

?>


<?php include "includes/header.php" ?>

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
<?php include "includes/footer.php" ?>
