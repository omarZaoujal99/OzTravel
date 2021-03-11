<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Payment</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/payment.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- header -->
    <?php include_once "../fixedPages/header.php"; ?>
    
    <main class="mainPayment">
        <div class="fdivPament">
            <form action="../function/done.php" method="post">
                <div class="fdivformPayment">
                    <div class="text-left mb-3 pl-3">
                        <h4 class="h2pm">Payment Methods:</h4>
                        <button class="btnP"><img src="../pics/masterCard.png" alt="masterCard" width="50px" height="35px"></button>
                        <button class="btnP"><img src="../pics/visa.png" alt="masterCard" width="50px" height="35px"></button>
                    </div>
                    <div class="div2">
                        <label for="ow" class="own">Owner:</label><br>
                        <input type="text" name="owner" class="inpOwner" id="ow" required pattern="[A-Za-z]{6-50}"
                        oninvalid="this.setCustomValidity('Owner name should have First and Last name from your card.')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="div2">
                        <label for="cnum" class="own">Card Number:</label><br>
                        <input type="text" name="cardNumber" class="inpOwner" id="cnum" required pattern="[0-9]{16}"
                        oninvalid="this.setCustomValidity('Card number should content 16 number.')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="div3">
                                <label for="cVV" class="own">CVV:</label><br>
                                <input type="text" name="cvv" id="cVV" class="inpOwner" required pattern="[0-9]{3}"
                                oninvalid="this.setCustomValidity('CVV is a secure code of your code, you can find it in the back of your card(3 numbers).')"
                                oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="div3">
                                <label class="own">Expiration Date:</label><br>
                                <select name="selExpDateM" class="selMonths" required>
                                    <option value="January">January</option>
                                    <option value="Fabruary">Fabruary</option>
                                    <option value="Mars">Mars</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <input type="number" name="expDat" class="expDays" required pattern="[1-9]{1,2}"
                                value="1" min="1" max="31">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Done" class="btnDone" name="btnDone">
                </div>
            </form>
            <a href="lines.php"><button class="btnBack">Back</button></a>
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