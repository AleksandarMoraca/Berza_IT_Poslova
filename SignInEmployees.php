<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aleksandar Moraca">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
        <b class="moraca">Berza IT Poslova</b>
    </label>
    <ul>
        <li><a href="index.php" > Home </a></li>
        <li><a href="Jobs.php"> Jobs </a></li>
        <li><a href="Companies.php"> Companies </a></li>
        <li><a href="SignInEmployees.php" class="active">Sign In</a></li>
        <li><a href="SignInCompanies.php">For Companies</a></li>

    </ul>
    </nav>

<div class="container2">
    <div class="sign-in">
        <form action="sign-in.php" method="post">
            <div class="login">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" class="sign-in-button">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="buttons">
                <button type="button" class="cancel-btn-sign-in">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span><br>
            </div>
        </form>
        <h3 class="no-account">Nemate nalog?<a href="register.php"> Registrujte se!</a> </h3>
    </div>
    <div class="sign-in-benefits">
        <h3>Beneficije prijavljenog korisnika:</h3><br>
        <ul class="benefits">
            <li><i class="far fa-check-circle"></i>
            Može da pregleda ponuđene oglase za posao na sajtu!</li><br>
            <li><i class="far fa-check-circle"></i>
            Može da putem detaljnije pretrage dobije listu oglasa za posao!</li><br>
            <li><i class="far fa-check-circle"></i>
            Može da promeni svoje profilne podatke!</li><br>
            <li><i class="far fa-check-circle"></i>
            Može da kontaktira kompaniju koja je postavila oglas!</li><br>
            <li><i class="far fa-check-circle"></i>
            Može da zahteva promenu lozinke!</li>
        </ul>
    </div>

</div>
<footer class="foot">
    &copy;by Moraca Aleksandar
</footer>

</body>
</html>
