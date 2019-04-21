<?php
    include_once "../db-config/dbConnect.php";
?>

<?php
    function loginProcess($username, $password){
        
        echo $username;
    }
?>

<?php
    if (isset($_POST['submit'])) {
        # code...
        $username = $_POST['username'];
        $password = $_POST['password'];

        loginProcess($username, $password);
        
    }
?>
