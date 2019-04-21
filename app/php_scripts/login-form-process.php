<?php
    include_once "../db-config/dbConnect.php";

    function loginProcess($username, $password){
        
        echo $username;
    }

    if (isset($_POST['submit'])) {
        # code...
        $username = $_POST['username'];
        $password = $_POST['password'];
        loginProcess($username, $password);
        
    }
?>
