<?php
    include_once "dbConnection.php";
    session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["btnDone"])){

        $cv = $_SESSION["ucv"];
        $em = $_SESSION["em"];


        $dt = date("Y-d-m");

        $sql = "INSERT INTO billet(codeVoyage,datebillet,e_mail) values ('$cv','$dt','$em');";

        if(mysqli_query($conn,$sql)){

            $sqlB = "SELECT * FROM billet where codeVoyage = '$cv' and e_mail = '$em' ORDER BY numBillet DESC LIMIT 1 ;";
            $sqlsdb = mysqli_query($conn,$sqlB);
            $fetch = mysqli_fetch_All($sqlsdb);

            unset($_SESSION['numbil']);
            $numBillet = $fetch[0]["0"];
            $_SESSION['numbil'] = $numBillet;

            echo "<script>window.open('../pages/ticket.php','_self')</script>";
        }
        else{
            echo "<script>alert('An error happend, try again with correct information!')</script>";
        }
    }
    $conn->close();

}