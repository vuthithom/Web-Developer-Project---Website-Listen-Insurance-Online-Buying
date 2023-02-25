<?php
require 'db.php';
session_start();
//Thư mục bạn sẽ lưu file upload
$target_dir    = "../img/uploads/";
//Vị trí file lưu tạm trong server
$target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 140000000; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif','rar','txt');


if(isset($_POST["submit"])) {
    //Kiểm tra xem có phải là ảnh
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        echo "Đây là file ảnh - " . $check["mim e"] . ".";
        $allowUpload = true;
    } else {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }
}

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
if (file_exists($target_file)) {
    echo "File đã tồn tại.";
    $allowUpload = false;
}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["fileupload"]["size"] > $maxfilesize)
{
    echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
    $allowUpload = false;
}


// Kiểm tra kiểu file
if (!in_array($imageFileType,$allowtypes ))
{
    echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    $allowUpload = false;
}

// Check if $uploadOk is set to 0 by an error
if ($allowUpload) {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
    {
        $dt = $_FILES["fileupload"]["name"];
        $fgl = "FILE: <a href='img/uploads/$dt' target='_black'>$dt</a>";
        echo "File ". basename( $_FILES["fileupload"]["name"]).
        " Đã upload thành công";
        $id = $_SESSION['id'];
        $time = time();
        $conn->query('INSERT INTO chat values(null,"'.$fgl.'",'.$id.','.$time.',0)');
        echo $conn->error;
        echo $fgl;
    }
    else
    {
        echo "Có lỗi xảy ra khi upload file.";
    }
}
else
{
    echo "Không upload được file!";
}
?>