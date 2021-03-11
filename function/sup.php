<?php
    include_once "dbConnection.php";

    // getting user information
    $fn = $_POST["firstname"];
    $ln = $_POST["lastname"];
    $em = $_POST["email"];
    $pa1 = $_POST["password1"];
    $pa2 = $_POST["password2"];
    $bd = $_POST["birthday"];
    $pn = $_POST["phonenumber"];

    // submit event
    if(isset($_POST["btnsignup"])){

        // db query
        $sql = "INSERT INTO voyageur(e_mail,password_,nom,prenom,date_naissance,telephone) 
        VALUES ('$em','$pa1','$fn','$ln','$bd','$pn');";
        
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Creating account has been successfuly')</script>";
            echo "<script>window.open('../pages/login.php','_self')</script>";
        }
        else{
            echo "<script>alert('This Email is already existed')</script>";
            echo "<script>window.open('../pages/signUp.php','_self')</script>";
        }
    }
    $conn->close();


