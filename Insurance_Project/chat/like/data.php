<?php
require '../../PHP/db.php';
session_start();
$dt = $_GET['v'];
$status = 0;
$checklike = $conn->query("SELECT * FROM likes where belong = $dt and auth = " . $_SESSION['id']);
    while ($pro = mysqli_fetch_array($checklike)) {
        $status = $pro['status'];
    }
$checkalreadylike = $conn->query("SELECT * FROM likes where belong = $dt and auth = " . $_SESSION['id']);

$data = $conn->query("select * from packet where id = " . $_GET['v']);
/*  */
if (mysqli_num_rows($checkalreadylike) >= 1) {
    if ($status == 1) {
        $conn->query("UPDATE likes set status = 0 where belong = $dt and auth = " . $_SESSION['id']);
        $conn->query("UPDATE packet set likes=likes-1 where id = " . $_GET['v']);
    } 
    if ($status == 0){
        $conn->query("UPDATE likes set status = 1 where belong = $dt and auth = " . $_SESSION['id']);
        $conn->query("UPDATE packet set likes=likes+1 where id = " . $_GET['v']);
    }
}
if (mysqli_num_rows($checkalreadylike) <= 0) {
    $packet = $_GET['v'];
    $auth = $_SESSION['id'];
    $conn->query("INSERT INTO likes values(null,$packet,$auth,1)");
    $conn->query("UPDATE packet set likes=likes+1 where id = " . $_GET['v']);
}
/* Output */
    $data = $conn->query("select * from packet where id = " . $_GET['v']);
    while ($pro = mysqli_fetch_array($data)) {
        if ($status == 0){
            echo '<span style="color:#e52322">'.$pro['likes'] . ' LOVE <i class="fas fa-heartbeat"></i></span>';
        }
        if ($status == 1){
            echo '<span style="color:black">'.$pro['likes'] . ' LOVE <i class="fas fa-heartbeat"></i></span>';
        }
    }
?>
