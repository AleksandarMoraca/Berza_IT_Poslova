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
        <li><a href="SignInCompanies.php" >For Companies</a></li>

    </ul>
</nav>
<div class="container3">
    <form action="sign-up.php" method="post">
        <div class="sign-up">
            <h1>Sign Up</h1><br>
            <p>Please fill in this form to create an account.</p><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix"><br>
                <button type="button" class="cancel-btn-sign-up">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<footer class="foot">
    &copy;by Moraca Aleksandar
</footer>
</body>
</html>
<?php
