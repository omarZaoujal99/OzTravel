<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Home</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/index.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <?php
        include_once "../fixedPages/header.php";
    ?>
    <main>

        <!-- search form -->
        <div class="divSearch">
            <div class="divSearchMain">
                <div class="searchDiv">
                    <form action="../function/search.php" method="POST">
                        <h3 class="h3search">Search your ticket</h3>
                        <select name="cityDepart" class="selSearch" id="cd">
                            <option value="cs1" selected id="vcd">Departure station</option>
                            <option value="Tangier" class="optSearch">Tangier</option>
                            <option value="Rabat" class="optSearch">Rabat</option>
                            <option value="Fes" class="optSearch">Fes</option>
                            <option value="Casablanca" class="optSearch">Casablanca</option>
                        </select>
                        <div class="divFA">
                            <label><i class="fas fa-exchange-alt"></i></label>
                        </div>
                        <select name="cityArrival" class="selSearch" id="ca">
                            <option value="cs2" selected id="vca">Arrival station</option>
                            <option value="Tangier" class="optSearch">Tangier</option>
                            <option value="Rabat" class="optSearch">Rabat</option>
                            <option value="Fes" class="optSearch">Fes</option>
                            <option value="Casablanca" class="optSearch">Casablanca</option>
                        </select><br>
                        <input type="submit" value="Search" name="btnSearchTicket" class="btnSearch"> 
                    </form>
                </div>
            </div>
        </div>


        <!-- soldes -->
        <section>
            <div class="fDivSoldes">
                <div class="rowCons rSoldes">
                    <div class="col-md-4 col-sm-6 col-12 cSoldes">
                        <img src="../pics/travel1.png" alt="trvl1" class="imgTravel1">
                        <img src="../pics/umbrella.png" alt="umbr" class="umbrella">
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 cSoldes">
                        <div class="divSoldes">
                            <h4 class="hSoldesTitle">Enjoy & Save Up To</h4><br>
                            <h1 class="hsoldes">50%</h1>
                            <h2 class="hsoldes">30%</h2>
                            <h3 class="hsoldes">15%</h3>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-12 cSoldes">
                        <img src="../pics/travel2.jpg" alt="trvl2" class="imgTravel1">
                    </div>
                </div>
            </div>
        </section>


        <!-- the concessions -->
        <div class="rowCons">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="divConc">
                    <i class="far fa-thumbs-up iconConc"></i><br>
                    <p>Comforts</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="divConc">
                    <i class="far fa-smile-beam iconConc"></i><br>
                    <p>Satisfaction</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="divConc">
                    <i class="fas fa-wallet iconConc"></i><br>
                    <p>Saving</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="divConc">
                    <i class="far fa-handshake iconConc"></i><br>
                    <p>Services</p>
                </div>
            </div>
        </div>
    </main>


    <!-- footer -->
    <?php include "../fixedPages/footer.php";?>

    <!-- own scripts -->
    <script src="../js/disableFirstOp.js"></script>

    <!-- ----- bootstrap js: ----- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ----- fontawesome js: ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>

</body>
</html>