<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Admin</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="admin.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>

    <main class="mainAdmin">
        <div class="divAdmin">
            <h2 class="h2Admin">All Trips</h2><br>
            <table>
                <tr>
                    <th>Voyage Code</th>
                    <th>Depart Hour</th>
                    <th>Depart City</th>
                    <th>Arrival Hour</th>
                    <th>Arrival City</th>
                    <th>Price</th>
                </tr>
                <?php
                    include_once "getLines.php";
                    
                    // setting all data from voyage table
                    if(!isset($_GET['page'])){
                        header("location: ../admin/admin.php?page=1");
                    }
                    $main_page = $_GET['page'];
                    $i1 = 4 * ($main_page - 1);
                    $showRes = getLines::selAllLin();
                    $showRes2 = getLines::pagination($i1);
                    if(!empty($showRes2)){
                        while($row = $showRes2->fetch()){
                            echo "<tr>";
                            echo "<td>$row[0]";
                            echo "<td>$row[1]";
                            echo "<td>$row[2]";
                            echo "<td>$row[3]";
                            echo "<td>$row[4]";
                            echo "<td>$row[5]";
                            echo "</tr>";
                        }
                    }
                    ?>
            </table>

            <!-- forms -->
            <div class="btns">
                <input type="Button" value="Add" name="btnAdd" class="btnSubAdmin" id="btnadd">
                <input type="button" value="Delete" name="btnAdd" class="btnSubAdmin" id="btnDel">
                <input type="button" value="Modify" name="btnAdd" class="btnSubAdmin" id="btnMod">
            </div>

            <!-- add form -->
            <div class="divForms" id="divF1">
                <form action="admin.php" method="post">
                    <h3 class="h2Admin">Add a Trip:</h3><br>
                    <input type="text" name="cva" placeholder="travel code" class="inpform1" required pattern="[A-Z0-9]{5}"
                    oninvalid="this.setCustomValidity('Travel Code must content just Capital Letters and Numbers, size 5.')"
                    oninput="this.setCustomValidity('')">
                    <input type="time" name="dha" placeholder="Depart Hour" class="inpform1" required>
                    <input type="text" name="dca" placeholder="Depart city" class="inpform1" required pattern="[A-Za-z]{3,20}"
                    oninvalid="this.setCustomValidity('City Name must be between 3 and 20 letter.')"
                    oninput="this.setCustomValidity('')">
                    <input type="time" name="aha" placeholder="Arrival Hour" class="inpform1" required>
                    <input type="text" name="aca" placeholder="Arrival city" class="inpform1" required pattern="[A-Za-z]{3,20}"
                    oninvalid="this.setCustomValidity('City Name must be between 3 and 20 letter.')"
                    oninput="this.setCustomValidity('')">
                    <input type="text" name="pa" placeholder="Price" class="inpform1" required pattern="^[1-9]{1}[0-9]{1,2}[D]{1}[h]{1}[s]{1}"
                    oninvalid="this.setCustomValidity('Price should be between 1 and 999 Dhs (`Dhs` is required)')"
                    oninput="this.setCustomValidity('')"><br>
                    <input type="submit" value="Add" class="btnSubAdmin" name="btnSubAdd">
                    <input type="button" value="Close" class="btnSubAdmin2" id="btnFClose2">
                </form>

                <?php 
                    include_once "getLines.php";
                    
                    if(isset($_POST['btnSubAdd'])){
                        $cva = $_POST['cva'];
                        $dha = $_POST['dha'];
                        $dca = $_POST['dca'];
                        $aha = $_POST['aha'];
                        $aca = $_POST['aca'];
                        $pa  = $_POST['pa'];
    
                        getLines::addTrip($cva,$dha,$dca,$aha,$aca,$pa);
                        echo "<script>alert('Adding trip has been successfuly')</script>";
                    }
                ?>

            </div>
            <div class="divForms2" id="divF2">
                <form action="admin.php" method="POST">
                    <h3 class="h2Admin">Remove a Trip:</h3><br>
                    <label for="rt" class="lblRem">Please enter the voyage code of the trip:</label>
                    <input type="text" name="removetrip" id="rt" class="inpform1" required placeholder="Voyage Code" pattern="[A-Z0-9]{5}"
                    oninvalid="this.setCustomValidity('Travel Code must content just Capital Letters and Numbers, size 5.')"
                    oninput="this.setCustomValidity('')"> 
                    <input type="submit" value="Remove" class="btnSubAdmin" name="btnRemove">
                    <input type="button" value="Close" class="btnSubAdmin2" id="btnFClose3">
                </form>
                <?php 
                    include_once "getLines.php";
                    if(isset($_POST["btnRemove"])){
                        $remT = $_POST["removetrip"];
                        getLines::deleteTrip($remT);
                        echo "<script>alert('Removing trip has been successfuly')</script>";
                    }
                ?>
            </div>
            <div class="divForms3" id="divF3">
                <form action="admin.php" method="post">
                    <h3 class="h2Admin">Update a Trip:</h3><br>
                    <label for="rt" class="lblRem">Please enter the voyage code of the trip That you want to modify:</label>
                    <input type="text" name="modOldTC" id="rt" class="inpform1" required placeholder="Voyage Code"
                    oninvalid="this.setCustomValidity('Travel Code must content just Capital Letters and Numbers, size 5.')"
                    oninput="this.setCustomValidity('')"><br>
                    <input type="text" name="cvm" placeholder="travel code" class="inpform1" required pattern="[A-Z0-9]{5}"
                    oninvalid="this.setCustomValidity('Travel Code must content just Capital Letters and Numbers, size 5.')"
                    oninput="this.setCustomValidity('')">
                    <input type="time" name="dhm" placeholder="Depart Hour" class="inpform1" required>
                    <input type="text" name="dcm" placeholder="Depart city" class="inpform1" required pattern="[A-Za-z]{3,20}"
                    oninvalid="this.setCustomValidity('City Name must be between 3 and 20 letter.')"
                    oninput="this.setCustomValidity('')">
                    <input type="time" name="ahm" placeholder="Arrival Hour" class="inpform1" required>
                    <input type="text" name="acm" placeholder="Arrival city" class="inpform1" required pattern="[A-Za-z]{3,20}"
                    oninvalid="this.setCustomValidity('City Name must be between 3 and 20 letter.')"
                    oninput="this.setCustomValidity('')">
                    <input type="text" name="pm" placeholder="Price" class="inpform1" required pattern="^[1-9]{1}[0-9]{1,2}[D]{1}[h]{1}[s]{1}"
                    oninvalid="this.setCustomValidity('Price should be between 1 and 999 Dhs (`Dhs` is required)')"
                    oninput="this.setCustomValidity('')"><br>
                    <input type="submit" value="Modify" class="btnSubAdmin" name="btnSubMod">
                    <input type="button" value="Close" class="btnSubAdmin2" id="btnFClose4">
                </form>
                <?php
                    include_once "getLines.php";
                    if(isset($_POST["btnSubMod"])){
                        $modT = $_POST["modOldTC"];
                        $cvm = $_POST["cvm"];
                        $dhm = $_POST["dhm"];
                        $dcm = $_POST["dcm"];
                        $ahm = $_POST["ahm"];
                        $acm = $_POST["acm"];
                        $pm = $_POST["pm"];

                        getLines::modifyTrip($modT,$cvm,$dhm,$dcm,$ahm,$acm,$pm);
                        echo "<script>alert('Updating trip has been successfuly')</script>";
                    }
                ?>
            </div>
            <section style="background-color: transparent;">
                <div class="pagination2 container">
                    <ul class="pagination justify-content-center mt-5 ulPagination">
                        <!-- <li class="page-item active">
                            <a href="page1" class="page-link">1</a>
                        </li> -->
                        <?php
                        $npages = $showRes/3;
                            for ($i=1; $i < $npages ; $i++) { ?>
                                <li class="page-item <?php if($main_page==$i){
                                    echo "active";
                                }?>
                                    ">
                                    <a href="admin.php?page=<?=$i?>" class="page-link"><?=$i?></a>
                                </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    <!-- own script -->
    <script src="admin.js"></script>
    <!-- ----- bootstrap js: ----- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ----- fontawesome js: ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>

</body>
</html>