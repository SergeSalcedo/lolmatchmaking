<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginlol";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    //check connection
    if(!$conn){
        die("Connection failed: ".mysqli_connection_error());
    }
?>
