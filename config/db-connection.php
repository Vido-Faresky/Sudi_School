<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "sudi_school";

    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        die('Error to connect database: ' . mysqli_connect_error());
    }
    
?>