<?php
    include_once "dbConnection.php";

    if(isset($_POST["btnLogin"])){

        // inputs values
        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];
        
        // sql query
        $sql = "SELECT * FROM voyageur where e_mail = '$userEmail' and password_ = '$userPassword';";
        $getDb = mysqli_query($conn,$sql);
        $fetchDb = mysqli_fetch_array($getDb);

        // getting user information to store it into a sessions
        $uemail = $fetchDb["e_mail"];
        $upassword = $fetchDb["password_"];
        $ufirstname = $fetchDb["prenom"];
        $ulastname = $fetchDb['nom'];
        $ubirthday = $fetchDb["date_naissance"];
        $uphone = $fetchDb["telephone"];

        if($userEmail === $uemail && $userPassword === $upassword){

            session_start();
            // storing infos into a sessions
            $_SESSION["em"] = $uemail;
            $_SESSION["pa"] = $upassword;
            $_SESSION["fn"] = $ufirstname;
            $_SESSION["ln"] = $ulastname;
            $_SESSION["bd"] = $ubirthday;
            $_SESSION["mp"] = $uphone;

            // setting cookies if remamber me is checked
            if(!empty($_POST["remamberme"])){
                setcookie("user_email",$userEmail,time() + 7 * 60 * 60);
                setcookie("user_password",$userPassword,time() + 7 * 60 * 60);
                echo "<script>alert('Login has been successfuly!')</script>";
                echo "<script>window.open('../pages/index.php','_self')</script>";
            }

            // login while remamber me is epmty
            if(empty($_POST["rememberme"])){
                echo "<script>alert('Login has been successfuly!')</script>";
                echo "<script>window.open('../pages/index.php','_self')</script>";
            }

        }

        // if the email or password is incorrect
        else{
            echo "<script>alert('Email or Password incorrect, try again with correct Email and Password')</script>";
            echo "<script>window.open('../pages/login.php','_self')</script>";
        }
    }
    $conn->close();