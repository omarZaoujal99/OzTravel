<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Available lines</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/lines.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <?php include_once "../fixedPages/header.php"; ?>
    <?php $_SESSION["ucv"] ?>
    <main class="mainLines">
        <div class="fDivLines">
            <div class="ta">
                <h2>Available Tickets:</h2>
            </div>
            <table class="table1">
                <tr>
                    <td class="tdh">Travel Code</td>
                    <td class="tdh">From</td>
                    <td class="tdh">To</td>
                    <td class="tdh">Depart Hour</td>
                    <td class="tdh">Arrive Hour</td>
                    <td class="tdh">Price</td>
                </tr>
                <tr>
                    <td class="tdr"><?php echo $_SESSION["ucv"] ?></td>
                    <td class="tdr"><?php echo $_SESSION["uvd"] ?></td>
                    <td class="tdr"><?php echo $_SESSION["uva"] ?></td>
                    <td class="tdr"><?php echo $_SESSION["uhd"] ?></td>
                    <td class="tdr"><?php echo $_SESSION["uha"] ?></td>
                    <td class="tdr"><?php echo $_SESSION["up"] ?></td>
                </tr>
            </table>
            <form action="../function/li.php" method="post">
                <div class="divFormLines">
                    <div>
                        <label for="ticketcount" class="lblCount">How many tickets: </label>
                        <input type="number" name="ticketcount" id="ticketcount" value="1" min="1" class="inpNum"><br>
                    </div>
                    <div>
                        <label for="editDate" class="lblCount">Date:</label>
                        <input type="date" min="<?php echo date("Y-d-m");?>" max="2022-12-31" 
                        value="<?php echo date("Y-d-m"); ?>" class="inpDate" name="travelDate">
                    </div>

                    <!-- soldes solutions -->
                    <p class="pNotice">Notice! Soldes start whenever you buy a ticket one week before travel or more: <br>
                        <ol class="olLines">
                            <li>One Week before: -15%</li>
                            <li>Two Weeks before: -30%</li>
                            <li>One Month before: -50%</li>

                        </ol>
                    </p>
                    <input type="submit" value="Buy" class="buyBtn" name="buybtn">
                </div>
            </form>
            <a href="index.php"><button class="btnBack">Back</button></a>
        </div>
    </main>


    <!-- footer -->
    <?php include "../fixedPages/footer.php";?>

    <!-- ----- bootstrap js: ----- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ----- fontawesome js: ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>

</body>
</html>