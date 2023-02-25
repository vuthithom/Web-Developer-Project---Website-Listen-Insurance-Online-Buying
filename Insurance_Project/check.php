<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <!--  Notification -->
    <?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    include 'theme/noti.html' ?>
    <!--  Phone -->
    <?php include 'theme/phone.php' ?>
    <style>
        body {
            height:100px !important;
            font-family: 'Roboto Slab', serif;
            background-image: url('img/slide001.png');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position-y:10%;
        }
    </style>
    <center>
    <div style="width:910px;height:250px;margin-top:100px" class="cont">
        <div class="centered">
            <div style="width:430px;height:270px;background-color: rgb(70, 69, 65);border: 2px solid black;border-radius: 3%;opacity: 0.8;"></div>
        </div>
        <div class="centered1">
            <img src="img/logo.png" style="width:130px" alt="">
        </div>
        <div class="centered" style="top:37%;Color:white;font-size: 17px;">
                <p> <span style="font-size:10px;color:#d6d6d6">INSURANCE CODE</span><br>
                    <?php
                        $people;
                        $date1;
                        $buytime;
                        if (isset($_GET['name'])){
                            require 'PHP/db.php';
                            $select = $conn->query('select * from code where name = "'.$_GET['name'].'"');
                            while($code = mysqli_fetch_array($select)){
                                echo $code['name'];
                                $people = $code['belong'];
                                $date1 = $code['date'];
                                $buytime = $code['buy'];
                            }
                            if (mysqli_num_rows($select)<=0){
                                echo '<script>
                                            window.location = "./admin-control.php";
                                            alert("Your input code is empty!");
                                        </script>';
                            }
                        } else {
                            echo '<script>
                                    window.location = "./";
                                </script>';
                        }
                    ?>
                    <br>
                </p>
        </div>
        <div class="centered2" style="color:white;font-size:13px;bottom:-20px">
            <!-- 31/05/2020 - <span style="color:rgb(202, 5, 5)">ĐANG CHỜ KÍCH HOẠT</span><br> -->
            <?php
            echo date('H:i:s m/d/Y', $buytime);
            echo ' - ';
            echo date('H:i:s m/d/Y', $date1);
            ?>
            <br><span style="color:rgb(108, 255, 132)">
            <?php
                if (time() >= $date1) {
                    echo 'ĐÃ HẾT HẠN';
                } else {
                    echo 'ĐANG SỬ DỤNG!';
                }
            ?>
            </span>
        </div>
        <div class="bottom-left" style="left:28%;bottom:0px;font-size:10px;color:white">
            © <?php 
            $select =  $conn->query('select * from accounts where id ='.$people);
            while ($codepeo = mysqli_fetch_array($select)) {
                echo $codepeo['name'];
            }
            ?>
        </div>
    </div></center>
        <center>
            <div style="color:white;margin-top:60px">
            THANKS FOR USING OUR SERVICES<br>
                <a href="account.php">HOME</a>
            </div>
        </center>

</body>
</html>