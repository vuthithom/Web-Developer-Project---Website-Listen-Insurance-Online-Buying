<?php 
        require 'db.php';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = time();
        session_start();
        if (isset($_SESSION['id'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $cmnd = $_POST['cmnd'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $gender = $_POST['sex'];
            $bod = $_POST['date'];
            $carID = $_POST['carID'];

            $people = $_SESSION['id'];
            $price;
            $quantity;
            /*  */
            $packet_belong;
            $auth;
            $select = $conn->query('select * from packet where id = '.$_GET['id']);
            while ($pro = mysqli_fetch_array($select)){
                $quantity = $pro['quantity'];
                $price = $pro['price'];
                $packet_belong = $pro['belong'];
            }
            $select = $conn->query('select * from company where id = '.$packet_belong);
            while ($pro = mysqli_fetch_array($select)){
                $auth = $pro['admin'];
            }
            echo $quantity;
            if ($quantity >= 1) {
                $select = $conn->query('select * from accounts where id = '.$_SESSION['id']);
                while ($pro = mysqli_fetch_array($select)){
                    if ($pro['cash'] >= $price){
                        $trutien = $conn->query("UPDATE accounts set cash=cash-$price,points=points+12 where id = ".$_SESSION['id']);
                        if ($trutien === true){
                            $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $res = "";
                            for ($i = 0; $i < 6; $i++) {
                                $res .= $chars[mt_rand(0, strlen($chars)-1)];
                            }
                            $res2 = "";
                            for ($i = 0; $i < 6; $i++) {
                                $res2 .= $chars[mt_rand(0, strlen($chars)-1)];
                            }
                            $res3 = "";
                            for ($i = 0; $i < 6; $i++) {
                                $res3 .= $chars[mt_rand(0, strlen($chars)-1)];
                            }
                            /* Generator New Code */
                            $addt = time() + 86400*365;
                            $packet = $_GET['id'];
                            $conn->query("INSERT INTO code values(null,'$res-$res2-$res3',$packet,1,$people,0,$addt,$time,'$fullname','$phone','$cmnd','$gender','$bod','$address','$email','$carID')");
                             /* Update Packages Quantity */
                            $conn->query("UPDATE packet SET quantity=quantity-1,total=total+price where id = ".$_GET['id']);
                             /* Add buyer history */
                            $conn->query("INSERT INTO history values (null,'History',$time,$people,0,$price)");
                             /* Add Author History */
                            $temp = $price-($price-$price*0.85);
                            $conn->query("INSERT INTO history values (null,'Revenue',$time,0,$auth,$temp)");
                            $conn->query("UPDATE accounts SET cash=cash+$temp where id = $auth");
                            echo '<script>
                                        window.location = "../check.php?name='.$res.'-'.$res2.'-'.$res3.'";
                                        alert("Success Buying! +12 Coins");
                                    </script>';
                        }
                    } else {
                        /* Don't have enough money */
                        echo '<script>
                                        window.location = "../";
                                        alert("You dont have enought money!");
                                    </script>';
                    }
                }
            } else {
                /* Product out of stock */
                echo '<script>
                                        window.location = "../";
                                        alert("Product out of stock!");
                                    </script>';
            }
        } else {
            echo '<script>
                    window.location = "../";
                    alert("You are are not in LOGIN SESSION!");
                </script>';
        }
?>