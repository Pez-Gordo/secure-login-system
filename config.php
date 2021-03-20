<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "my*8-9+6POiusql";
    $dbname = "login";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($conn->connect_error) {
        die("Could not connect to database".$conn->connect_error);
    }
?>