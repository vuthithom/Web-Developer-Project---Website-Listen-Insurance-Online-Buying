<?php 
    require 'db.php';
    session_start();
    if (isset($_POST['title'])){
        $id = $_GET['id'];
        $auth = $_SESSION['id'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $rate = $_POST['rate'];
        $sel = $conn->query("SELECT * FROM rate where belong = $id and auth = ".$auth);
        $count = mysqli_num_rows($sel);
        if ($count == 0){
            $conn->query("INSERT INTO rate values(null,$id,$auth,'$title','$subtitle',$rate)");
            echo '<center><h2>THANKS FOR RATING</h2>
            You Have Made Us To Be Better ^^ TY</center>
                        <script>
                setTimeout(() => {
                    window.location = "../account.php";
                }, 6000);
            </script>';
            exit();
        } 
        if ($count >= 1){
            echo '<script>
                                        window.location = "../details.php?id='.$id.'";
                                        alert("you already rate for this product!");
                                    </script>';
        }
    }
?>