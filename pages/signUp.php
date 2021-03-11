<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Sign Up</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/signUp.css">
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
    <main class="mainSignUp">
        <div class="fdivSignUp">
            <form action="../function/sup.php" method="post">
                <div style="width: 100%;" class="text-center">
                    <h2 class="h2SignUp">Sign Up</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <label for="fn" class="lblSignUp">First name:</label><br>
                        <input type="text" name="firstname" id="fn" required class="inpSignUp" pattern="/[A-Z,a-z]{3,20}+\b/gm"
                        oninvalid="this.setCustomValidity('First name should be just a letters, between 3 to 20 letter')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="ln" class="lblSignUp">Last name:</label><br>
                        <input type="text" name="lastname" id="ln" required class="inpSignUp" pattern="[A-Za-z]{3,20}"
                        oninvalid="this.setCustomValidity('Last name should be just a letters, between 3 to 20 letter')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-sm-12 col-12">
                        <label for="em" class="lblSignUp">E-mail:</label><br>
                        <input type="email" name="email" id="em" required class="inpSignUp1"
                        oninvalid="this.setCustomValidity('Please write your correct email!')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="pa1" class="lblSignUp">Password:</label><br>
                        <input type="password" name="password1" id="pa1" required class="inpSignUp" pattern="[A-Za-z0-9]{8,20}"
                        oninvalid="this.setCustomValidity('Password should have letters and numbers, and length between 8 and 20')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="pa2" class="lblSignUp">Confirm password:</label><br>
                        <input type="password" name="password2" id="pa2" required class="inpSignUp">
                        <p class="lblCorrect" id="cc"></p>
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="bd" class="lblSignUp">Birthday:</label><br>
                        <input type="date" name="birthday" id="bd" required class="inpSignUp">
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="pn" class="lblSignUp">Phone number:</label><br>
                        <input type="text" name="phonenumber" id="pn" required class="inpSignUp" pattern="^0[5-7]{1}[0-9]{8}"
                        oninvalid="this.setCustomValidity('Password should have letters and numbers, and length between 8 and 20')"
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="divBtnSignUp">
                        <input type="submit" value="Sign Up" class="btnSignUp" name="btnsignup" id="btnSU">
                    </div>
                    <a href="login.php" class="iahaa">I Already Have An Account</a>
                </div>
            </form>
        </div>
    </main>

    <!-- footer -->
    <?php include "../fixedPages/footer.php";?>

    <!-- own scripts -->
    <script src="../js/formValidation.js"></script>
    <!-- ----- bootstrap js: ----- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ----- fontawesome js: ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>

</body>
</html>