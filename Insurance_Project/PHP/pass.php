<?php 
    session_start();
    require 'db.php';
    if (isset($_POST['MK'])){
        $select = $conn->query("SELECT * FROM ACCOUNTS where id = ".$_SESSION['id']);
        while ($pro = mysqli_fetch_array($select)){
            $pass = md5(md5($_POST['MK']));
            if ($pro['pass'] == $pass){
                if ($_POST['MK1'] == $_POST['MK2']){
                    $pass2 = md5(md5($_POST['MK2']));
                    $sel = $conn->query("UPDATE accounts set pass = '$pass2' where id = ".$_SESSION['id']);
                    if ($sel === TRUE){
                        echo 'Đổi pass thành công';
                    } else {
                        echo 'Có lỗi vui lòng thử lại';
                        echo $conn->error;
                    }
                }
            } else {
                echo 'Mật Khẩu của bạn không chính xác!';
            }
        }
    }
?>