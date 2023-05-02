<?php 
    
    $servername = "database-1.cpjwls3rgip9.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "adminadmin";
    $db_name = "crud";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connect error".$conn->connect_error);
    }
      echo " "
    
    ?>
