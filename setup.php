<?php
    require_once('conn.php');
    $query = "CREATE TABLE `comp_scie2018`.`students` ( `reg` INT(20) NOT NULL , `firstname` VARCHAR(20) NOT NULL , 
            `middlename` VARCHAR(20) NULL DEFAULT NULL , `lastname` VARCHAR(20) NOT NULL ,
             PRIMARY KEY (`reg`)) ENGINE = InnoDB;";
    if(mysqli_query($link_db,$query)){
        echo "Created tables successfully";
    }else{
        die("Something went wrong");
    }
    mysqli_close($link_db);
?>