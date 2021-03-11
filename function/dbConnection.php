<?php

    // connection to data base
    $server = "localhost";
    $servername = "root";
    $password = "";
    $dbName = "controle_continue";

    $conn = new mysqli($server,$servername,$password,$dbName);

    // checking connection
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }