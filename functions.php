<?php
include "db.php";


function createData(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    if($username && $password){
//        echo $username."<br>".$password;
        
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES('$username', '$password')";
        $result = mysqli_query($connection, $query);
        
        if($result){
            echo "<h3 class='alert alert-success text-center'>Query successfuly</h3>"."<br>";
        }
        else{
            echo("<h3 class= 'alert alert-danger text-center'>Query died :(". mysqli_error($connection)."</h3>"."<br>");
        }
    }
    else{
        echo "<h3 class= 'alert alert-danger text-center'>Please fill in form</h3>","<br>";
//        die("");
    }    
}

function readData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
        
    if($result){
//        echo "Query successfuly"."<br>";
    }
    else{
        echo("<h3 class= 'alert alert-danger text-center'>Query died :(". mysqli_error($connection)."</h3>"."<br>");
    }
    return $result;
}

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
        
    if($result){
        echo "<h3 class= 'alert alert-success text-center''>Query successfuly</h3>"."<br>";
    }
    else{
        echo("<h3 class= 'alert alert-danger text-center'>Query died :(". mysqli_error($connection)."</h3>"."<br>");    
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateData(){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
//        echo $id."<br>"."id";
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username' , password = '$password' ";
        $query .= "WHERE id = $id ";
        
        $result = mysqli_query($connection, $query);
        
        if($result){
            echo "<h3 class= 'alert alert-success text-center'>Updated successfuly</h3>"."<br>";
        }
        else{
            echo "<h3 class='alert alert-danger text-center'>Query died :(". mysqli_error($connection)."</h3>"."<br>";  
//            die("");
        }   
}
function deleteData(){
        global $connection;
    
        if(!$_POST['id']){
             echo("<h3 class= 'alert alert-danger text-center'>Failed :(". mysqli_error($connection)."</h3>"."<br>");  
        }
        $id = $_POST['id'];

//        echo $id."<br>"."id";
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
        
        $result = mysqli_query($connection, $query);
        
        if($result){
            echo "<h3 class= 'alert alert-success text-center'>Deleted successfuly</h3>"."<br>";
        }
        else{
            echo("<h3 class= 'alert alert-danger text-center'>Query died :(". mysqli_error($connection)."</h3>"."<br>");    
        }
}


?>
