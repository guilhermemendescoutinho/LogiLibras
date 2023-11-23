<?php
    $mysqli = new mysqli();

    $mysqli->connect("localhost", "root", "", "logilibras");

    if (mysqli_connect_errno()){
        echo "não conectou".$mysqli->error;
        exit(0);
    }
?>