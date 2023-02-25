<?php 
        session_start();
        require 'PHP/db.php';
        require 'language/main.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aptech - <?=$VN_m1?></title>
    <link rel="stylesheet" href="lib/style.css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="lib/misc/col.css">
    <link rel="stylesheet" href="lib/misc/table.css">
    <link rel="stylesheet" href="lib/misc/misc.css">
    <link rel="stylesheet" href="lib/misc/center.css">
    <link rel="stylesheet" href="lib/carousel/main.css">
    <link rel="preload" as="style" href="js/addon.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="js/addon.css" type="text/css">
    <script src="js.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Jquery & Search -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#tags" ).autocomplete({
            source: <?php include 'php/search.php'; ?>
        });
    } );
    </script>
</head>
<body>
    <!-- Menu -->
    <?php include 'theme/menuGUI.php'?>
    <!-- Post -->
    <div class="container" style="margin-top:130px">
        <!--  -->
        <center>
            <img src="img/muabaohiem.png" alt="" class="rounded-circle" style="width:120px">
        </center>
        <a href="insurance.php?h=1&s=" class="hover-me2">
            <span style="color:gray;font-size:21px">
            > Continue
            </span>
        </a>
        <hr>
        <h4>POLICY SAFE CARS LIMITED</h4>
        <div style="width:50%">
        We always create favorable conditions for our customers and
        agent team to transact, as well as ensure that compensation is
        always transparent, fast and fairly.
        </div>
        <hr>
    </div>
    <div class="container">
        Note:<br>
        <i class="fas fa-arrow-right hover-me2"></i> No refund
        <br><i class="fas fa-arrow-right hover-me2"></i> 
        We are just a connection between the user and the company
        <br><i class="fas fa-arrow-right hover-me2"></i>
        If you have any questions, please contact the company you purchased insurance from
    </div>
</body>
</html>
    <!--  Phone -->
    <?php include 'theme/phone.php' ?>
    <!-- GUI -->
    <?php include 'theme/registerGUI.php'?>
    <?php include 'theme/loginGUI.php'?>
    <?php include 'theme/staffGUI.html'?>
<script src="loginGUI/js.js"></script>
<script src="./js/popup.js"></script>
<script src="js/elem.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>