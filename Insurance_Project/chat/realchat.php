<?php 
    require '../php/db.php';
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $select = $conn->query("select * from chat");
    if (!($_SESSION['chat-color'])){
        $_SESSION['chat-color'] = pink;
    }
    $data2 = 0;
    $imga = '';
?>
<style>
    .child-right {
    background:green;
    height: 100%;
    width: 50%;
    position: absolute;
    right: 0;
    top: 0;
}
</style>
    <?php 
    while ($pro = mysqli_fetch_array($select)){
        $id = $pro['belong'];
        $type = $pro['type'];
        $time = date("H:i:s",$pro['time']);
        $data = $conn->query("select * from accounts where id = $id order by time asc");
        $player;
        $imgngta;
        $time;
        $type;
        while ($pre = mysqli_fetch_array($data)){
            $player = $pre['name'].' ';
            $idd = $pre['id'];
            $imgngta = $pre['avatar']. ' ';
        }
        if ($id == $_SESSION['id']){
            $float='left';
            $color= ''.$_SESSION['chat-color'].'';
            $font = 'black';
            $ok = true;
            $data2 = 0;
        } else {
            $float='right';
            $color='#e3e1e1';
            $font = 'black';
            $temp;
            if ($data2 == 0){
                $data2++;
                $imga = '<img src="'.$imgngta.'" alt="" style="width:25px;border-radius:50%">';
                echo '<div style="margin-left:45px;width:83%;height:23px;color:black">
                        <div style="float:right;font-size:2vmin">
                        '.$player.'
                        </div>
                    </div>';
                    $temp = $idd;
            } 
            if ($idd != $temp){
                $temp = $player;
                $imga = '<img src="'.$imgngta.'" alt="" style="width:25px;border-radius:50%">';
                echo '<div style="margin-left:45px;width:83%;height:23px;color:black">
                        <div style="float:right;font-size:2vmin">
                        '.$player.'
                        </div>
                </div>';
            }
        }
        $time = date('h:i:s', $pro['time']);
        ?>
        <div style="width:320px;height:fit-content;;margin-left:0px;" class="cont">
            
            <div style="float:left;position:absolute;z-index:99399;top:-12px;right:-4px">
            <?php echo $imga; ?>
            </div>

                <?php if ($type==0 || $type==10) {?>
                    <div class="cont d-inline-block" style="">
                    <div class="float-<?=$float?>" style="<?=$float?>:0px;
                    height:fit-content;margin-left:12px;margin-right:5px;margin-top:0px;margin-bottom:0px;color:<?=$font?>;background-color:<?=$color?>;
                    width: fit-content; padding:5px;padding-left:10px;padding-right:10px;border-radius:3vmin;font-size:14px;word-wrap: break-word;"
                    data-toggle="tooltip" data-placement="top" title="<?php echo $time; ?>">
                    <?php 
                        global $data;
                        $ok = str_replace(
                            array(":)", ":D", "XD", "<3", "</3"),
                            array("🙂","😁", "😆", "❤️", "💔"), $pro['text']);
                        $ok2 = str_replace("https:","<a href='$ok' target='_black'>Link</a> ",$ok);
                        if ($type == 0) {
                            echo '<p>'.$ok2 .'</p>';
                        } 
                        if ($type == 10){
                            echo '<p style="font-style: italic;font-size:12px">Tin nhắn đã bị xóa</p>';
                        }?>
                    </div>
                </div>
                <?php } ?>
                <?php if ($type==1) {?>
                    <div style="margin:3px;margin-left:35px">
                    <span style="color:gray;font-size:13px">
                    <center>Đã đổi tên nhóm sang <?php echo $pro['text'];?></center>
                    </span>

                    </div>
                <?php } ?>
                <!--  -->
            <?php $imga = ''?>
        </div>
        <?php
    }
    ?>
    <script>
        document.getElementById('chatday').scrollTop = 33331;
    </script>