<?php
  require('db.php');
   if (isset($_POST['reg-tk'])){
      $select = $conn->query('select * from accounts where user="'.$_POST['reg-tk'].'"');
      if (mysqli_num_rows($select) >= 1) {
        echo '<script>
            window.location = "../";
            alert("Tài khoản này đã tồn tại!");
        </script>';
      } else {
        if ($_POST['reg-pass'] === $_POST['reg-pass2']){
            $reg_tk = $_POST['reg-tk'];
            $reg_pass = md5(md5($_POST['reg-pass']));
            $reg_name = $_POST['reg-name'];
            $conn->query("insert into accounts values (null,'$reg_tk','$reg_pass','$reg_name',0,0,0.15,0,'img/userd.png')");
            echo '<script>
                        window.location = "../";
                        alert("Đăng ký tài khoản thành công!");
                      </script>';
        } else {
            echo '<script>
                        window.location = "../";
                        alert("Mật khẩu phải giống nhau!");
                      </script>';
        }
      }
      echo '<script>
                    window.location = "../";
                    alert("Wrong: Lỗi không xác định!");
                  </script>';
   }
?>