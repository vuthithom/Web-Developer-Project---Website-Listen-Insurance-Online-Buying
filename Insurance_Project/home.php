<?php 
    session_start();
    if (isset($_SESSION['id'])){
        header("Location: main.php");
    } else {
        header("Location: login.php");
    }
?>