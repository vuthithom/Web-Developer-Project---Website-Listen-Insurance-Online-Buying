<?php 
    session_start();
    if (isset($_GET['lang'])){
        if ($_GET['lang'] == 'EN'){
            $_SESSION['lang'] = 'EN';
        } else {
            $_SESSION['lang'] = 'VN';
        }
        header('Location: ../');
    }
?>