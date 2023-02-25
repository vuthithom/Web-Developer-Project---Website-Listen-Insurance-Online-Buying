<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Aptech - Contact Us</title>
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
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
<?php 
        session_start();
        require 'PHP/db.php';
        require 'language/main.php';
    ?>
    <!-- Menu -->
    <?php include 'theme/menuGUI.php'?>
    <!-- Slide -->
    <div class="slidee cont" style="margin-top:97px!important">

        <div style="position: absolute;bottom:0px;background-color: black;height:35px;opacity: 0.6;" class="w-100">
            <div class="container" style="opacity: 1;color:white;display: flex;">
                <div style="padding:7px">
                    <i class="fas fa-home"></i> 
                </div>
                <div style="padding:7px;">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div style="padding:7px;">
                    Contact Us
                </div>
            </div>
        </div>
    </div>
    <!-- Ô tô slide -->
    <div class="container" >
        <div style="margin:40px" class="lib-tb">
            <div class="tb-left" style="width:30%">
                <h5>24 Phan Liêm Q1, TP.HCM</h5>
                <i class="fas fa-envelope"></i> trieu6542@gmail.com<br>
                <i class="fas fa-phone"></i> 0903.898.708
            </div>
            <div class="tb-right" style="width:70%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.282982943546!2d106.69300631480093!3d10.789624892312567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cb4ba30aa5%3A0x3a0ddc230888b922!2zMjQgUGhhbiBMacOqbSwgxJBhIEthbywgUXXhuq1uIDEsIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1sen!2s!4v1590651199461!5m2!1sen!2s" 
            class="map" frameborder="0" style="border:0;height:350px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            
        </div>
    </div>
</body>
</html>
    <!--  Notification -->
    <?php include 'theme/noti.html' ?>
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