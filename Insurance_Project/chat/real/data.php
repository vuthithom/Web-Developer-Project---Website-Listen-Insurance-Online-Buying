<?php 
    session_start();
    require '../../php/db.php';
    $select = $conn->query("SELECT * FROM ACCOUNTS where id = ".$_SESSION['id']);
    $product = $conn->query("SELECT * FROM likes where status = 1 and auth = ".$_SESSION['id']);
    while ($pro = mysqli_fetch_array($select)){
        $coin = $pro['points'];
    }
                if (isset($_GET['v'])){
                    if ($_GET['v'] == 'loved'){
                        echo '<div class="container" style="margin-top:70px;">
                        <h3>Loved product 😆</h3>
                    </div>';
                        while ($prod = mysqli_fetch_array($product)){
                            $proid = $prod['belong'];
                            $inpro = $conn->query("SELECT * FROM PACKET where id = ".$proid);
                            while ($pro = mysqli_fetch_array($inpro)){
                                $namene = $pro['name'];
                                $idne = $pro['id'];
                            }
                        ?>
                        <div class="container" style="margin-top:15px;margin-bottom:10px;background-color:rgb(239, 239, 239);padding:13px">
                            <div class="lib-tb">
                                <div class="tb-left" style="width:100px;margin-right:20px">
                                    <img src="img/muabaohiem.png" alt="" style="width:100%">
                                </div>
                                <div class="tb-right" style="width:90%">
                                    <a href="details.php?id=<?=$idne?>" class="hover-me2">
                                        <?=$namene?>
                                    </a>
                                    <br>
                                    😆 your loved product here
                                </div>
                            </div>
                        </div>      
                        <?php
                        }
                    }
                    if ($_GET['v'] == 'coins'){
                        ?>
                            <div STYLE="WIDTH:100%;margin-top:70px  ">
                                <center>
                                <img src="img/vip.png" alt="">
                                <BR>
                                <div style="margin-top:10px">
                                <p style="line-height:23px">
                                MEMBER BENEFITS<br>
                                YOU NEED 240 COINS TO UPGRADE TO VIP MEMBER<br>
                                WHEN YOU BECOME A VIP MEMBER
                                </p>
                                </div>
                                <hr>
                                <div style="font-weight:400;font-size:2.2vmin;font-style: italic;">
                                Alot of Coupon
                                <br>Support 24/7
                                <br>Access to new Feature
                                <br>Good add fund percent (100%)
                                </div>
                                <br>
                                <div class="progress" style="width:50%">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$coin/240*100 . '%'?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="120"><?=$coin/240*100?>%</div>
                                </div>
                                <br>
                                <?php if ($coin/240*100 >= 100){
                                    echo '<button class="btn btn-danger" style="height:50px;padding-top:13px">
                                    UPGRADE NOW
                                    </button>';
                                }?>
                                </center>
                            </div>
                        <?php } ?>
                    <?php
                    if ($_GET['v'] == 10){
                   ?>
                        <div style="margin-top:50px">
                            <h2>Đổi mật khẩu</h2>
                            <form action="PHP/pass.php" method="POST">
                                <input type="password" class="form-control w-50" placeholder="Mật khẩu hiện tại" name="MK" 
                                autocomplete="OFF" required >
                                <input type="password" class="form-control w-50" placeholder="Mật khẩu mới" name="MK1" 
                                autocomplete="OFF" required >
                                <input type="password" class="form-control w-50" placeholder="Nhập lại mật khẩu mới" name="MK2" 
                                autocomplete="OFF" required >
                                <input type="submit" name="" id="" class=" w-50 form-control">
                            </form>
                        </div>
                    <?php } ?>
                        <!--  -->
                    <?php
                    if ($_GET['v'] == 1){
                        ?>
                            <table class="table table-sm table-hover" style="margin-top:50px">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Price</th>
                    </tr>
                    <?php 
                        $select = $conn->query('select * from history where belong = '.$_SESSION['id'].' order by id desc LIMIT 5');
                        while ($pro = mysqli_fetch_array($select)){
                            echo '<tr>';
                            echo '<td>'.$pro['id'].'</td>';
                            echo '<td>'.date('H:i:s d/m/Y', $pro['time']).'</td>';
                            echo '<td>'.$pro['name'].'</td>';
                            if ($pro['name'] == 'History'){
                                echo '<td>-'.number_format($pro['price']).'$</td>';
                            }
                            if ($pro['name'] == 'Revenue'){
                                echo '<td>+'.$pro['price'].'$</td>';
                        }
                    ?>
                </tr>
            <?php  } ?>
            <!--  -->
                <?php 
                    $select = $conn->query('select * from history where buyer = '.$_SESSION['id'].' order by id desc LIMIT 10');
                    while ($pro = mysqli_fetch_array($select)){
                        echo '<tr>';
                        echo '<td>'.$pro['id'].'</td>';
                        echo '<td>'.date('H:i:s d/m/Y', $pro['time']).'</td>';
                        echo '<td>'.$pro['name'].'</td>';
                        if ($pro['name'] == 'History'){
                            echo '<td>-'.number_format($pro['price']).'$</td>';
                        }
                        if ($pro['name'] == 'Revenue'){
                            echo '<td>+'.number_format($pro['price']).'$</td>';
                    }
                ?>
                </tr>
            <?php  } 
            }
        }?>
            </table>


            <!--  -->
            <?php
                    
                    if ($_GET['v'] == 2){
                        ?>
                        <table class="table table-sm table-hover" style="margin-top:50px">
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Time</th>
                        </tr>
                        <?php 
                            $select = $conn->query('select * from code where auth = '.$_SESSION['id'].' order by id desc LIMIT 10');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<tr>';
                                echo '<td>'.$pro['id'].'</td>';
                                echo '<td><a target="_black" class="hover-down" href="check.php?name='.$pro['name'].'">'.$pro['name'].'</a></td>';
                                echo '<td>'.date('H:i:s d/m/Y', $pro['buy']).'</td>';
                        ?>
                        </tr>
                    <?php  } ?>
                    </table>
                        <?php
                    }
            
            ?>
            <!--  -->
            <?php
                    
                    if ($_GET['v'] == 3){
                        ?>
                            <div style="margin-top:70px">
                            <img src="img/acb.jpg" alt="" style="width:94px">
                            Chuyển Khoản qua ngân hàng<br>
                            <hr>
                            Stk: 5740107<br>
                            Chủ Tài Khoản: Lê Minh Triệu<br>
                            ACB TP.HCM
                            <br>
                            Lưu ý: lời nhắn điền [Số tiền + ID Tài khoản]<br><br>
                            Thành viên nhận được 96% tổng số tiền<br>
                            Thành viên V.I.P nhận được 100% tổng số tiền
                            </div>
                        <?php
                    }
            
            ?>
            