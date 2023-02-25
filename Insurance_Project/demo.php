<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php 
    require 'php/db.php';
    if (isset($_POST['title'])){
      $title = $_POST['title'];
      if ($_POST['search'] == 1){
        $sel = $conn->query("SELECT * FROM PACKET where name like '%$title%'");
        echo $conn->error;
        while ($pro = mysqli_fetch_array($sel)){
          echo '<a href="details.php?id='.$pro['id'].'">'.$pro['name'].'</a><br>';
        }
      }
      if ($_POST['search'] == 2){
        $sel = $conn->query("SELECT * FROM PACKET where name like '%$title%'");
        echo $conn->error;
        while ($pro = mysqli_fetch_array($sel)){
          echo '<a href="details.php?id='.$pro['id'].'">'.$pro['name'].'</a><br>';
        }
      }
      if ($_POST['search'] == 2){
        
      }
    }
  ?>
  <form action="" method="post">
    <input type="text" name="title">
    <select name="search" id="">
      <option value="1">Theo ten</option>
      <option value="2">Theo gia</option>
      <option value="3">Theo cong ty</option>
    </select>
    <input type="submit">
  </form>
</body>
</html>
