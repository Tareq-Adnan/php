<?php
include("db.php");

 function showData() {
   global $connection;

    if (!$connection) {
        die(" Database connection error!");
    }

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Connection Success!" . "<br>";
    } else {
        die("there is a problem!");
    }

    while ($value = mysqli_fetch_assoc($result)) {
        $id = $value['id'];
        echo "<option value='$id'>$id</option>";
    }
}
function read(){
    global $connection;
    $query="SELECT * FROM users";
    $result=mysqli_query($connection,$query);
    if($result){
        echo "Connection Success!". "<br>";
    }
    else{
        die("there is a problem!");
    }
}

function create($uname,$pass){
    global $connection;
    $nam=mysqli_real_escape_string($connection,$uname);
    $pas=mysqli_real_escape_string($connection,$pass);

    $hash="$2y$10$";
    $hash .="iusesomecrazystrings22";
    $pas=crypt($pas,$hash);


    
    $query="INSERT INTO users(username,pass) values ('$nam','$pas')";
    if(mysqli_query($connection,$query)){
        echo "Insertion Success!";
    }
    else{
        die("there is a problem!");
    }
}

function updateData(){
    global $connection;

    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $id=$_POST['id'];


    $query="UPDATE users SET username='$uname', pass='$pass' WHERE id=$id ";

    $result=mysqli_query($connection,$query);
    if($result){
        echo "Updated";
    }
}

function delete(){
    global $connection;
    $id=$_POST['id'];


    $query="DELETE FROM users WHERE id=$id ";

    $result=mysqli_query($connection,$query);
    if($result){
        echo "deleted!";
    }
}


?>