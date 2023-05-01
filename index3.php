<?php
if(isset($_POST["username"]) && isset($_POST["userbio"])) {
    $mysql = new mysqli("localhost","mysql","mysql","123");
    if($mysql->connect_error){
        die("Error: ". $mysql->connect_error);
    }
    $name = $mysql->real_escape_string($_POST["username"]);
    $bio = $mysql->real_escape_string($_POST["userbio"]);
    $sql = "INSERT INTO users1 (`name`,`bio`) VALUES ('$name','$bio')";
    if($mysql->query($sql)){
        echo "Data added successfully";
    } else {
        echo "Error: ".$mysql->error;
    }
    $mysql->close();
}
?>