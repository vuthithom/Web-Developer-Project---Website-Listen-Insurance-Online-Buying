<?php 
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if ($id == '3578E5'){
            $_SESSION['chat-color'] = '#3578E5';
        }
        if ($id == 'pink') {
            $_SESSION['chat-color'] = 'pink';
        }
        if ($id == 'red') {
            $_SESSION['chat-color'] = 'red';
        }
        if ($id == 'green') {
            $_SESSION['chat-color'] = 'green';
        }
        if ($id == 'wheat') {
            $_SESSION['chat-color'] = 'wheat';
        }
        if ($id == 'gray') {
            $_SESSION['chat-color'] = 'gray';
        }
    }
?>
<script>
    window.close();
</script>