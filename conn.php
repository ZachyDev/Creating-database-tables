<?php
    require_once('configure.php');
    $link_db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($link_db){
        echo "Connected successfully" . "<br>";
    }else{
        die("ERROR " . mysqli_connect_error());
    }
?>