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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=PT+Serif&family=Raleway&display=swap" rel="stylesheet">
    <script>
    $( function() {
        $( "#tags" ).autocomplete({
            source: <?php include 'php/search.php'; ?>
        });
    } );
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
        border-top:8px solid rgba(66, 235, 247, 0.699);
        text-align: center;
        border-radius: 2%;
    }
    .tt {
        background-color: white;
        border: 1px solid gray;
        border-top:8px solid rgba(255, 71, 126, 0.863);
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
                    Accounts
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <?php 
        $name;
        $description;
        $price;
    ?>
    <?php
                    $select = $conn->query("SELECT * from packet where id = ".$_GET['id']);
                    while ($aa = mysqli_fetch_array($select)) {
                        $name = $aa['name'];
                        $description =  $aa['description'];
                        $price =  $aa['price'];
                    }
                ?>
    <div class="container" style="margin-top:20px">
        <!--  -->
        <div class="lib-tb" style="height:350px">
            <div class="tb-left" style="height:100%">
                <div style="height:60%;background-image:url('img/car.png');background-position-x:center;background-size:cover;width:90%">
                </div>
                <div class="cont" style="width:90%;height:35px;background-color:gray;opacity:0.5">
                    <div class="centered" style="color:white">HOTLINE: 0903898708</div>
                </div>
                <div style="height:25%;background-color:#e0dede;width:90%">
                </div>
            </div>
            <div class="tb-right cont">
                <form action="PHP/buy.php?id=<?php echo $_GET['id']?>" method="post">
                    <h2><?=$VN_buy_insurance?></h2>
                    <div style="display:flex">
                        <div>
                            <?=$VN_buy_name?>
                            <input type="text" class="form-control w-100" name="fullname" minlength="3" required autocomplete="OFF">
                        </div>
                        <div style="margin-left:10px">
                            <?=$VN_buy_sex?>
                                <select id="" class="form-control" minlength="2" name="sex">
                                    <option value="Nam"><?=$VN_buy_sex1?></option>
                                    <option value="Nu"><?=$VN_buy_sex2?></option>
                                    <option value="else"><?=$VN_buy_sex3?></option>
                                </select>
                        </div>
                    </div>
              <!---->
    
    
  
                    <div style="display:flex">
                        <div>
                            <?=$VN_buy_phone?>
                            <input type="text" class="form-control w-100" name="phone" minlength="10" required autocomplete="OFF">
                        </div>
                        <div style="margin-left:10px">
                            <?=$VN_buy_dob?>
                            <input type="date" name="date" class="form-control" style="width:90%">
                        </div>
                    </div>
                    <!--  -->
                    <div style="display:flex">
                        <div>
                            <?=$VN_buy_social?>
                            <input type="text" class="form-control w-100" name="cmnd" minlength="9" maxlength="12" required autocomplete="OFF">
                        </div>
                        <div style="margin-left:10px">
                            <?=$VN_buy_email?>
                            <input type="text" class="form-control w-100" name="email" required autocomplete="OFF">
                        </div>
                    </div>
                    <!--  -->
                    <div style="display:flex">
                        <div>
                            CarID
                            <input type="text" class="form-control w-100" name="carID" minlength="1" maxlength="40" required autocomplete="OFF">
                        </div>
                    </div>
                    <!--  -->
                    <div style="margin-top:10px">
                        <?=$VN_buy_address?><br>
                        <textarea name="address" id="" cols="55" rows="5" minlength="10" placeholder="VD: Nguyễn Đình Chiểu Q3 TP.HCM"></textarea>
                    </div>
                    <!--  -->
                    <div style="margin-top:30px;">
                            <input type="submit" class="form-control btn btn-danger" value="<?=$VN_buy_complete?>" style="width:33%;color:white;font-weight: bold;padding:5px">
                        </div>
                    <!--  -->
                </form>
                <!--  -->
            </div>
        </div>
    </div>
            <div class="container">
                <div class="row" style="margin-top:200px;margin-bottom:50px">
                    <div class="col" style="text-align:center">
                        <div class="khoi-1" style="margin:auto">
                            1
                        </div>
                        <?=$VN_buyer1?>
                    </div>
                    <!--  -->
                    <div class="col" style="text-align:center">
                        <div class="khoi-1" style="margin:auto">
                            2
                        </div>
                        <?=$VN_buyer2?>
                    </div>
                    <!--  -->
                    <div class="col" style="text-align:center">
                        <div class="khoi-2" style="margin:auto">
                            3
                        </div>
                        <?=$VN_buyer3?>
                    </div>
                    <!--  -->
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