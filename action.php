<?php 

    require './config.php';

    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $query = "INSERT INTO users (rname, username, email, pass) VALUES ('$name', '$uname', '$email', '$pass')";
        mysqli_query($conn, $query);

        exit("ok");
    }
    else if ($_POST['action'] == 'register') {
        exit("error");
    }

    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        /*
        $query = mysqli_prepare("SELECT * FROM users WHERE username LIKE ? AND pass LIKE ?");
        mysqli_stmt_bind_param($query, "ss", $uname, $pass);
        mysqli_stmt_execute($query);
        */
        $query = "SELECT * FROM users WHERE username LIKE '$uname' AND pass LIKE '$pass'";
        $sql = mysqli_query($conn, $query);

        if ($sql->num_rows > 0) {
            exit("ok");
        }
        else if ($_POST['action'] == 'login') {
            exit("error");
        }
    }

    if (isset($_POST['action']) && $_POST['action'] == 'forgot') {
        $femail = $_POST['femail'];

        $query = "SELECT username, pass FROM users WHERE email LIKE '$femail'";
        $sql = mysqli_query($conn, $query);
        $data = $sql->fetch_array();

        if ($sql->num_rows > 0) {
            $to = $femail;
            $from = "green.warrior@hotmail.com";
            $subject = 'Password Recovery';
            $message = '<b>Your username: </b>'.$data['username'].',<b> and your password: </b>'.$data['pass'];
            $headers = "From: $from\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";

            if (mail($to, $subject, $message, $headers)) {
                exit("ok");
            } else {
                exit("errors");
            }
        } elseif ($_POST['action'] == 'forgot') {
            exit("error");
        }
       
    }

    
?>