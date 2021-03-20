<?php 

    require './config.php';

    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $conn->query("INSERT INTO users (rname, username, email, pass) VALUES ('$name', '$uname', '$email', '$pass')");





    }

    
?>