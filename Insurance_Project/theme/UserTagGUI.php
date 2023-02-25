<?php 
    if (isset($_SESSION['id'])){
        $dt = 3;
        $data = 21.2*$dt;
        ?>
        <div id="hold" class="top-left hover-menuu" style="top:30px;left:215px;font-size:13px">
            <div id="p" style="height:<?=$data?>px;width:160px;border: 1px solid black;background-color:white">
                <div style="padding:0px;margin:5px;height:0%">
                    <a href="account.php" class="hover-me3" style="padding:0px">
                    <div class="lib-tb hover-me3">
                        <div class="tb-left" style="width:8%">
                            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                        </div>
                        <div class="tb-right" style="font-size:11px">
                            <?=$VN_Tags_Accounts?>
                        </div>
                    </div>
                    </a>
                    <?php
                                    if (isset($_SESSION['id'])){
                                        $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                                        while ($acc = mysqli_fetch_array($select)){
                                            if ($acc['admin'] == 1) {
                                                echo '
                                                <a href="admin-control.php" class="hover-me3" style="padding:0px">
                                                <div class="lib-tb hover-me3">
                                                    <div class="tb-left" style="width:8%">
                                                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="tb-right" style="width:63%;font-size:11px">
                                                        '.$VN_Tags_Admin.'
                                                    </div>
                                                </div>
                                                </a>    
                                                ';   
                                            }
                                        }
                                    } 
                    ?>
                    <a href="PHP/logout.php" class="hover-me3" style="padding:0px">
                    <div class="lib-tb hover-me3">
                        <div class="tb-left" style="width:8%">
                            <i class="fa fa-child" aria-hidden="true"></i>
                        </div>
                        <div class="tb-right" style="font-size:11px">
                            <?=$VN_Tags_Logout?>
                        </div>
                    </div>
                    </a><br>
                </div>
            </div>
        </div>
<?php
    }
?>