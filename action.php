<?php 

    require './config.php';

    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $conn->query("INSERT INTO users (rname, username, email, pass) VALUES ('$name', '$uname', '$email', '$pass')");

        exit("ok");
    }
    else if ($_POST['action'] == 'register') {
        exit("error");
    }

    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        //$sql = $conn->query("SELECT * FROM users");
        $sql = $conn->query("SELECT * FROM users WHERE username LIKE '$uname' AND pass LIKE '$pass'");

        if ($sql->num_rows > 0) {
            exit("ok");
        }
        else if ($_POST['action'] == 'login') {
            exit("error");
        }

    }

    
?>