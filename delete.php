<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `info` where id=$id";
        $conn->query($sql);
    }
    header('location:/crud100/index.php');
    exit;
?>
