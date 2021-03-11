<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzTravel - Login</title>
    <link rel="shortcut icon" href="../pics/OzVoyage.png" type="imagr/png">
    <link rel="stylesheet" href="../css/login.css">
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
    
    <main class="mainLogin">
        <div class="fdivLogin">
            <form action="../function/lg.php" method="post">
                <div style="width: 100%;" class="text-center">
                    <h2 class="h2login">Login</h2>
                </div>
                <div>
                    <label for="em" class="lblLogin">Email:</label><br>
                    <input type="email" name="email" id="em" required class="inpLogin">
                </div>
                <div>
                    <label for="pa" class="lblLogin">Password:</label><br>
                    <input type="password" name="password" id="pa" required class="inpLogin">
                </div>
                <div class="rm">
                    <input type="checkbox" name="remamberme" class="remamberMe" id="rm">
                    <label for="rm">Remamber me</label>
                </div>
                <div class="text-center">
                    <input type="submit" value="Login" class="btnLogin2" name="btnLogin">
                </div>
                <div class="divLastLog">
                    <a href="signUp.php" class="aLastLog">Create Account</a>
                    <a href="#" class="aLastLog">Forgot Password?</a>
                </div>
            </form>
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