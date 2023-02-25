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
    <div class="swiper-container">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div style="Width:100%;height:100%;background-image:url('img/slide001.png');background-size:cover;background-position-x:center"></div>
            </div>
            <div class="swiper-slide">
                <div style="Width:100%;height:100%;background-image:url('img/slide005.png');background-size:cover;background-position-x:center"></div>
            </div>
            <div class="swiper-slide">
                <div style="Width:100%;height:100%;background-image:url('img/slide004.png');background-size:cover;background-position-x:center"></div>
            </div>
            ...
        </div>
        <!-- If we need pagination -->

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
</div>
    <script src="path/to/swiper.min.js"></script>
    <!-- info -->
    <div id="main"></div>
    <center>
        <div class="container font-mon mb-top">
            <div class="upper" style="margin-top:0px">
                <img src="img/carslg.png" style="width:100px" alt="">
            </div>
            <div class="upper" style="margin-top:10px;font-size: 36px;color:#e52322">
                SAFE CARS LIMITED
            </div>
            <div class="upper" style="margin-top:30px;font-size: 16px;color:#696969">
                <?=$VN_home_intro?>
            </div>
            
                   <div class="container" style="max-width: 928px;margin-top: 50px;">
                        <div class="row">
                            <div class="col">
                                <div class="upper" style="margin-top:30px;font-size: 48px;color:#e52322;font-weight: bolder;">
                                    3+
                                </div>
                                <div class="upper" style="margin-top:10px;font-size: 14px;color:#707070;width:75%">
                                    <?=$VN_home_i1?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="upper" style="margin-top:30px;font-size: 48px;color:#e52322;font-weight: bolder;">
                                    <?=$ccount?>+
                                </div>
                                <div class="upper" style="margin-top:10px;font-size: 14px;color:#707070;width:75%">
                                <?=$VN_home_i2?>
                                </div>
                            </div>       
                            <div class="col">
                                <div class="upper" style="margin-top:30px;font-size: 48px;color:#e52322;font-weight: bolder;">
                                    100+
                                </div>
                                <div class="upper" style="margin-top:10px;font-size: 14px;color:#707070;width:75%">
                                <?=$VN_home_i3?>
                                </div>
                            </div>              
                        </div>
                   </div>
        </div>
    </center>
    <!-- Post -->
    <div style="margin:0px" id="v1"></div>
    <div class="container" style="margin-top:100px">
    <!-- Bảo hiểm slide -->
    
    <div style="margin:0px" id="v2"></div>
    <div class="cont" style="">
        <div style="width:100%;height:350px;" alt="">
        </div>
            <div class="centered">
            <CENter>
                
                <H4 class="upper"><?=$VN_home_i2?></H4>
                </CENter>
                <div class="swiper-container" style="width:250px;height:22vmin">
                    <div class="swiper-wrapper">
                                <?php 
                                            $select = $conn->query('select * from company limit 3');
                                            while ($product = mysqli_fetch_array($select)){
                                                echo '<div class="swiper-slide">';
                                                echo '
                                                <center>
                                                <a href="company.php?id='.$product['id'].'" class="hover-me" style="font-size:12px;padding:0px;margin:0px">
                                                <img src="img/'.$product['image'].'" alt="" class="rounded-circle" style="width:140px;height:110px">
                                                <br>
                                                '.$product['name'].'</center>
                                                </a></b>';
                                                echo '</div>';
                                            }
                                        ?>
                                ...
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                    </div>
                <!-- END Slide -->
            </div>
        </div>
        <DIV style="">
                <center>
                <h4 class="upper"><?=$VN_interest?></h4>
                <div id="tao-slide-moi" carousel-data="okee" hienthi="3" tocdo="303300">
                    <?php 
                        $select = $conn->query('select * from packet limit 5');
                        while ($product = mysqli_fetch_array($select)){
                      echo '<div class="vatpham" data="">
                                <div style="height:160px;background-color: white;margin-bottom:15px" class="rounded-circle cont">
                                    <div class="centered">
                                        <a href="details.php?id='.$product['id'].'" class="hover-me" style="font-size:12px;padding:0px;margin:0px">
                                        <img src="img/'.$product['image'].'" alt="" class="rounded-circle" style="width:140px;height:110px">
                                        <br>
                                        <center>
                                        '.$product['name'].'</center>
                                        </a></b>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                    <!-- END -->
                </div>
                </center>
        </div>
    <div class="container" style="max-width:850px;padding-left:20px">
        <center>
                <div style="margin-bottom:35px;">
                <a href="insurance.php?s=" class="btn btn-danger" STYLE="height:34px;padding:4px;width:150px"><?=$VN_viewmore?></a>
                </div>
        </center>
    </div>
    <!-- Download -->
    <hr style="margin-top:30px">
    <div class="container cont trans" id="ft-effect" style="max-width:800px;margin-bottom:60px;margin-top:100px;opacity:1">
        <div class="lib-tb">
            <div class="tb-left">
                <center>
                <p style="font-size:25px;font-weight:bold;color: #e52322">
                <?=$VN_app?>
                </p>
                
                <p style="font-size:16px">
                <?=$VN_perm?>
                </p>
                    <div style="margin-top:30px;margin:auto" class="w-75 mb-none">
                    <img src="img/ios.png" class="w-100" alt="">
                    </div>
                    <button class="btn btn-danger">
                        <?=$VN_download?>
                    </button>
                    </center>
            </div>
            <div class="tb-right">
                <img src="img/phone.jpg" style="width:100%" alt="">
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
<script src="js/swiper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>