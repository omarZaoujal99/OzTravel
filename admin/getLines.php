<?php
    include "dbConnect.php";
    include_once '../function/dbConnection.php';
    

    class getLines{

        // Select All Lines
        public static function selAllLin(){
            global $conn;
            $sql = "SELECT * from voyage";
            //$res = dbAccess::selection($sql);
            $res = mysqli_query($conn,$sql);
            $number_rows = mysqli_num_rows($res);
            return $number_rows;
        }
        
        // select from voyage by pagination system pagination
        public static function pagination($i1){
            $req = "SELECT * FROM voyage limit $i1,4;";
            $res = dbAccess::selection($req);

            return $res;
        }

        // add trip
        public static function addTrip($cva,$dha,$dca,$aha,$aca,$pa){
            $sqlAdd = "INSERT INTO voyage(codeVoyage,heuredepart,villeDepart,heuredarrive,villedarrive,prixvoyage) 
            values ('$cva','$dha','$dca','$aha','$aca','$pa');";
            $res = dbAccess::modify($sqlAdd);
            return $res;
        }

        // delete a trip
        public static function deleteTrip($cva){
            $sqlDel = "DELETE FROM `voyage` WHERE `voyage`.`codeVoyage` = '$cva';";
            $res = dbAccess::modify($sqlDel);
            return $res;
        }

        // modify trip
        public static function modifyTrip($cva0,$cva,$dha,$dca,$aha,$aca,$pa){
            $sqlMod = "UPDATE `voyage` SET 'codeVoyage' = '$cva' and 'heureDepart' = '$dha' and villeDepart = '$dca'
            and heuredarrive = '$aha' and 'villedarrive' = '$aca' and prixvoyage = '$pa' WHERE `codeVoyage` = '$cva0';";
            $res = dbAccess::modify($sqlMod);
            return $res;
        }
    }