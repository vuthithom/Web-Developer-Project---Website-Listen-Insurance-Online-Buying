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
    <div class="container" style="margin-top:110px">
        <div class="cont">
            <div style="height:210px;width:100%;">
                <img src="img/wood.png" class="w-100" style="height:100%" alt="">
            </div>
            <div class="lib-tb" style="position:absolute;top:0px">
                <div class="tb-left" style="width:35%">
                    <img src="img/zurich.png" style="width:37%" alt="">
                </div>
                <div class="tb-right cont" style="width:65%;padding:10px;padding-top:20px;height:210px">
                    <?=$VN_ins?>
                    <p style="color:white;font-size:14px">
                    <?=$VN_ins2?>
                    </p>
                    <div class="centered2" style="left:80px;bottom:0px">
                    <button style="width:150px;height:35px;padding:5px" class="btn btn-danger"><?=$VN_viewmore?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container" style="margin-top:30px">
        <div style="width:100%;height:90px;background-color:black;padding:10px" class="cont">
            <form action="#" method="GET">
                <div style="display:flex;height:40px">
                <input type="text" name="s" class="form-control" style="width:90%" autocomplete="OFF">
                <input type="submit" class="btn-dark" style="padding:5px;width:120px;height:100%" value="Tìm kiếm">
                </div>
                <select name="company" id="">
                    <option value="">None</option>
                    <option value="1">Zurich</option>
                    <option value="2">ICar</option>
                    <option value="3">Safe</option>
                </select>
                <select name="pricee" id="">
                    <option value="">None</option>
                    <option value="1">1-50$</option>
                    <option value="2">51-100$</option>
                    <option value="3">101-500$</option>
                </select>
            </form>
        </div>
    </div>
    <!--  -->
    <div class="container" style="margin-top:30px;display:flex">
        <!--  -->
        <div style="display:flex;width:100%;flex-wrap:wrap;padding:10px;padding-left:12px;border-radius:1%;">
            <!-- Card -->
            <!--  -->
            <?php 
                    if (isset($_GET['s'])){
                        $se = $_GET['s'];
                        $select = $conn->query("select * from packet where name like '%$se%'");
                        if (strlen($_GET['s']) >= 1){
                            if (isset($_GET['company']) && isset($_GET['pricee']) &&
                             strlen($_GET['company']) >= 1 && strlen($_GET['pricee']) <= 0){
                                $company = $_POST['company'];
                                $select = $conn->query("select * from packet where belong = $company and name like '%$se%'");
                            }
                            if (isset($_GET['company']) && isset($_GET['pricee']) &&
                            strlen($_GET['pricee']) >= 1 && strlen($_GET['company']) <= 0){
                                $company = $_GET['company'];
                                if ($_GET['pricee'] == 1){
                                    $min = 1;
                                    $max = 50;
                                }
                                if ($_GET['pricee'] == 2){
                                    $min = 51;
                                    $max = 100;
                                }
                                if ($_GET['pricee'] == 3){
                                    $min = 101;
                                    $max = 500;
                                }
                                $select = $conn->query("select * from packet where price between $min and $max");
                            }
                        }
                        if (strlen($_GET['s']) <= 0 && isset($_GET['company'])){
                            if (strlen($_GET['company']) >= 1){
                                $company = $_GET['company'];
                                $select = $conn->query("select * from packet where belong = $company");
                            }
                            if (strlen($_GET['pricee']) >= 1 && strlen($_GET['company']) <= 0){
                                $company = $_GET['company'];
                                if ($_GET['pricee'] == 1){
                                    $min = 1;
                                    $max = 50;
                                }
                                if ($_GET['pricee'] == 2){
                                    $min = 51;
                                    $max = 100;
                                }
                                if ($_GET['pricee'] == 3){
                                    $min = 101;
                                    $max = 500;
                                }
                                $select = $conn->query("select * from packet where price between $min and $max");
                            }
                        }
                
                while ($pro = mysqli_fetch_array($select)){
                    if ($pro['quantity'] >= 1){
                ?>   
                    <div class="card" style="width: 14rem;height:460px;margin:5px;margin-right:35px;margin-bottom:35px">
                            <?php if ($pro['coupon'] >= 1) { ?>
                            <div class="top-left" style="background-color: orange;
                            padding: 4px;padding-left: 10px;padding-right: 10px;
                            top:0px;left:0px;color: white;">
                                <?php 
                                    if ($pro['coupon'] == 1) {
                                        echo $VN_seller;
                                    } if ($pro['coupon'] == 2) {
                                        echo $VN_hot;
                                    } if ($pro['coupon'] == 3) {
                                        echo $VN_limited;
                                    }
                                ?>
                            </div>
                            <?php } ?>
                            <div style="background-image: url('img/<?=$pro['image']?>');margin-bottom:15px;height: 190px;border-bottom:1px solid gray;background-size: 50%;background-position-x: center;background-position-y:center;background-repeat:no-repeat">

                            </div>
                            <h5 class="card-title" style="text-align: center;font-weight: bold;"><span style="color: red;"><?=$pro['name']?></span></h5>
                            <div class="card-body" style="padding-top:0px"> 
                                <p class="card-text" style="text-align: center;">
                                PARTNER COMPANY OF SAFE CARS LIMITED</p>
                                <hr style="border-top: 1px solid rgba(53, 53, 53, 0.801);">
                                <div class="lib-tb">
                                    <div class="tb-left" style="width:10%">
                                        <div>
                                            <img src="img/chuong.png" style="width:25px" alt="">
                                        </div>
                                    </div>
                                    <div class="tb-right" style="width:90%">
                                        <?=$pro['description']?>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom:20px;width:90%;margin:auto;margin-bottom:15px">
                                <a href="details.php?id=<?=$pro['id'];?>" class="form-control btn btn-danger" style="width:100%;color:white;padding:7px"><?=$VN_viewmore?> ></a>
                            </div>
                    </div>         
                <?php
                    }
                }
                if (mysqli_num_rows($select) == 0){
                    echo '<span style="color:white;font-weight:bold">No available product!</span>';
                }
            }
            ?>
        </div>
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