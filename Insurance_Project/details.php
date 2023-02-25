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
    <link rel="stylesheet" href="lib.css">
    <link rel="stylesheet" href="js/addon.css" type="text/css">
    <script src="js.js"></script>
    <script src="lib/jquery.js"></script>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="lib/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=PT+Serif&family=Raleway&display=swap" rel="stylesheet">
    <script>
        $(function() {
            $("#tags").autocomplete({
                source: <?php include 'php/search.php'; ?>
            });
        });
    </script>
</head>
<style>
    .khoi-1 {
        width: 25px;
        height: 25px;
        background-color: red;
        border-radius: 50%;
        text-align: center;
        color: white;
        margin-right: 10px;
        margin-left: 10px;
        font-weight: bold;
    }

    .khoi-2 {
        width: 25px;
        height: 25px;
        background-color: wheat;
        border-radius: 50%;
        text-align: center;
        color: red;
        margin-right: 10px;
        margin-left: 10px;
        font-weight: bold;
    }

    .hh {
        background-color: white;
        border: 1px solid gray;
        border-top: 8px solid rgba(66, 235, 247, 0.699);
        text-align: center;
        border-radius: 2%;
    }

    .tt {
        background-color: white;
        border: 1px solid gray;
        border-top: 8px solid rgba(255, 71, 126, 0.863);
        text-align: center;
        border-radius: 2%;
    }
</style>
<style>
    .font-1 {
        font-family: 'Merriweather', serif;
    }

    .font-2 {
        font-family: 'Merriweather', serif;
        font-family: 'Raleway', sans-serif;
    }

    .font-3 {
        font-family: 'Merriweather', serif;
        font-family: 'PT Serif', serif;
        font-family: 'Raleway', sans-serif;
    }
</style>

<body>
    <?php
    session_start();
    require 'PHP/db.php';
    require 'language/main.php';
    if (!(isset($_SESSION['id']))) {
        echo '<script>
            window.location = "./main.php";
            alert("you are not in login session");
        </script>';
    }
    ?>
    <!-- Menu -->
    <?php include 'theme/menuGUI.php' ?>
    <?php
    $name;
    $description;
    $price;
    ?>
    <?php
    $select = $conn->query("SELECT * from packet where id = " . $_GET['id']);
    if (mysqli_num_rows($select) <= 0){
        echo "<center><div style='margin-top:150px'>Sản phẩm không tồn tại!</div></center>";
        exit;
    }
    $starc = $conn->query("select * from rate where belong = ".$_GET['id']);
    if (mysqli_num_rows($starc) >= 1){
        $cmt = 1;
    } else {
        $cmt = 0;
    }

    if (mysqli_num_rows($select) <= 0){
        echo "<center><div style='margin-top:150px'>Sản phẩm không tồn tại!</div></center>";
        exit;
    }
    while ($aa = mysqli_fetch_array($select)) {
        $name = $aa['name'];
        $description =  $aa['description'];
        $price =  $aa['price'];
        $like = $aa['likes'];
        if ($aa['quantity'] <= 0){
            echo "<center><div style='margin-top:150px'>Out of stock!</div></center>";
            exit;
        }
    }
    $dt = $_GET['id'];
    $likecheck = '<span style="color:black">' . $like . ' LOVE <i class="fas fa-heartbeat"></i></span>';;
    $select = $conn->query("SELECT * From likes where status = 0 and belong = $dt and auth = " . $_SESSION['id']);
    if (mysqli_num_rows($select) >= 1) {
        $likecheck = '<span style="color:black">' . $like . ' LOVE <i class="fas fa-heartbeat"></i></span>';;
    } 
    $select = $conn->query("SELECT * From likes where status = 1 and belong = $dt and auth = " . $_SESSION['id']);
    if (mysqli_num_rows($select) >= 1) {
        $likecheck = '<span style="color:red">' . $like . ' LOVE <i class="fas fa-heartbeat"></i></span>';;
    } 
    
    ?>
    <div class="container" style="margin-top:130px">
        <!--  -->
        <div class="lib-tb" style="height:350px">
            <div class="tb-left" style="height:80%">
                <div style="height:100%;background-image:url('img/car.png');background-position-x:center;background-size:cover;width:90%">
                </div>
            </div>
            <div class="tb-right cont">
                <div style="margin-bottom:2px;font-size:30px;text-align:center;color:gray;width:200px;margin:auto" class="cont">
                    <?php
                    echo $name;
                    echo '<div class="top-right" style="top:-22px"><span style="font-size:17px;font-weight:bold;color:red"> ' . $price . '$</span></div>';
                    ?>
                </div>
                <div style="margin:15px;text-align:center">
                    <a href="https://www.facebook.com/trieu.zzz" target="_black" class="hover-me" style="padding:0px"><i class="fab fa-facebook"></i> <?= $VN_share ?></a>
                </div>
                <div style="font-size:18px" class="font-2">
                    <hr>
                    <div class="lib-tb">
                        <div class="tb-left" style="width:5%;margin-left:54px">
                            <img src="img/chuong.png" alt="" style="width:32px">
                        </div>
                        <div class="tb-right" style="width:70%;">
                            <?= $description ?>
                        </div>
                    </div>
                </div>
                <div class="centered2" style="left:52%">
                    <a href="dbuy.php?id='<?php echo $_GET['id']; ?>'" class="btn btn-danger" style="height:45px;padding-top:9px">
                        <i class="fas fa-shopping-cart"> <?= $VN_buynow ?></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="bottom-right">
            <div class="hover-me3" id="like" thongtin="<?= $_GET['id'] ?>" style="cursor:pointer">
                <span id="likeif"><?= $likecheck ?></span>
            </div>
        </div>
    </div>
    <script src="chat/like/handle.js"></script>
    <hr>
    <!--  -->
    <div class="container">
        <?php
            $idm = $_GET['id'];
            $starc = $conn->query("select * from rate where belong = $idm");
            echo $conn->error;
            $total = 0;
            
            if ($cmt == 1){
                while ($pro = mysqli_fetch_array($starc)){
                    global $total;
                    $total += $pro['star'];
                }
                $total=$total/mysqli_num_rows($starc);
            }
        ?>
    <h4>Rating <?=$total?>/5 <span style="color:#ffc700"><i class="fas fa-star"></i></span></h4>
    </div>
    <div class="container" style="background-color:rgb(239, 239, 239);padding:22px;padding-bottom:2px">
        <?php
            $select = $conn->query("SELECT * FROM rate where belong = $idm order by id desc limit 8");
            while ($pro = mysqli_fetch_array($select)) {
                ?>
                
        <div class="lib-tb">
            <div class="tb-left" style="width:7%">
                <div style="width:90%;margin:auto">
                    <img src="img/userd.png" style="width:100px">
                </div>
            </div>
            <div class="tb-right" style="width:90%">
                <div style="width:100%">
                    <p style="font-weight:400;font-size:18px">
                        <?=$pro['title']?> |
                        <span><?=$pro['star']?> </span><span style="color:#ffc700"><i class="fas fa-star"></i></span>
                        </p>
                </div>
                <div>
                    <p style="font-size:13px">
                    <?=$pro['text']?>  
                </div>
            </div>
        </div>
        <hr>
        <?php
            }
        ?>
    </div>
    <hr style="margin-bottom:0px">
    </div>
    <!--  -->
    <div class="container" style="max-width:650px">
    <?php 
    $sel = $conn->query("SELECT * FROM rate where belong = $idm and auth = ".$_SESSION['id']);
    $sel2 = $conn->query("SELECT * from code where belong = $idm and auth = ".$_SESSION['id']);
    if (mysqli_num_rows($sel) <= 0 && mysqli_num_rows($sel2) >= 1){
        ?>
        <center>
        <h2>YOU HAVE BOUGHT THIS PRODUCT</h2>
        Please Rate For It Better ^^
        </center>
        <form action="PHP/rate.php?id=<?=$_GET['id']?>" method="POST">
            <h3>1. <?=$VN_cmt_sub1?></h3>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
            <br><br>
            <div style="margin-bottom:60px;width:100%">
                <h4>2. <?=$VN_cmt_sub2?></h4>
                <input type="text" class="form-control w-100" name="title" autocomplete="OFF" required>
                <h4>3. <?=$VN_cmt_sub3?></h4>
                <textarea id="" cols="10" rows="4" name="subtitle" class="form-control w-100" autocomplete="OFF" required></textarea>
                <div style="width:100%;margin-top:10px">
                    <div class="float-right">
                        <button class="btn btn-dark"><?=$VN_cmt_rate?></button>
                    </div>
                </div>
        </form>
        <hr>
    </div>
        <?php
    }
    ?>
    </div>
    <!--  -->

    </div>
</body>

</html>
<!--  Notification -->
<?php include 'theme/noti.html' ?>
<!--  Phone -->
<?php include 'theme/phone.php' ?>
<!-- GUI -->
<?php include 'theme/registerGUI.php' ?>
<?php include 'theme/loginGUI.php' ?>
<?php include 'theme/staffGUI.html' ?>
<script src="loginGUI/js.js"></script>
<script src="./js/popup.js"></script>
<script src="js/elem.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>