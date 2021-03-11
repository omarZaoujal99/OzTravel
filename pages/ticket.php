<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Login</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/ticket.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- header -->
    <?php include_once "../fixedPages/header.php";?>
    <section class="text-center">
        <a href="#" target="_blank" class="aDownload" id="aT">Download to PDF <i class="fas fa-download"></i></a>
    </section>
    <main class="mainticket">
        <section class="ticketCadr" id="secT">
            <div class="fd">
                <div class="fdivTicket">
                    <h4><?php echo date("Y-d-m")?></h4>
                </div>
                <div class="row">
                    <div class="col-md-6 col-6 flexibility1">
                        <div class="sdivTicket">
                            <h1>OzTravel</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 flexibility2">
                        <table>
                            <tr>
                                <td><strong>Travel line:</strong> &nbsp&nbsp&nbsp</td>
                                <td><?php echo $_SESSION["uvd"] ?> - <?php echo $_SESSION["uva"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Mr/Mrs:</strong> &nbsp&nbsp&nbsp</td>
                                <td><?php echo $_SESSION["fn"] . " " . $_SESSION["ln"]?></td>
                            </tr>
                            <tr>
                                <td><strong>Time Travel:</strong> &nbsp&nbsp&nbsp</td>
                                <td><?php echo $_SESSION["uhd"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Price: &nbsp&nbsp&nbsp</strong></td>
                                <td><?php echo "110Dhs"?>&nbsp&nbsp <span class="spn"><?php echo $_SESSION["up"]?></span></td>
                            </tr>
                        </table>
                        <div class="thirdDiv">
                            <div class="numTicket">
                                <p class="pThirdTicket">Ticket Num: </p>
                                <p class="third2"><?php echo $_SESSION['numbil']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- footer -->
    <?php include "../fixedPages/footer.php";?>

    <!-- html2pdf js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
    <script src="../js/topdf.js"></script>
    <!-- ----- bootstrap js: ----- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ----- fontawesome js: ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>

</body>
</html>