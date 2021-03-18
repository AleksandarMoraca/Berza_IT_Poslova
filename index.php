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
        <li><a href="index.php" class="active"> Home </a></li>
        <li><a href="Jobs.php"> Jobs </a></li>
        <li><a href="Companies.php"> Companies </a></li>
         <div class="dropdown">
             <button class="dropbtn"><b>Sign In</b>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="#">For Employers</a>
                <a href="#">For Companies</a>
            </div>
        </div>

    </ul>
    </nav>


<div class="container1">
    <h1>Are you <span style="color:#c9572b;font-weight:bold;font-size:50px">Unemployed?</span></h1>
    <p>Don't worry, we'll find suitable job for you today!</p>
    <form method="get" action="cities.php">
        <div class="city">
    <select name="city" >
        <option value="Su">Subotica</option>
        <option value="Bg">Beograd</option>
        <option value="NS">Novi Sad</option>
    </select>
        <input type="submit" id="submit-button" value="Search">
        </div>
</form>
</div>



<footer class="foot">
    &copy;by Moraca Aleksandar
</footer>

<script>
    $(document).ready(function() {
        $('select').select2();
    });
</script>
</body>
</html>



<?php
?>