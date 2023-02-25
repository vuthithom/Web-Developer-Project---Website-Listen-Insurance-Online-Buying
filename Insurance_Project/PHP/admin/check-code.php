<?php 
    $c_code = $_GET['c-code'] ?? '';
    if (strlen($c_code) >= 1){
        $select = $conn->query("select * from code where name = '$c_code'");
        while ($pro = mysqli_fetch_array($select)){
            if ($c_code == $pro['name']){
                echo '<script>
                window.location = "./admin-control.php?v=3";
                alert("Code có tồn tại ^.^! '.$pro['name'].' Package");
            </script>';
            } else {
                echo '<script>
                        window.location = "./admin-control.php?v=3";
                        alert("Code không tồn tại!");
                    </script>';
            }
        }
        if (mysqli_num_rows($select) <= 0) {
            echo '<script>
                window.location = "./admin-control.php?v=3";
                alert("Code không tồn tại!");
            </script>';
        }
    }
?>