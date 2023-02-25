<?php
include 'db.php';
?>
<?php 
        $select = $conn->query("select * from packet");
        while ($product = mysqli_fetch_array($select)){
            $res[] = $product['name'];
        }
        echo json_encode($res);
?>