<?php
    include_once "dbConnection.php";

    session_start();

    if(isset($_POST["btnSearchTicket"])){


        // give the authentification
        if(empty($_SESSION["em"])){
            echo "<script>alert('You need to login first!')</script>";
            echo "<script>window.open('../pages/login.php','_self')</script>";

        }
        
        // if the user has been logged in
        if(!empty($_SESSION["em"])){

            // selects name
            $depart = $_POST["cityDepart"];
            $arriv = $_POST["cityArrival"];

            // sql query
            $sql = "SELECT * FROM voyage where villeDepart = '$depart' and villedarrive = '$arriv';";
            $getInfos = mysqli_query($conn,$sql);
            $fetching = mysqli_fetch_array($getInfos);

            $ucv = $fetching[0];
            $uhd = $fetching[1];
            $uvd = $fetching[2];
            $uha = $fetching[3];
            $uva = $fetching[4];
            $up = $fetching[5];

            $_SESSION["ucv"] = $ucv;
            $_SESSION["uhd"] = $uhd;
            $_SESSION["uvd"] = $uvd;
            $_SESSION["uha"] = $uha;
            $_SESSION["uva"] = $uva;
            $_SESSION["up"] = $up;

            // if the user choosed the same city or haven't choosed any city or just one city
            if($uvd == $uva){
                // echo "Error " . $sql . "<br>" . mysqli_error($conn);
                echo "<script>alert('Wrong choice! Please select two different cities.')</script>";
                echo "<script>window.open('../pages/index.php','_self')</script>";
            }
            if($uvd != $uva){
                echo "<script>window.open('../pages/lines.php','_self')</script>";
            }

            
        }
    }