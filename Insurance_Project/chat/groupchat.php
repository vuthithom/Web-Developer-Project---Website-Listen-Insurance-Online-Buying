<?php
require '../php/db.php';
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$select = $conn->query("select * from groupchat");
while ($pro = mysqli_fetch_array($select)){
    echo $pro['name'];
}
?>