<?php
  require('db.php');
   if (isset($_POST['tk'])){
      $select = $conn->query('select * from accounts where user="'.$_POST['tk'].'"');
      while ($acc = mysqli_fetch_array($select)) {
          if ($acc['pass'] === md5(md5($_POST['mk']))) {
            session_start();
            /* Set session */
            $_SESSION['id'] = $acc['id'];
            $_SESSION['user'] = $acc['user'];
            $conn->query('update accounts set time = '.time().' where id ='.$_SESSION['id']);
            echo '<script>
                    window.location = "../";
                    alert("Login! Success.");
                  </script>';
          } 
      }
      echo '<script>
                    window.location = "../";
                    alert("User or password are wrong!");
                  </script>';
   }
?>