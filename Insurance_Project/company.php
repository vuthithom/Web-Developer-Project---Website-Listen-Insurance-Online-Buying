<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>V Triple T</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <!-- Jquery & Search -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="path/to/swiper.min.css">
    
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <?php 
        if (!(isset($_SESSION['loading']))) {
            echo '<div id="load-item">
            </div>
            <script src="loading/loading.js"></script>
            <script src="loginGUI/js.js"></script>';
            $_SESSION['loading'] = true;
        }
        $select = $conn->query("SELECT * FROM company");
        $ccount = mysqli_num_rows($select);
    ?>
    <!-- Menu -->
    <?php include 'theme/menuGUI.php'?>
    <!--  -->
    <style>
    .swiper-button-prev, .swiper-button-next {
        color:black;
    }
    .swiper-container {
        margin-top:50px;
        width: 100%;
        height: 80vmin;
    }
    </style>
    <div style="margin-top:150px">
        <?php 
        $idm = $_GET['id'];
            $sele = $conn->query("select * from company where id = $idm");
            while ($pro = mysqli_fetch_array($sele)){
                echo '<center><h3>'.$pro['name'].'</h3>Product</center>';
            }
        ?>
    </div>
    <div class="swiper-container" style="margin-top:10px;Width:400px;height:250px">
    <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                    $sele = $conn->query("select * from packet where belong = $idm");
                    while ($proe = mysqli_fetch_array($sele)){
                        echo '
                        <div class="swiper-slide">
                        <a href="details.php?id='.$proe['id'].'" class="hover-me3">
                            <div style="Width:100%;height:100%;color:black;text-align:center">
                            <img src="img/'.$proe['image'].'" alt="" style="width:190px">
                            <br>'.$proe['name'].'
                            <br>'.number_format($proe['price']).'$
                            </div></a>
                        </div>';
                    }
                ?>
            </div>
            <!-- If we need pagination -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
    </div>
    <script src="path/to/swiper.min.js"></script>
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
<script src="js/swiper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>