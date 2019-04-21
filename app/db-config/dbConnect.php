<?php

    $host="localhost";
    $username="root";
    $password="";
    $dbname="PalacePetroleum";

    // connect to database
    $connect = new mysqli($host, $username, $password, $dbname);

    // check for connection failure
    if($connect->connect_error){
        die("connection failed: ".$connect->connect_error);
    }else{
        // echo"connection successfull";
    }

?>