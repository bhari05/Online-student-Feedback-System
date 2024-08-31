<?php
    $servername = "localhost";
    $USN = "root";
    $password = "root";
    $db_name = "fsd_project";
    $conn = new mysqli($servername, $USN, $password, $db_name);
    if($conn->connect_error){
        die("connection error".$conn->connect_error);
    }
    echo "Connection Successful";
?>  