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
    <script src="lib/jquery.js"></script>
    <script>
        $(function() {
            $("#tags").autocomplete({
                source: <?php include 'php/search.php'; ?>
            });
        });
    </script>
</head>
<style>
    html,
    body {
        height: 100%;
        overflow-y: scroll;
    }
</style>

<body>
    <?php
    session_start();
    require 'PHP/db.php';
    require 'language/main.php';
    if (isset($_SESSION['id'])) {
    } else {
        header('Location: main.php');
    }
    ?>
    <!-- Menu -->
    <?php include 'theme/menuGUI.php' ?>
    <!--  -->

    <div class="container" style="margin-top:70px;margin-bottom:10px">
        <div class="lib-tb">
            <div class="tb-left" style="width:15%">
                <!--  -->
                <h3><?= $VN_Tags_Accounts ?></h3>
                <?php
                $select = $conn->query("SELECT * FROM accounts where id = " . $_SESSION['id']);
                $avatar;
                $player;
                $money;
                $admin;
                while ($pro = mysqli_fetch_array($select)) {
                    $avatar = $pro['avatar'];
                    $player = $pro['name'];
                    $money = $pro['cash'];
                    $admin = $pro['admin'];
                    $point = $pro['points'];
                }
                ?>
                <div class="lib-tb" style="width:100%">
                    <div class="tb-left" style="width:92%">
                        <img src="<?= $avatar ?>" alt="" style="width:150px;height:150px">
                        <center>
                            <?= $player ?>
                        </center>
                        <div style="margin-top:0px">
                            <?php if ($admin == 0) {
                                $ad = 'Thành viên';
                            }
                            if ($admin == 1) {
                                $ad = 'Quản Trị Viên';
                            } ?>
                            <center>
                                <div style="width:fit-content;font-size:16px;padding:3px;padding-left:15px;padding-right:15px;border-radius:3vmin;
                                            background-color:#c47670;color:black">
                                    Quản trị viên</div>
                            </center>
                            <i class="far fa-money-bill-alt"></i>
                            <?= number_format($money) . '$'; ?><br>
                            <div id="coins" class="hover-me2" style="cursor:pointer">
                                <i class="far fa-money-bill-alt"></i>
                                <?= number_format($point) . ' Coins'; ?>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fas fa-donate"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="donate" style="cursor:pointer"><?= $VN_Tags_Funds ?></span><br></div>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fas fa-money-bill"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="withdraw" style="cursor:pointer"><?= $VN_Tags_Withdraw ?></span><br></div>
                            </div>
                            <hr>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fas fa-donate"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="accounts" style="cursor:pointer"><?= $VN_Tags_Accounts ?></span><br></div>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="history" style="cursor:pointer"><?= $VN_Tags_History ?></span><br></div>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fa fa-address-card" aria-hidden="true"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="redeem" style="cursor:pointer"><?= $VN_Tags_Redeem ?></span><br></div>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <span class="" id="loved" style="cursor:pointer">Loved</span><br></div>
                            </div>
                            <hr>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fa fa-binoculars" aria-hidden="true"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <a href="admin-control.php" class="hover-link"><?= $VN_Tags_Admin ?></a><br></div>
                            </div>
                            <div class="lib-tb hover-me2">
                                <div class="tb-left" style="width:15%">
                                    <i class="fa fa-child" aria-hidden="true"></i></div>
                                <div class="tb-right" style="width:90%">
                                    <a class="hover-link" href="logout.php" class=""><?= $VN_Tags_Logout ?></a><br></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
            <!--  -->

            <!--  -->
            <div class="tb-right" style="width:80%">
                <div id="data"></div>
            </div>
        </div>
    </div>
</body>

</html>
<!--  Phone -->
<?php include 'theme/phone.php' ?>
<!-- GUI -->
<?php include 'theme/registerGUI.php' ?>
<?php include 'theme/loginGUI.php' ?>
<?php include 'theme/staffGUI.html' ?>
<script src="loginGUI/js.js"></script>
<script src="chat/real/js.js"></script>
<script src="./js/popup.js"></script>
<script src="js/elem.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>