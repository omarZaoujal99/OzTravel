<?php
    include_once "dbConnection.php";

    if(isset($_POST["buybtn"])){

        // inputs values
        $numTickets = $_POST["ticketcount"];
        $dateTravel = $_POST["travelDate"];

        // store num tickets and date travel into a sessions
        $_SESSION["numT"] = $numTickets;
        $_SESSION["travelD"] = $dateTravel;

        echo "<script>window.open('../pages/payment.php','_self')</script>";

    }
    $conn->close();
