
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Aptech - Control Panel</title>
    <link rel="stylesheet" href="lib/style.css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="lib/misc/col.css">
    <link rel="stylesheet" href="lib/misc/table.css">
    <link rel="stylesheet" href="lib/misc/misc.css">
    <link rel="stylesheet" href="lib/misc/center.css">
    <link rel="stylesheet" href="lib/carousel/main.css">
    <link rel="preload" as="style" href="js/addon.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="js/addon.css" type="text/css">
    <script src="js.js"></script>
    <script src="lib/jquery.js"></script>
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script type="text/javascript"> (function() {
         var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
          css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })();
    </script>
</head>
<body>
    
    <?php
        session_start();
        require 'PHP/db.php';
        if (isset($_SESSION['id'])) {

        } else {
            header ('Location: ./');
        }
        require 'language/main.php';
    ?>
    <?php 
    if (isset($_SESSION['id'])){
        echo $_SESSION['id'];
        $selectt = $conn->query('select * from accounts where id = '.$_SESSION['id']);
        while ($pro = mysqli_fetch_array($selectt)){
            if (!($pro['admin'] == 1)){
                header('Location: ./');
            }
        }
    }
    ?>
    <script src="loginGUI/js.js"></script>
    <!--  Phone -->
    <?php include 'theme/mess.php' ?>
    <!-- Handle php -->
    <?php include 'php/admin/company.php'; ?>
    <?php include 'php/admin/product.php'; ?>
    <?php include 'php/admin/check-code.php'; ?>
    <style>
        body {
            background-color:#ebebeb;
        }
        html,body{
            overflow-x: hidden;
        }
        .smooth-move {
            transition: all 1s;
            background-color:rgb(236, 234, 234);
            width:21vmin;
            height:100%;
            border-left:1px solid black;
        }
        .rm-t {
            color:white;
            text-decoration: none;
            margin-top:7px;
        }
        .hover-me3 {
            color:black;
            font-size:1.6vmin;
            text-decoration:none;
        }
        .hover-me3:hover {
            text-decoration:none;
            padding-left:0px;
            width:100%;
        }
        .hover-link {
            color:blue;
            font-size:2vmin;
            text-decoration:none;
        }
        .hover-link:hover {
            color:red   ;
            text-decoration: none;
            font-size:2vmin;
        }
    </style>
     <!-- Admin - Control panel -->
     <div class="fixed-top smooth-move" id="admin" style="background-color:white;color:white">
        <div class="centered2" style="width:80%;color:black;font-size:1.7vmin">
        <b>C1908G2 - V Triple T</b>
        </div>
        <div class="centered1" style="top:12%">
            <center>
            
            <div style="text-align:left;margin-left:13%">
                <div style="margin-top:15vmin;display:flex;margin-bottom:1vmin;width:100%">
                    <div style="margin-right:0.2vmin;">
                    <img src="img/user.png" alt="" style="width:2vmin">
                    </div>
                    <div style="color:black;font-size:1.7vmin">
                        <?php 
                            if (isset($_SESSION['id'])){
                                $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                                while ($acc = mysqli_fetch_array($select)){
                                    echo $acc['name'].' ID: '.$acc['id'];
                                    $cash = $acc['cash'];
                                }
                            }
                        ?>
                    </div>
                </div>
                <div style="width:160px">
                    <p style="color:black;font-size:1.8vmin">
                        <a href="./main.php" class="rm-t hover-me3" style="font-size:1.8vmin">
                    SAFE CARS LIMITED
                        </a>
                    </p>
                </div>
                <a href="main.php" class="rm-t hover-me3">
                    <div class="hover-me2 hover-me3 rm-t" style="padding:0px">
                        <div class="lib-tb">
                            <div class="tb-left" style="width:2.2vmin;color:green">
                                <i class="fab fa-accusoft"></i>
                            </div>
                            <div class="tb-right">
                                <?= $VN_admin_home ?>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./admin-control.php" class="rm-t hover-me3">
                    <div class="hover-me2 hover-me3 rm-t" style="padding:0px">
                        <div class="lib-tb">
                            <div class="tb-left" style="width:2.2vmin;color:green">
                                <i class="far fa-address-card"></i>
                            </div>
                            <div class="tb-right" style="width:60%">
                                <?= $VN_admin_dashboard ?>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./admin-control.php?v=1" class="hover-me3">
                    <div class="hover-me2 hover-me3 rm-t" style="padding:0px">
                        <div class="lib-tb">
                            <div class="tb-left" style="width:2.2vmin;color:orange">
                                <i class="fas fa-archway"></i>
                            </div>
                            <div class="tb-right">
                                <?= $VN_admin_company ?>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./admin-control.php?v=2" class="hover-me3">
                    <div class="hover-me2 hover-me3 rm-t" style="padding:0px">
                        <div class="lib-tb">
                            <div class="tb-left" style="width:2.2vmin;color:orange">
                                <i class="fas fa-ambulance"></i>
                            </div>
                            <div class="tb-right">
                                <?= $VN_admin_product ?>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./admin-control.php?v=code" class="hover-me3">
                    <div class="hover-me2 hover-me3 rm-t" style="padding:0px">
                        <div class="lib-tb">
                            <div class="tb-left" style="width:2.2vmin;color:blue">
                                <i class="fab fa-affiliatetheme"></i>
                            </div>
                            <div class="tb-right">
                                <?= $VN_admin_code ?>
                            </div>
                        </div>
                    </div>
                </a>
                <!--  -->
                <!--  -->
                <div style="margin-top:10px">
                    <a href="language/setLang.php?lang=EN" target="_black"><img src="img/us.png" alt=""></a>
                    <a href="language/setLang.php?lang=VN" target="_black"><img src="img/vn.png" alt=""></a>
                </div>
            </div>
            </center>
        </div>
    </div>
    <!-- Stats Analytic User Partner-->
    <?php if (!(isset($_GET['v']))) { ?>
    <div class="container" style="margin-left:20vmin;max-width: 1250px;background-size:cover">
        <div style="display:flex;padding-top:20px;margin:auto;height:150px;padding-left:10vmin">
            <div class="card" style="width: 29vmin;height:12.5vmin;margin:5px">
                <div class="card-body"> 
                    <p class="card-text" style="color:white">
                        <ul>
                            <li class="hover-me2 hover-me3"><?= $VN_admin_totaluser ?>: 
                            <?php 
                                    $select = $conn->query('select * from accounts');
                                    echo mysqli_num_rows($select);
                            ?>
                            </li>
                            <li class="hover-me2 hover-me3"><?= $VN_admin_partnercompany ?>:
                            <?php 
                                    $select = $conn->query('select * from company');
                                    echo mysqli_num_rows($select);
                            ?>
                            </li>
                            <li class="hover-me2 hover-me3"><?= $VN_admin_totalpackages ?>:
                            <?php 
                                    $select = $conn->query('select * from packet');
                                    echo mysqli_num_rows($select);
                            ?>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
            <!-- Totall -->
            <?php 
            $total;
            $select = $conn->query('select * from packet');
            while ($pro = mysqli_fetch_array($select)){
                global $total;
                $total+=$pro['total'];
            }
            ?>
            <div class="card" style="width:40vmin;height:12.2vmin;margin:5px;background-color: #03a9f5">
                <div class="card-body"> 
                    <div style="display:flex">
                    <p class="card-text" style="color:white">
                            <p style="color:white;font-size:1.9vmin"><?= $VN_admin_target ?></p>
                            <div style="margin-left:1vmin;width:7vmin;height:2.8vmin;background-color:#e6f7e6;border-radius:20vmin;text-align:center;padding:0.25vmin">
                                <p style="color:green;font-size:1.6vmin;font-weight:bold"><?Php echo $total/600000*100?>%</p>
                            </div> 
                    </p>
                    </div>
                    <div style="width:100%" class="bottom-right">
                        <div style="float:right;color:white;font-size:2.5vmin">
                            <?php 
                            echo '$'.number_format($total).' / 600,000$';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
        </div>
        <!-- Skill -->
        <div style="margin-left:10.8vmin">
        <?php 
            
            $select = $conn->query("select * from company");
            while ($preo = mysqli_fetch_array($select)){
                $result = mysqli_query($conn, 'SELECT SUM(total) AS totalz FROM packet where belong ='.$preo['id']);
                $row = mysqli_fetch_assoc($result); 
                $sum = $row['totalz'];

               echo '<p>'.$preo['name'].'<br>'.$sum/200000*100 .'% '.$VN_admin_revenue.' '.number_format($sum).'$ / 200,000$ 
               <br>
           </p>
           <div class="tt" style="margin-bottom:2vmin">
               <div class="skills aa" style="width:'.$sum/200000*100 .'%"></div>
           </div>';
                $sum = 0;
            }
        }
        ?>



        </div>
        <!-- Display Item  -->
        <?php 
            /* View ID */
            $v = $_GET['v'] ?? '';
            $i = $_GET['i'] ?? '';
        ?>
    </div>
    <!-- Display Company Edit Form -->
    <?php if ($v  == 1) { ?>
            <div style="margin-left:2%">
                <div class="container" style="max-width:1100px;">
                    <div style='margin-top:0%;margin-left:0%'>
                    <table class="table">
                    <div style="width:100%">
                        <div style="float:right">
                        <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('c-add')">Add Company</span>
                        <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('c-edit')">Edit Company</span>
                        <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('c-delete')">Delete Company</span>
                        
                        </div>
                    </div>
                    <thead class="thead-dark">
                        <h2>Companies</h2>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Belong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $select = $conn->query("SELECT * FROM COMPANY");
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<tr>
                                <th scope="row">'.$pro['id'].'</th>
                                <td>'.$pro['name'].'</td>
                                <td>'.$pro['image'].'</td>
                                <td>#'.$pro['admin'].'</td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
    <?php } ?>
    <!-- Display Product Edit Form -->
    <?php if ($v  == 2) { ?>
            <div style="margin-left:3%">
            <div class="container" style="max-width:1100px">
                <div style='margin-top:0%;margin-left:0%'>
                <table class="table">
                <div style="width:100%">
                    <div style="float:right">
                    <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('p-add')">Add Packages</span>
                        <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('p-edit')">Edit Packages</span>
                        <span class="btn btn-black" style="width:130px;height:36px;padding:5px;margin-right:15px" onclick="lgGUI('p-delete')">Delete Packages</span>
                    </div>
                </div>
                <thead class="thead-dark">
                    <h2>Packages</h2>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Belong</th>
                    <th scope="col">Vehicle</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Coupon Tags</th>
                    <th scope="col">Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $select = $conn->query("SELECT * FROM packet");
                        while ($pro = mysqli_fetch_array($select)){
                            echo '<tr>
                            <th scope="row">'.$pro['id'].'</th>
                            <td>'.$pro['name'].'</td>
                            <td>#'.$pro['price'].'</td>
                            <td>'.$pro['quantity'].'</td>
                            <td>'.$pro['belong'].'</td>
                            <td>#'.$pro['vehicle'].'</td>
                            <td>'.$pro['image'].'</td>
                            <td>'.$pro['description'].'</td>
                            <td>#'.$pro['coupon'].'</td>
                            <td>'.number_format($pro['total']).'$</td>
                            </tr>';
                        }
                    ?>
                </tbody>
                </table>
                </div>
            </div>
            </div>
    <?php } ?>
    <!-- Add Product -->
    <!--  Delete product -->
    <?php if ($v == 2 && $i == 3) { ?>
        <div class="container">
            <div style="margin-left:17%;margin-top:4%;width:25%;margin-bottom:60px">
                <form action="">
                    <h4>DELETE Product</h4>
                    ID:
                    <select name="dproduct-id" id="">
                        <?php 
                            $select = $conn->query('select * from packet');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.'ID: '.$pro['id'].' '.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>
    <?php } ?>
    <!-- Code Check -->
    <?php if ($v == 'code') { ?>
        <div class="container">
        <div style="margin-left:17%;margin-top:4%;width:25%;margin-bottom:60px">
            Enter Available's Code:
            <form action="check.php" method="get">
                <input type="text" name="name" class="form-control" autocomplete="OFF">
                <input type="submit" value="Check Now">
            </form>
        </div>
    </div>
    <?php } ?>
    <?php include 'theme/admin/cadd.php'?>
    <?php include 'theme/admin/cedit.php'?>
    <?php include 'theme/admin/cdelete.php'?>
    <?php include 'theme/admin/padd.php'?>
    <?php include 'theme/admin/pedit.php'?>
            <?php include 'theme/admin/pdelete.php'?>
    <?php include 'theme/chat.php' ?>
    <script src="js/admin.js"></script>
    <!-- Menu -->
</body>
</html>

<script src="./js/popup.js"></script>
<script src="js/elem.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/mbr-clients-slider.js"></script>


<!-- Handle Product -->

