<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="mycv";
    $port="";

    $conn=mysqli_connect($host,$user,$pass,$db);

    if(!$conn)
    {
        die("Failed connection!");
        exit();
    }
?>