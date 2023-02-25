<script type="text/javascript"> (function() {
         var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
          css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })();
    </script>
<?php 
    $h = $_GET['h'] ??'';
    $cash;
    /* Destroy Session after 15 minutes */
    if (isset($_SESSION['id'])){
        $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
        while ($pro = mysqli_fetch_array($select)){
            if (time() - $pro['time']>1800){
                unset($_SESSION['id']);
                unset($_SESSION['user']);
                header('Location: #');
            }
        }
    }
?>
<script src="js.js"></script>
<style>
    .hover-me {
        height:30px !important;
        padding-bottom:0px !important;
    }
</style>
<!-- mBnav -->
<div class="mb">
    <div class="fixed-top">
        <div style="background-color: white;height: 122px;width:100%">
        </div>
        <div onclick="mON();" style="cursor: pointer;">
        <div class="top-right" style="right:12px;top:7px">
            <div style="width:29px;background-color: rgb(218, 21, 21);height:27px;border: 1px solid rgb(0, 0, 0);">

            </div>
        </div>
        <div class="top-right" style="right:20px;top:10px;">
            <i class="fas fa-bars"></i>
        </div>
        </div>
        <div class="centered" style="display:flex;width:100%;top:85px;display:flex;flex-wrap:wrap">
            <div style="padding-top:7px;display:flex;margin-left:50px;">
                <div>
                    <img src="img/user.png" alt="">
                </div>
                <div style="padding-top:3px;margin-left:5px;">
                    <div class="hover-black" style="cursor: pointer;width:100%">
                                <?php
                                    if (isset($_SESSION['id'])){
                                        $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                                        while ($acc = mysqli_fetch_array($select)){
                                            echo $acc['name'];
                                            $cash = $acc['cash'];
                                        }
                                    } else {
                                        $temp = "<a onclick=lgGUI('id-01')>$VN_login</a>";
                                        echo ''.$temp;
                                    }
                                ?>
                                <?php 
                                if(isset($_SESSION['id'])){
                                        echo $cash.'$<br>';
                                        echo '<a href="PHP/logout.php" class="hover-black">Logout</a>';
                                    }
                                ?>
                    </div>
                </div>
                <div style="margin-left:5px">
                <a href="language/setLang.php?lang=VN"><img src="img/vn.png" alt=""></a>
                </div>
                <div style="margin-left:5px">
                <a href="language/setLang.php?lang=EN"><img src="img/us.png" alt=""></a>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <div class="container fixed-top">
        <div class="centered" style="top:28px">
            <a href="home.php">
            <img src="img/muabaohiem.png" style="height:60px;width:80px" alt=""></a>
        </div>
    </div>
</div>
<!-- MB MENU -->
<div id="test2" class="fixed-top" style="top:-160%;">
    <div style="height:800px;background-color: white;">
        <!--  -->
        <div class="top-right" onclick="mOFF()" style="cursor: pointer;">
            <button style="background-color: #e52322;color:white;border: 1px solid #e52322;">X</button>
        </div>
        <center>
        <div style="padding:15px;padding-top: 0px;">
            <a href="home.php">
                <img src="img/muabaohiem.png" style="width:70px;height:60px" alt=""></a>
        </div>
        <a href="Insurance.php?s=">
        <div class="w-100 mb-item hover-me"><?=$VN_m1?></div></a>
        <a href="cars.php">
        <div class="w-100 mb-item hover-me"><?=$VN_m2?></div></a>
        <a href="contact.php">
        <div class="w-100 mb-item hover-me"><?=$VN_m3?></div></a>
        <a href="term.php">
        <div class="w-100 mb-item hover-me"><?=$VN_m4?></div></a>
        <a href="guide.php">
        <div class="w-100 mb-item hover-me"><?=$VN_m5?></div></a>
        <hr>
        </center>
    </div>
</div>
<!-- PCNAV -->
<div class="container pc">
    <div class="fixed-top" style="">
        <div style="position:absolute;top:37px;height:80px;width:100%;background-color: #ffffff;">
            <div class="container">
                <div class="flex-wrap" style="margin-left:200px;width:100%;max-width: 1100px;font-size: 18px;">
                    <?php 
                        $sel = $conn->query("SELECT * FROM thememenu");
                        while ($pro = mysqli_fetch_array($sel)){
                            if (isset($_SESSION['lang'])){
                                if ($_SESSION['lang'] == $pro['data']){
                                    echo '<a href="'.$pro['href'].'" style="font-weight:500" class="hover-me">'.$pro['nameVN'].'</a>';
                                } else {
                                    echo '<a href="'.$pro['href'].'" style="font-weight:500" class="hover-me">'.$pro['nameEN'].'</a>';
                                }
                            } else {
                                echo '<a href="'.$pro['href'].'" style="font-weight:500" class="hover-me">'.$pro['nameEN'].'</a>';
                            }
                        }
                    ?>
                    <div class="hover-me" style="display:inline;padding-bottom: 30px;padding-top:25px;margin-left:30px">
                        <div class="ui-widget">
                            <form action="insurance.php" method="get">
                                <input id="tags" name="s" type="text" class="rounded-pill" placeholder="Search ..." autocomplete="OFF" style="border: 0px;background-color:#f3f3f3;height:35px">
                                <div class="hover-me" style="cursor:pointer;padding:0px"> 
                                <div class="top-right" style="right:100px;top:28px;" onclick='document.forms["search-form"].submit();'>
                                <i class="fas fa-search"></i></div>
                            </form>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <div style="position:absolute;height:37px;width:100%;background-color: #ebebeb;">
            <div class="container">
                <div style="margin-left:200px;width:100%;max-width: 1010px;display:flex;font-size: 12px;" class="flex-wrap">
                    <div style="padding-top:7px;display:flex" id="hold" class="hover-menu">
                        <div>
                            <img src="img/user.png" alt="">
                        </div>
                        <div style="padding-top:3px;margin-left:5px">
                            <div class="hover-black" style="cursor: pointer;" onclick="<?php if (!(isset($_SESSION['id']))) { echo "lgGUI('id-01')"; }?>">
                                <?php
                                    if (isset($_SESSION['id'])){
                                        $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                                        while ($acc = mysqli_fetch_array($select)){
                                            echo $acc['name'];
                                        }
                                    } else {
                                        echo $VN_login;
                                    }
                                ?>
                                <?php include 'UserTagGUI.php'; ?>
                            </div>
                        </div>
                    </div>
                <!--  -->
                <?php 
                    if (isset($_SESSION['id'])){
                ?>
                <div style="border:1px solid white;height:24px;margin-top:6px;margin-left:10px;margin-right:10px"></div>
                <div style="padding-top:7px;display:flex">
                    <div>
                        <img src="img/m1.png" alt="">
                    </div>
                    <div class="hover-black" style="padding-top:3px;margin-left:5px;cursor: pointer;" onclick="">
                        <?php 
                       $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                       while ($acc = mysqli_fetch_array($select)){
                           if ($acc['cash'] >= 1) {
                               echo number_format($acc['cash']).'$';
                               $cash = $acc['cash'];
                           } else {
                               echo $acc['cash'].'$';
                           }
                       }
                        ?>
                    </div>
                </div>
                <!--  -->
                <?php } ?>
                <!--  -->
                <div style="border:1px solid white;height:24px;margin-top:6px;margin-left:10px;margin-right:10px"></div>
                <!--  -->
                        <div style="padding-top:7px;display:flex">
                            <div>
                                <img src="img/m2.png" alt="">
                            </div>
                            <div class="hover-black" style="padding-top:3px;margin-left:5px;cursor: pointer;" onclick="lgGUI('staff')">
                                <?=$VN_staff?>
                            </div>
                        </div>
                <div class="top-right" style="right:200px">
                    <a href="language/setLang.php?lang=VN"><img src="img/vn.png" alt=""></a>
                    <a href="language/setLang.php?lang=EN"><img src="img/us.png" alt=""></a>
                    24 Phan Liêm - <?=$VN_project?> C1908G2 - V Triple T
                </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<script>$(this).removeClass("ui-corner-all").addClass("ui-corner-top");
  setTimeout("$('ul.ui-autocomplete').css('z-index',3999)",500);</script>